<?php
include '../inc/config.php';
$signin = $users->signin($_GET);
foreach($_GET as $k=>$v){
    $_SESSION['forgecms.posts'][$k]=$v;
}
header('Location: /inscription');