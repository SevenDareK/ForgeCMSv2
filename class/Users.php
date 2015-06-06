<?php

namespace App;


class Users {

    public $pseudo;
    public $email;
    public $rank;

    public function login($pseudo=false, $password=false){

        global $db;

        global $app;

            if(!isset($_SESSION['forgecms.user'])):

                if($pseudo!=false):

                    $req = $db->prepare('SELECT * FROM forgecms_users WHERE pseudo=? AND password=?', [$pseudo, $password], true);

                    var_dump($req);

                    if(isset($req)&&!empty($req)):

                        $_SESSION['forgecms.user']['pseudo']=$pseudo;
                        $_SESSION['forgecms.user']['email']=$req->email;
                        $_SESSION['forgecms.user']['rank']=$req->rank;

                        return true;

                    else:

                        return false;

                    endif;

                endif;

            else:

                return true;

            endif;

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


}