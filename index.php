<?php
session_start();
require 'vendor/autoload.php';
require 'App/Database.class.php';
require 'App/Form.class.php';
require 'App/Cols.class.php';
require 'App/Validate.class.php';
require 'inc/conf.php';
require 'inc/functions.php';
$title = 'page';
include '/inc/sec/header.php';
if (isLogged()&&@$_GET['logout']) {
    session_destroy();
    echo '<div class="alert alert-info alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            Vous avez bien été déconnecté.
                          </div>';
}
if (@$_GET['p']) {
    $cpage = $db->prepare('SELECT * FROM page WHERE slug = ?', [$_GET['p']], 'App\Table\Page', false);
    if(isset($cpage['0'])){
        $data = $cpage['0'];
        if ($data['special']!=1) {
            ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>
                        <?= $data['title']; ?>
                    </h4>
                </div>
                <div class="panel-body">
                    <?php
                    if($data['template']!='null') {
                        include '/templates/'.$data['template'].'.php';
                    } ?>
                    <?= $data['content']; ?>
                </div>
            </div>
<?php
        }else {
            include '/templates/'.$data['template'].'.php';
        }
    }else {
        include '/404.php';
    }
}else {
    $cpage = $db->prepare('SELECT * FROM page WHERE home = ?', [1], 'App\Table\Page', false);
    if(isset($cpage['0'])){
        $data = $cpage['0'];
        if ($data['special']!=1) {
            ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>
                        <?= $data['title']; ?>
                    </h4>
                </div>
                <div class="panel-body">
                    <?php
                    if($data['template']!='null') {
                        include '/templates/'.$data['template'].'.php';
                        echo '<hr/>';
                    } ?>
                    <?= $data['content']; ?>
                </div>
            </div>
<?php
        }else {
            include '/templates/'.$data['template'].'.php';
        }
    }else {
        include '/404.php';
    }
    }
    var_dump($_SESSION);
include '/inc/sec/sidebar.php';
include '/inc/sec/footer.php';