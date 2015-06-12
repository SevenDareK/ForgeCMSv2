<?php

namespace App;


class News {

    public function getAll($publish=false){

        global $db;

        if($publish==false){
            $req = $db->query('SELECT * FROM forgecms_news', false);
            if(!empty($req)){
                return $req;
            }else{
                return false;
            }
        }else{
            $req = $db->prepare('SELECT * FROM forgecms_news WHERE publish=?', [1], false);
            if(!empty($req)){
                return $req;
            }else{
                return false;
            }
        }
    }

    public function getData($idslug){

        global $db;

        if(is_numeric($idslug)){
            $req = $db->prepare('SELECT * FROM forgecms_news WHERE id=?', [$idslug], true);
            if(!empty($req)){
                return $req;
            }else{
                return false;
            }
        }else{
            $req = $db->prepare('SELECT * FROM forgecms_news WHERE slug=?', [$idslug], true);
            if(!empty($req)){
                return $req;
            }else{
                return false;
            }
        }
    }

}