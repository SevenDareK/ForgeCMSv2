<?php
include '../inc/config.php';
$login = $users->login($_GET['pseudo'], $_GET['password']);
header('Location:/connexion');
