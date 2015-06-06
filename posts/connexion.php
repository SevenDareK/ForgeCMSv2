<?php
include '../inc/config.php';
$login = $users->login($_GET['pseudo'], $_GET['password']);
if($login==false){
    $_SESSION['return']['error'] = 'Une erreur est survenue';
}else{
    $_SESSION['return']['success'] = 'Connexion réussi';
}
header('Location:/connexion');
