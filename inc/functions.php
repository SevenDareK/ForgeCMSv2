<?php
function getPage($slug){
    global $db;
    $req = $db->prepare('SELECT * FROM forgecms_pages WHERE slug=? AND publish=?', [$slug, 1], true);
    if(!empty($req)){
        return $req;
    }else {
        return false;
    }
}
function isLogged(){
    if(isset($_SESSION['pseudo'])&&isset($_SESSION['password'])){
        return true;
    }
}