<p>
    <?php
    if(!isLogged()) {
        $F = new \App\Form();
        $V = new \App\Validate();
        if($_POST) {
            if(!empty($_POST['pseudo'])) {
                $pseudo = true;
            }
            if(!empty($_POST['password'])) {
                $password = true;
            }
            if(isset($pseudo)&&isset($password)) {
                $logUser = $db->prepare('SELECT * FROM users WHERE pseudo = ? AND password = ?', [$_POST['pseudo'], md5(sha1($_POST['password']))], '', true);
                if(!empty($logUser)) {
                    $_SESSION['id'] = $logUser['id'];
                    $_SESSION['pseudo'] = $logUser['pseudo'];
                    $_SESSION['rang'] = $logUser['rang'];
                    echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Félicitation!</strong> Vous êtes bien connecté.
                          </div>';
                }
            }
        }
        $F->Form('method="post"');
            if($_POST) {
                if(empty($_POST['pseudo'])) {
                    echo $F->text('pseudo', 'Pseudo', 'true', @$_POST['pseudo']);
                    $V->errorBlock('Veuillez indiquer votre pseudo.');
                }else {
                    echo $F->text('pseudo', 'Pseudo', 'success', @$_POST['pseudo']);
                }
            } else {
                echo $F->text('pseudo', 'Pseudo');
            }
            if($_POST) {
                if(empty($_POST['password'])) {
                    echo $F->password('password', 'Mot de passe', 'true', @$_POST['password']);
                    $V->errorBlock('Veuillez indiquer votre mot de passe.');
                }else {
                    echo $F->password('password', 'Mot de passe', 'success', @$_POST['password']);
                }
            } else {
                echo $F->password('password', 'Mot de passe');
            }
            echo $F->submit('Me connecter');
        $F->endForm();
    } else {
        echo '<div class="alert alert-info alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      Vous êtes déjà connecté.
    </div>';
    }
    ?>
</p>