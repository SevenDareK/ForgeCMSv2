<p>
	<?php
		$F = new \App\Form();
		$V = new \App\Validate();
        if(!isLogged()) {
		if ($_POST) {
			if (isset($_POST['pseudo'])&&strlen($_POST['pseudo'])>=5) {
                $req_checkPseudo = $db->prepare('SELECT pseudo FROM users WHERE pseudo = ?', [$_POST['pseudo']]);
                if(!empty($req_checkPseudo['0'])){
                    $pseudo = false;
                    $checkPseudo = false;
                } else {
                    $checkPseudo = true;
                    $pseudo = true;
                }
                var_dump($pseudo);
            }
            if (isset($_POST['name'])&&strlen($_POST['name'])>=3) {
                $name = true;
				var_dump($name);
            }
            if (isset($_POST['lastname'])&&strlen($_POST['lastname'])>=3) {
                $lastname = true;
				var_dump($lastname);
            }
            if (isset($_POST['email'])&&$V->isEmail($_POST['email'])) {
                $req_checkEmail = $db->prepare('SELECT pseudo FROM users WHERE email = ?', [$_POST['email']]);
                if(!empty($req_checkEmail['0'])){
                    $email = false;
                    $checkEmail = false;
                } else {
                    $checkEmail = true;
                    $email = true;
                }
                var_dump($email);
            }
            if (isset($_POST['password'])&&$_POST['password']==@$_POST['confirm_password']) {
                $password = true;
				var_dump($password);
            }
            if ($pseudo&&$name&&$lastname&&$email&&$password) {
                $addUser = @$db->prepare('INSERT INTO users(pseudo, name, lastname, email, password) VALUES (?, ?, ?, ?, ?)', [htmlspecialchars($_POST['pseudo']), htmlspecialchars($_POST['name']), htmlspecialchars($_POST['lastname']) , htmlspecialchars($_POST['email']), md5(sha1($_POST['password']))]);
                echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      <strong>Félicitation!</strong> Votre inscription a bien été prise en compte.</div>';
            }
		}
		$F->Form('method="post" role="form"');
			$Col->Row();
				$Col->Col('col-md-6');
					if ($_POST) {
						if (empty($_POST['name'])) {
							echo $F->text('name', 'Nom', 'true', @$_POST['name']);
							$V->errorBlock('Veuillez renseigner ce champ.');
						}elseif (strlen($_POST['name'])<3) {
							echo $F->text('name', 'Nom', 'true', @$_POST['name']);
							$V->errorBlock('Votre nom de faire minimum 3 caratères.');
						}else {
							echo $F->text('name', 'Nom', 'success', @$_POST['name']);
						}
					}else {
							echo $F->text('name', 'Nom');
						}
				$Col->endCol();
				$Col->Col('col-md-6');
					if ($_POST) {
						if (empty($_POST['lastname'])) {
							echo $F->text('lastname', 'Prénom', 'true', @$_POST['lastname']);
								$V->errorBlock('Veuillez renseigner ce champ.');
						}elseif (strlen($_POST['lastname'])<3) {
							echo $F->text('lastname', 'Prénom', 'true', @$_POST['lastname']);
							$V->errorBlock('Votre prénom de faire minimum 3 caratères.');
						}else {
							echo $F->text('lastname', 'Prénom', 'success', @$_POST['lastname']);
						}
					}else {
							echo $F->text('lastname', 'Prénom');
						}

				$Col->endCol();
			$Col->endRow();
			$Col->Row();
				$Col->Col('col-md-6');
					if ($_POST) {
						if (empty($_POST['pseudo'])) {
							echo $F->text('pseudo', 'Pseudo', 'true', @$_POST['pseudo']);
							$V->errorBlock('Veuillez renseigner ce champ.');
						}elseif (strlen($_POST['pseudo'])<5) {
							echo $F->text('pseudo', 'Pseudo', 'true', @$_POST['pseudo']);
							$V->errorBlock('Votre pseudo de faire minimum 5 caratères.');
						}elseif ($checkPseudo==false) {
                            echo $F->text('pseudo', 'Pseudo', 'true', @$_POST['pseudo']);
                            $V->errorBlock('Ce pseudo est déjà utilisé.');
                        } else {
							echo $F->text('pseudo', 'Pseudo', 'success', @$_POST['pseudo']);
						}
					}else {
							echo $F->text('pseudo', 'Pseudo');
						}
				$Col->endCol();
				$Col->Col('col-md-6');
					if ($_POST) {
						if (empty($_POST['email'])) {
							echo $F->text('email', 'Email', 'true', @$_POST['email']);
							$V->errorBlock('Veuillez renseigner ce champ.');
						}elseif (isset($_POST['email'])&&$V->isEmail($_POST['email'])==false){
							echo $F->text('email', 'Email', 'true', @$_POST['email']);
							$V->errorBlock('Cet email est invalide.');
                        }elseif ($checkEmail==false) {
                            echo $F->text('email', 'Email', 'true', @$_POST['email']);
                            $V->errorBlock('Cet email est déjà utilisé.');
                        }else {
							echo $F->text('email', 'Email', 'success', @$_POST['email']);
						}
					}else {
						echo $F->text('email', 'Email');
					}
				$Col->endCol();
			$Col->endRow();
			$Col->Row();
				$Col->Col('col-md-6');
					if ($_POST) {
						if (empty($_POST['password'])) {
							echo $F->password('password', 'Mot de passe', 'true');
							$V->errorBlock('Veuillez renseigner ce champ.');
						}elseif (isset($_POST['password'])&&$_POST['password']!=$_POST['confirm_password']) {
							echo $F->password('password', 'Mot de passe', 'true');
							$V->errorBlock('Les mots de passe ne correspondent pas.');
						}else {
							echo $F->password('password', 'Mot de passe', 'success');
						}
					}else {
						echo $F->password('password', 'Mot de passe');
					}
				$Col->endCol();
				$Col->Col('col-md-6');
					if ($_POST) {
						if (empty($_POST['confirm_password'])) {
							echo $F->password('confirm_password', 'Confirmer le mot de passe', 'true');
							$V->errorBlock('Veuillez renseigner ce champ.');
						}elseif (isset($_POST['password'])&&$_POST['password']!=$_POST['confirm_password']) {
							echo $F->password('confirm_password', 'Confirmer le mot de passe', 'true');
							$V->errorBlock('Les mots de passe ne correspondent pas.');
						}else {
							echo $F->password('confirm_password', 'Confirmer le mot de passe', 'success');
						}
					}else {
						echo $F->password('confirm_password', 'Mot de passe');
					}
				$Col->endCol();
			$Col->endRow();
			echo $F->submit('M\'inscrire');
		$F->endForm();
        } else {
            echo '<div class="alert alert-info" role="alert">Vous êtes dejà inscrit et connecté.</div>';
        }
	?>
</p>