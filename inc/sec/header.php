<html>
<head>
    <style>
        .divider-vertical {
            height: 50px;
            margin: 0 9px;
            border-right: 1px solid #222222;
            border-left: 1px solid #111111;
        }

        @media (max-width: 767px) {
            .navbar-collapse .nav > .divider-vertical {
                display: none;
            }
        }
    </style>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    $menu = $db->prepare('SELECT * FROM page WHERE publish = ? AND in_menu = ?', ['0', '0'], 'App\Table\Page');
                    foreach ($menu as $item) {
                        if ($item['home'] == 1) {
                            echo '<li><a href="/">'.$item['title'].'</a></li>';
                        } else {
                            echo '<li><a href="/'.$item['slug'].'">'.$item['title'].'</a></li>';
                        }
                        
                    }
                    if(isLogged()): ?>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mon compte <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><i class="fa fa-eye"></i> Voir mon compte</a></li>
                                <li><a href="#"><i class="fa fa-cog"></i> Editer mon compte</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> Voir mes messages</a></li>
                                <li><a href="#"><i class="fa fa-pencil-square-o"></i> Ecrire un message</a></li>
                                <?php if($_SESSION['rang']==2): ?>
                                <li class="divider"></li>
                                <li><a href="#"><i class="fa fa-tachometer"></i> Panel d'administration</a></li>
                                <?php endif; ?>
                                <li class="divider"></li>
                                <li><a href="#"><i class="fa fa-sign-out"></i> Déconnexion</a></li>

                            </ul>
                        </li>
                    <?php endif; ?>
                </ul><li class="divider-vertical"></li>
            </div>
        </div>
    </nav>
    <header id="sldier" class="carousel slide" style="border-bottom: 2px solid #32ccfe">
        <ol class="carousel-indicators">
            <li data-target="#sldier" data-slide-to="0" class="active"></li>
            <li data-target="#sldier" data-slide-to="1"></li>
            <li data-target="#sldier" data-slide-to="2"></li>
            <li data-target="#sldier" data-slide-to="3"></li>
            <li data-target="#sldier" data-slide-to="4"></li>
            <li data-target="#sldier" data-slide-to="5"></li>
            <li data-target="#sldier" data-slide-to="6"></li>
            <li data-target="#sldier" data-slide-to="7"></li>
            <li data-target="#sldier" data-slide-to="8"></li>
            <li data-target="#sldier" data-slide-to="9"></li>
            <li data-target="#sldier" data-slide-to="10"></li>
            <li data-target="#sldier" data-slide-to="11"></li>
            <li data-target="#sldier" data-slide-to="12"></li>
            <li data-target="#sldier" data-slide-to="13"></li>
            <li data-target="#sldier" data-slide-to="14"></li>
            <li data-target="#sldier" data-slide-to="15"></li>
            <li data-target="#sldier" data-slide-to="16"></li>
            <li data-target="#sldier" data-slide-to="17"></li>
            <li data-target="#sldier" data-slide-to="18"></li>
            <li data-target="#sldier" data-slide-to="19"></li>
            <li data-target="#sldier" data-slide-to="20"></li>
            <li data-target="#sldier" data-slide-to="21"></li>
            <li data-target="#sldier" data-slide-to="22"></li>
            <li data-target="#sldier" data-slide-to="23"></li>
            <li data-target="#sldier" data-slide-to="24"></li>
            <li data-target="#sldier" data-slide-to="25"></li>
            <li data-target="#sldier" data-slide-to="26"></li>
            <li data-target="#sldier" data-slide-to="27"></li>
            <li data-target="#sldier" data-slide-to="28"></li>
            <li data-target="#sldier" data-slide-to="29"></li>
            <li data-target="#sldier" data-slide-to="30"></li>
            <li data-target="#sldier" data-slide-to="31"></li>
            <li data-target="#sldier" data-slide-to="32"></li>
            <li data-target="#sldier" data-slide-to="33"></li>
            <li data-target="#sldier" data-slide-to="34"></li>
            <li data-target="#sldier" data-slide-to="35"></li>
            <li data-target="#sldier" data-slide-to="36"></li>
            <li data-target="#sldier" data-slide-to="37"></li>
            <li data-target="#sldier" data-slide-to="38"></li>
            <li data-target="#sldier" data-slide-to="39"></li>
            <li data-target="#sldier" data-slide-to="40"></li>
        </ol>
        <div class="carousel-inner">
            <?php
            ?>
            <div class="item active">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#sldier" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#sldier" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    <div class="container" style="margin-top:20px;">
        <div class="row">
            <div class="col-md-8">