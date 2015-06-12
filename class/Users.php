<?php

namespace App;


class Users {

    public $pseudo;
    public $email;
    public $rank;

    public function login($pseudo=false, $password=false){

        global $db;

            if(!isset($_SESSION['forgecms.user'])):

                if($pseudo!=false):

                    $req = $db->prepare('SELECT * FROM forgecms_users WHERE pseudo=? AND password=?', [$pseudo, md5($password)], true);

                    if(isset($req)&&!empty($req)):

                        $_SESSION['forgecms.user']['pseudo']=$pseudo;
                        $_SESSION['forgecms.user']['email']=$req->email;
                        $_SESSION['forgecms.user']['rank']=$req->rank;

                        return true;
                        $_SESSION['forgecms.return']['success']=true;

                    else:

                        return false;
                        $_SESSION['forgecms.return']['errors']=true;

                    endif;

                endif;

            else:

                return true;

            endif;

    }

    public function logout(){

        unset($_SESSION['forgecms.user']);

        return true;

    }

    public function signin($get = array()){

        global $db;

        global $app;

        if(isset($get['pseudo'])&&!empty($get['pseudo'])){
            $req = $db->prepare('SELECT * FROM forgecms_users WHERE pseudo=?', [$get['pseudo']], true);
            if(empty($req)){
                $pseudo = true;
            }else{
                $signinReturn['forgecms.errors']['pseudo_exist'] = 'Ce pseudo est déjà utilisé';
            }
        }else {
            $signinReturn['forgecms.errors']['pseudo_empty'] = 'Veuillez indiquer votre pseudo';
        }

        if(isset($get['name'])&&!empty($get['name'])){
            $name = true;
        }else {
            $signinReturn['forgecms.errors']['name_empty'] = 'Veuillez indiquer votre nom';
        }

        if(isset($get['lastname'])&&!empty($get['lastname'])){
            $lastname = true;
        }else {
            $signinReturn['forgecms.errors']['lastname_empty'] = 'Veuillez indiquer votre prénom';
        }

        if(isset($get['email'])&&!empty($get['email'])){
            $req = $db->prepare('SELECT * FROM forgecms_users WHERE email=?', [$get['email']], true);
            if(empty($req)){
                $email = true;
            }else{
                $signinReturn['forgecms.errors']['email_exist'] = 'Cette email est déjà utilisé';
            }
        }else {
            $signinReturn['forgecms.errors']['email_empty'] = 'Veuillez indiquer votre email';
        }

        if(isset($get['password'])&&!empty($get['password'])){
            if($get['password']==$get['confirm_password']){
                $password = md5($get['password']);
            }else{
                $signinReturn['forgecms.errors']['password_notmatch'] = 'Les mot de passe ne correspondent pas';
            }
        }else {
            $signinReturn['forgecms.errors']['password_empty'] = 'Veuillez indiquer votre mot de passe';
        }

        if(isset($pseudo)&&isset($email)&&isset($password)&&isset($name)&&isset($lastname)){
            $req = $db->insert('INSERT INTO forgecms_users (pseudo, name, lastname, email, password) VALUES(?,?,?,?,?)',
                [
                    htmlentities($get['pseudo']),
                    htmlentities($get['name']),
                    htmlentities($get['lastname']),
                    htmlentities($get['email']),
                    md5($get['password']),
                ]);
            return true;
        }else{
            return $signinReturn;
        }
    }

    public function forgot($email){

        global $db;

        global $settings;

        $message = "<h1>Récupération mot de passe</h1><br/><br/><p>Pour récupérer votre mot de passe veuillez cliquer sur le lien ci-dessous :
            <br/><a href=\"" . $settings->get('url') . "\"></a></p>";

        mail($email, 'Récupération mot de passe', $message);

    }

    public function getData($pseudo){

        global $db;

        $req = $db->prepare('SELECT * FROM forgecms_users WHERE pseudo=?', [$pseudo], true);

        if(!empty($req)){
            return $req;
        }else {
            return false;
        }

    }

    public function rank(){

        return $_SESSION['forgecms.user']['rank'];

    }

    public function getAll($rank=false){

        global $db;

        if($rank==false):
            $req = $db->query('SELECT * FROM forgecms_users', false);
        else:
            $req = $db->prepare('SELECT * FROM forgecms_users WHERE rank=?', [$rank], false);
        endif;

        if(!empty($req)){
            return $req;
        }else {
            return false;
        }

    }

    public function havePerm($permission){

        global $db;

        if($this->login()):

        $req = $db->prepare('SELECT * FROM forgecms_rank WHERE rank_id=?', [$this->rank()], true);

        $perm = explode(',', $req->permissions);

        if(in_array($permission, $perm)||$perm[0]=='*'):

            return true;

        endif;

        endif;

    }

    public function getPerms(){

        global $db;

        $req = $db->prepare('SELECT * FROM forgecms_rank WHERE rank_id=?', [$this->rank()], true);

        $perm = explode(',', $req->permissions);

        return $perm;

    }

    public function verifRank($rank, $sup=NULL){
        if($sup==true){
            if($this->login()&&$rank<=$_SESSION['forgecms.user']['rank']):

                return true;

            endif;

        }
        if($sup==false){
            if($this->login()&&$rank>=$_SESSION['forgecms.user']['rank']):

                return true;

            endif;

        }
        if($sup==NULL){
            if($this->login()&&$rank==$_SESSION['forgecms.user']['rank']):

                return true;

            endif;

        }

    }




}