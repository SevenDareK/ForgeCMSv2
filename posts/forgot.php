<?php
include '../inc/config.php';
$forgot = $users->forgot($_GET['email']);
if($forgot==false){
    $_SESSION['return']['error'] = 'Une erreur est survenue';
}else{
    $_SESSION['return']['success'] = 'Email envoyé';
}
header('Location:/account/forgot');