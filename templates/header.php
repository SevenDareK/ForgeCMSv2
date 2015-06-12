<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="'.Settings::get('desc').'">
    <meta name="slogan" content="'.Settings::get('slogan').'">
    <title><?= $settings->get('site_name'); ?></title>
    <link href="<?= $settings->get('url') ?>css/app.css" rel="stylesheet">
    <link href="<?= $settings->get('url') ?>css/custom_style.css" rel="stylesheet">
    <link href="<?= $settings->get('url') ?>fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
        .carousel .item {
            width: 100%; /*slider width*/
            max-height: 600px; /*slider height*/
        }
        .carousel .item img {
            width: 100%; /*img width*/
        }
        /*add some makeup*/
        .carousel .carousel-control {
            background: none;
            border: none;
            top: 50%;
        }
        /*full width container*/
        @media (max-width: 767px) {
            .block {
                margin-left: -20px;
                margin-right: -20px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><?= $settings->get('site_name'); ?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <?php
                $req = $db->query('SELECT * FROM forgecms_menu', false);
                foreach ($req as $item) {
                    if($item->rank == NULL||$users->login()&&$_SESSION['forgecms.user']['rank']>=$item->rank) {
                        echo '<li><a href="/' . $item->href . '">' . $item->name . '</a></li>';
                    }
                }
                if($users->login()){ ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mon profile <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/account">Voir mon profile</a></li>
                            <li class="divider"></li>
                            <?php
                            if($users->havePerm('admin_panel')){
                                echo '<li><a href="/admin">Panel d\'administration</a></li>';
                                echo '<li class="divider"></li>';
                            }
                            if($users->havePerm('news_all')){
                                echo '<li><a href="/admin/news/add">Ajouter un article</a></li>';
                                echo '<li><a href="/admin/news">Gérer les articles</a></li>';
                                echo '<li class="divider"></li>';
                            }
                            if(!$users->havePerm('news_all')) {
                                if ($users->havePerm('news_add')) {
                                    echo '<li><a href="/admin/news/add">Ajouter une page</a></li>';
                                    echo '<li class="divider"></li>';
                                }
                                if ($users->havePerm('news_view')) {
                                    echo '<li><a href="/admin/news">Gérer les pages</a></li>';
                                    echo '<li class="divider"></li>';
                                }
                            }
                            if($users->havePerm('pages_all')){
                                echo '<li><a href="/admin">Ajouter une page</a></li>';
                                echo '<li><a href="/admin">Gérer les pages</a></li>';
                                echo '<li class="divider"></li>';
                            }
                            if(!$users->havePerm('pages_all')) {
                                if ($users->havePerm('pages_add')) {
                                    echo '<li><a href="/admin">Ajouter une page</a></li>';
                                    echo '<li class="divider"></li>';
                                }
                                if ($users->havePerm('pages_edit')) {
                                    echo '<li><a href="/admin">Gérer les pages</a></li>';
                                    echo '<li class="divider"></li>';
                                }
                            }
                            if($users->havePerm('users_all')){
                                echo '<li><a href="/admin">Ajouter un utilisateur</a></li>';
                                echo '<li><a href="/admin">Gérer les utilisateurs</a></li>';
                                echo '<li class="divider"></li>';
                            }
                            if(!$users->havePerm('users_all')) {
                                if ($users->havePerm('users_add')) {
                                    echo '<li><a href="/admin">Ajouter un utilisateur</a></li>';
                                    echo '<li class="divider"></li>';
                                }
                                if ($users->havePerm('users_edit')) {
                                    echo '<li><a href="/admin">Gérer les utilisateurs</a></li>';
                                    echo '<li class="divider"></li>';
                                }
                            }
                            if($users->havePerm('widgets_all')){
                                echo '<li><a href="/admin">Ajouter un widget</a></li>';
                                echo '<li><a href="/admin">Gérer les widgets</a></li>';
                                echo '<li class="divider"></li>';
                            }
                            if(!$users->havePerm('widgets_all')) {
                                if ($users->havePerm('widgets_add')) {
                                    echo '<li><a href="/admin">Ajouter un widget</a></li>';
                                    echo '<li class="divider"></li>';
                                }
                                if ($users->havePerm('widgets_edit')) {
                                    echo '<li><a href="/admin">Gérer les widget</a></li>';
                                    echo '<li class="divider"></li>';
                                }
                            }
                            if($users->havePerm('settings_all')){
                                echo '<li><a href="/admin/settings">Paramètre du site</a></li>';
                                echo '<li><a href="/admin">Personalisation du site</a></li>';
                                echo '<li class="divider"></li>';
                            }
                            if(!$users->havePerm('settings_all')) {
                                if ($users->havePerm('settings_gen')){
                                    echo '<li><a href="/admin/settings">Paramètre du site</a></li>';
                                    echo '<li class="divider"></li>';
                                }
                                if ($users->havePerm('settings_pers')) {
                                    echo '<li><a href="/admin/personalisation">Personalisation du site</a></li>';
                                    echo '<li class="divider"></li>';
                                }
                            }
                            if($users->havePerm('rank')){
                                echo '<li><a href="/admin">Gérer les rang</a></li>';
                                echo '<li class="divider"></li>';
                            }
                            ?>
                            <li><a href="/account/logout">Me déconnecter</a></li>
                        </ul>
                    </li>
                <?php }else{ ?>
                    <li style="margin-top: 7px;padding-left: 10px;border-left: 1px solid #798d8f;"><div class="btn-group" role="group" aria-label="...">
                        <a href="/connexion" class="btn btn-info">Connexion</a>
                        <a href="/inscription" class="btn btn-info">Inscription</a>
                    </div></li>
                <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <?php if($settings->get('slider')=='yes'): ?>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-top: 60px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php

            $req = $db->query('SELECT * FROM forgecms_slider', false);
            foreach($req as $item):
                ?>
                <li data-target="#carousel-example-generic" data-slide-to="<?= $item->id-1 ?>" <?php if($item->id==1):echo 'class="active"';endif; ?>></li>
                <?php
            endforeach;

            ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php

            $req = $db->query('SELECT * FROM forgecms_slider', false);
            foreach($req as $item):
                ?>
                <div class="item <?php if($item->id==1):echo 'active';endif; ?>">
                    <img src="<?= $item->img ?>" alt="">
                    <div class="carousel-caption">
                        <?= $item->caption ?>
                    </div>
                </div>
            <?php
            endforeach;

            ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" style="top: 0px;">
            <span class="fa fa-chevron-left" aria-hidden="true" style="margin-top: 100px;"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" style="right: 0;top: 0px;">
            <span class="fa fa-chevron-right" aria-hidden="true" style="margin-top: 100px;"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <?php endif; ?>

    <div class="container" style="margin-top: 40px;">
        <?php if($settings->get('sidebar')=='yes'): ?>
    <div class="row"></div>
        <div class="col-xs-12 col-sm-6 col-lg-8">
           <?php endif; ?>