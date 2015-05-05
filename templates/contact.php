<p>
		<?php 
		$F = new \App\Form();
		$V = new \App\Validate();
		if ($_POST) {
            if(!isLogged()){
                if ($_POST['pseudo']) {
                    $pseudo = true;
                }
                if ($_POST['email']) {
                    if ($V->isEmail($_POST['email'])) {
                        $email = true;
                    }
                }
            } else {
                $pseudo = true;
                $email = true;
            }

			if ($_POST['content']) {
				if ($V->minChar($_POST['content'], 200)) {
					$content = true;
				}
			}
			if (isset($pseudo)&&isset($email)&&isset($content)) {
				echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      <strong>Félicitation!</strong> Votre message bien été envoyé.
    </div>';
				$to = 'sevendarek@gmail.com';
			    $subject = 'Message de '.htmlspecialchars($_SESSION['pseudo']);
			    $message = htmlspecialchars($_POST['content']);
			    $headers = 'From: '. $_SESSION['email'];
			    mail($to, $subject, $message, $headers);
			}


		}

		$F->Form('method="post" role="form" id="contact"');

        if (!isLogged()) {
            $Col->Row();
            $Col->Col('col-xs-6');
            if ($_POST) {
                if(empty($_POST['pseudo'])){
                    echo $F->text('pseudo', 'Pseudo', true, @$_POST['pseudo']);
                    $V->errorBlock('Veuillez renseigner ce champ.');
                }else {
                    echo $F->text('pseudo', 'Pseudo', 'success', @$_POST['pseudo']);
                }
            } else {
                echo $F->text('pseudo', 'Pseudo');
            }
            $Col->endCol();

            $Col->Col('col-xs-6');
            if($_POST) {
                if (empty($_POST['email'])) {
                    echo $F->text('email', 'Email', true, @$_POST['email']);
                    $V->errorBlock('Veuillez renseigner ce champ.');
                }elseif($V->isEmail($_POST['email'])==false) {
                    echo $F->text('email', 'Email', true, @$_POST['email']);
                    $V->errorBlock('Veuillez renseigner un email valide.');
                }else {
                    echo $F->text('email', 'Email', 'success', @$_POST['email']);
                }
            } else {
                echo $F->text('email', 'Email');
            }
            $Col->endCol();
            $Col->endRow();
        }
            if($_POST) {
                if (empty($_POST['content'])) {
                    echo $F->textarea('content', 'Message <small>Ce message va être envoyé par email a l\'administrateur</small>', true, @$_POST['content']);
                    $V->errorBlock('Veuillez renseigner ce champ.');
                }elseif($V->minChar($_POST['content'], 200)==false){
                    echo $F->textarea('content', 'Message <small>Ce message va être envoyé par email a l\'administrateur</small>', true, @$_POST['content']);
                    $V->errorBlock('Veuillez renseigner ce champ avec un minimum de 200 caractères.');
                } else {
                    echo $F->textarea('content', 'Message <small>Ce message va être envoyé par email a l\'administrateur</small>', 'success', @$_POST['content']);
                }
            } else {
                echo $F->textarea('content', 'Message <small>Ce message va être envoyé par email a l\'administrateur</small>');
            }
			echo $F->submit('Envoyer');

		$F->endForm();
		?>
</p>