<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . '/class/Database.class.php';
require $_SERVER['DOCUMENT_ROOT'] . '/class/Form.class.php';
require $_SERVER['DOCUMENT_ROOT'] . '/class/Cols.class.php';
require $_SERVER['DOCUMENT_ROOT'] . '/class/Settings.class.php';
require $_SERVER['DOCUMENT_ROOT'] . '/class/Users.php';
require $_SERVER['DOCUMENT_ROOT'] . '/inc/functions.php';

$db = new \App\Database('localhost', 'root', '', 'forgecms');

$settings = new \App\Settings();

$users = new \App\Users();

$app = new \Slim\Slim();