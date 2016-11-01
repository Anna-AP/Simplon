<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="design.css" />
		<title>D&eacute;fi</title>
    </head>

    <body>
    	<div>
		    <form action="defi1.php" method="post" class="col-md-8 col-md-offset-2">
		        <p><label id="mail"></label>Mail : <input type="email" name="email" id="mail" placeholder="Entrez votre mail" /></p>
		        <p><label id="password_one"></label>Password : <input type="password" name="password_one" id="password_one" placeholder="Entrez votre mot de passe" /></p>
		        <p><label id="password_two"></label>Password : <input type="password" name="password_two" id="password_two" placeholder="Veuillez confirmer votre mot de passe" /></p>
		        <p><label id="accord">Je n'ai pas lu, mais je suis d'accord </label><input type="radio" name="accord" value="accord" id="checkbox_accord"></p>
		        <p><input type="submit" value="Envoyer" /></p>
		       </form>
		</div>
		<div>
		    <p><?php 

					if(isset($_POST['email']) && isset($_POST['password_one']) && isset($_POST['password_two']) && isset($_POST['accord'])) {

						if(strlen($_POST['email']) > 4 && strlen($_POST['password_one']) > 4 && strlen($_POST['password_two']) > 4) {
										
							if($_POST['password_two'] == $_POST['password_one']) {

								echo 'Compte créé ! Mail envoyé à ' . $_POST['email'] . '.';
							} else {
								echo 'Votre mot de passe est erroné';
							} 
						} else {
							echo 'Vous devez entrer quatre caractères minimum par champs';
						}
					} else {
						echo 'Vous devez remplir tous les champs';
					}
				?></p>
		    </div>
    </body>
</html>