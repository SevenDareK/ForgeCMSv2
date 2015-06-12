<?php
if ($_SERVER['REQUEST_URI'] == '/') // Si l'utilisateur demande la racine
    header('Location: /home'); // On le redirige sur /home

require 'inc/config.php';

$app->get('/mail', function () {
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
 mail('sevendarek@gmail.com', 'Salut', 'regjerigjeroigfjeiogjerogijerogijergieorgjeroigjeroigjeroigjeroigjeorijgeroijgeoirjgeiorjgoeri', $headers);
});

$app->get('/destroy', function () {
    session_destroy();
});

$app->get('/session', function () {
    var_dump($_SESSION);
});

$app->error(function (\Exception $e) use ($app) {
    $app->render('404.php');
});

$app->notFound(function () use ($app) {
    $app->render('404.php');
});

$app->get('/', function () use ($app, $settings) {
    $app->redirect('/home');
})->name('home');

// Inscription

$app->get('/inscription', function () use ($app, $settings, $users) {
    echo '<div class="panel panel-default"><div class="panel-heading"><h4>Inscription</h4></div><div class="panel-body">';
    $form = '<style>.input-group{width: 100%;}</style><form id="validator" method="post">
                <div class="form-group">
                    <label for="inputPseudo" class="control-label">Pseudo</label>
                    <div class="input-group">
                        <input name="pseudo" type="text" pattern="^([_A-z0-9]){3,}$" maxlength="255" class="form-control" id="inputPseudo" value="'.@$_SESSION['forgecms.posts']['pseudo'].'" required>
                    </div>
                </div>
                <div class="row">
                <div class="col-sm-5 col-md-6">
                    <div class="form-group">
                        <label for="inputLastname" class="control-label">Prénom</label>
                        <div class="input-group">
                            <input name="lastname" type="text" pattern="^([_A-z0-9]){3,}$" maxlength="255" class="form-control" id="inputLastname" value="'.@$_SESSION['forgecms.posts']['lastname'].'" required>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 col-md-6">
                    <div class="form-group">
                        <label for="inputName" class="control-label">Nom</label>
                        <div class="input-group">
                            <input name="name" type="text" pattern="^([_A-z0-9]){3,}$" maxlength="255" class="form-control" id="inputName" value="'.@$_SESSION['forgecms.posts']['name'].'" required>
                        </div>
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="control-label">Email</label>
                    <div class="input-group">
                        <input name="email" type="email" maxlength="255" class="form-control" id="inputEmail" value="'.@$_SESSION['forgecms.posts']['email'].'" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-6">
                        <div class="form-group">
                            <label for="inputPassword" class="control-label">Mot de passe</label>
                            <div class="input-group">
                                <input name="password" type="password" maxlength="255" class="form-control" id="inputPassword" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-6">
                        <div class="form-group">
                            <label for="inputCPassword" class="control-label">Confirmer mot de passe</label>
                            <div class="input-group">
                                <input name="confirm_password" type="password" maxlength="255" class="form-control" id="inputCPassword" required>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">M\'inscrire</button> <a href="/connexion">Déjà inscrit ?</a>
            </form>';
        //'lastname' => $f::text()->label('Prénom'),
        //'name' => $f::text()->label('Nom'),
        //'email' => $f::text()->label('Email')->set(['addon-before'=>'@']),
        //'password' => $f::password()->label('Mot de passe')
    //]);
    if(!$users->login()):
        echo $form;
    else:
        echo 'Vous êtes déjà connecté. <a href="/account">Voir votre profil</a>';
    endif;
        echo '</div></div>';


})->name('inscription');
$app->post('/inscription', function () use ($app, $settings, $users) {
    echo '<div class="panel panel-default"><div class="panel-heading"><h4>Inscription</h4></div><div class="panel-body">';
    echo 'fr';
    $app->redirect($app->urlFor('inscription'));
    echo '</div>';

});

// Connexion

$app->get('/connexion', function () use ($app, $settings, $users) {
    if($settings->get('users_can_register')=='yes'):
    echo '<div class="panel panel-default"><div class="panel-heading"><h4>Connexion</h4></div><div class="panel-body">';
    $form = '<form id="validator" method="post">
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
    endif;
    echo '</div></div>';
    endif;

});

$app->post('/connexion', function () use ($app, $settings, $users) {

    echo '<div class="panel panel-default"><div class="panel-heading"><h4>Connexion</h4></div><div class="panel-body">';
    $login = $users->login($_POST['pseudo'], $_POST['password']);
    $form = '<form id="validator" method="post">
                <div class="form-group">
                    <label for="inputPseudo" class="control-label">Pseudo</label>
                    <div class="input-group">
                        <input name="pseudo" type="text" pattern="^([_A-z0-9]){3,}$" maxlength="255" class="form-control" id="inputPseudo" value="' . @$_POST['pseudo'] . '" required>
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
    if($login){
        echo 'Votre connexion s\'est bien effectué. <a href="/account">Voir votre profil</a>';
    }else {
        echo 'Une erreur est survenue lors de la connexion, vérifier vos identifiants';
        echo $form;
    }
    echo '</div></div>';

});

// Admin

$app->get('/admin', function() use($app, $settings, $db, $users){
    if($users->havePerm('admin_panel')){
        echo 'rf';
    }
});

$app->get('/admin/settings', function() use($app, $settings, $db, $users){
    if($users->havePerm('settings_gen')||$users->havePerm('settings_all')){
        echo '<div class="panel panel-default"><div class="panel-heading"><h4>Paramètres</h4></div><div class="panel-body">'; ?>
        <form action="/posts/connexion.php">
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
        </form>
        <?php echo '</div></div>';
    }
});

$app->get('/admin/news', function() use($app, $settings, $db, $users, $news){
    if($users->havePerm('news_view')||$users->havePerm('news_all')){
        echo '<div class="panel panel-default"><div class="panel-heading"><h4>Articles</h4></div>';
        echo '<table class="table table-stripped">';
        echo '<thead><tr><th>Titre</th><th>Contenu</th><th>Auteur</th></tr></thead><tbody>';
        foreach($news->getAll() as $item){
            echo '<tr>';
                echo '<td>'.$item->title.'</td>';
                $extrait = substr($item->content, 0,50);
                $espace = strrpos($extrait, ' ');
                $str =  substr($extrait, 0, $espace).' ...';
                echo '<td>'.$str.'</td>';
                echo '<td>'.$item->author.'</td>';
                echo '<td style="width: 24%;"><a class="btn btn-primary btn-xs" href="/admin/news/edit/'.$item->id.'"><i class="fa fa-pencil"></i> Editer</a> <a class="btn btn-danger btn-xs" href="/admin/news/delete/'.$item->id.'"><i class="fa fa-trash-o"></i> Supprimer</a></td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
        echo '</div>';
    }
});

$app->get('/admin/news/edit/:id', function($id) use($app, $settings, $db, $users, $news, $form){
    if($users->havePerm('news_edit')||$users->havePerm('news_all')){
        $item = $news->getData($id);
        echo '<div class="panel panel-default"><div class="panel-heading"><h4>Article : '.$item->title.'</h4></div><div class="panel-body">';
        $form->add('label', 'label_email', 'email', 'Email');
        var_dump($form);
        echo '</div></div>';
    }
});

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

$app->get('/account/logout', function () use ($app, $settings, $users) {
    echo '<div class="panel panel-default"><div class="panel-heading"><h4>Déconnexion</h4></div><div class="panel-body">';

    if($users->logout()):

        echo '<div class="alert alert-success" role="alert">Vous avez bien été déconnecté. <a href="/" style="color: rgba(255,255,255,0.5);">Retourner a l\'accueil</a></div>';

    endif;
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


$app->render('header.php', compact('settings', 'db', 'users', 'error'));
$app->run();
$app->render('sidebar.php', ['settings' => $settings, 'db' => $db]);
$app->render('footer.php', ['settings' => $settings, 'db' => $db]);