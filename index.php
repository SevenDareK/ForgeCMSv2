<?php
require 'inc/config.php';

$app->get('/destroy', function () {
    session_destroy();
});

$app->error(function (\Exception $e) use ($app) {
    $app->render('404.php');
});

$app->notFound(function () use ($app) {
    $app->render('404.php');
});

$app->get('/', function () use ($app, $settings) {
    $app->redirect('/home');
});

$app->get('/connexion', function () use ($app, $settings, $users) {
    echo '<div class="panel panel-default"><div class="panel-heading"><h4>Connexion</h4></div><div class="panel-body">';
    $form = '<form action="/posts/connexion.php" id="validator">
                <div class="form-group">
                    <label for="inputPseudo" class="control-label">Pseudo</label>
                    <div class="input-group">
                        <input name="pseudo" type="text" pattern="^([_A-z0-9]){3,}$" maxlength="255" class="form-control" id="inputPseudo" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="control-label">Mot de passe</label>
                    <div class="input-group">
                        <input name="password" type="password" maxlength="255" class="form-control" id="inputPassword" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Me connecter</button> <a href="/account/forgot">Mot de passe oublié ?</a>
            </form>';

    if(!isset($_SESSION['forgecms.user'])):
        echo $form;
    elseif($users->login()):
        echo 'Vous êtes déjà connecté. <a href="/account">Voir votre profil</a>';
    elseif(isset($_SESSION['return']['error'])):
        echo 'Une erreur est survenue lors de la connexion, vérifier vos identifiants';
        unset($_SESSION['return']['error']);
    elseif(isset($_SESSION['return']['success'])):
        echo 'Votre connexion s\'est bien effectué. <a href="/account">Voir votre profil</a>';
        unset($_SESSION['return']['success']);
    endif;
        echo '</div></div>';


})->name('connexion');

$app->get('/account', function () use ($app, $settings, $users) {
    echo '<div class="panel panel-default"><div class="panel-heading"><h4>Mon profil</h4></div><div class="panel-body">';

    $data = $users->getData($_SESSION['forgecms.user']['pseudo']);

    if($data!=false){
        echo $data->pseudo;
    }else{
        $app->redirect('/');
    }

    echo '</div></div>';
});

$app->get('/account/forgot', function () use ($app, $settings) {
    echo '<div class="panel panel-default"><div class="panel-heading"><h4>Récupération de mot de passe</h4></div><div class="panel-body">';
    $form = '<form action="/posts/forgot.php" id="validator">
                <div class="form-group">
                    <label for="inputEmail" class="control-label">Email</label>
                    <div class="input-group">
                        <input name="pseudo" type="email" maxlength="255" class="form-control" id="inputEmail" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Récupérer</button>
            </form>';

    echo $form;

    echo '</div></div>';
});

$app->get('/news', function () use ($app, $settings) {
    echo 'form';
});

$app->get('/news/:slug', function ($slug) use ($app, $settings) {
    echo 'form';
});

$app->get('/:page', function ($page) use ($app, $settings) {
    $data = getPage($page);
    if(!empty($data)) {
        echo '<div class="panel panel-default">
            <div class="panel-heading">
                <h4>
                    ' . $data->title . '
                </h4>
            </div>
            <div class="panel-body">
                ' . $data->content . '
            </div>
        </div>';
    }else {
        $app->notFound();
    }
});


$app->render('header.php', compact('settings', 'db', 'users'));
$app->run();
$app->render('sidebar.php', ['settings' => $settings, 'db' => $db]);
$app->render('footer.php', ['settings' => $settings, 'db' => $db]);