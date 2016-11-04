<?php
    try { 
        $bdd = new PDO('mysql:host=localhost;dbname=exercice;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch(Exception $e) { 
        die('Erreur : '.$e->getMessage());
    }


	
	if(!empty($_POST['login']) && !empty($_POST['password'])) {

		$login = $_POST['login'];
		$password = $_POST['password'];
		
		$verification_login = $bdd->query('SELECT COUNT(*) FROM loginpasswordsql WHERE login = "'.$login.'"');
			if($verification_login->fetchColumn() == 0){
				echo 'Ce login est inexistant';
			} else {
				$reponse_login = $bdd->query('SELECT password FROM loginpasswordsql WHERE login = "\'.$login.\'" LIMIT 1');
				$donnees = $reponse_login->fetch();

				if ($password == $donnees['password']){
					echo 'Bienvenue';
				} else {
					echo 'Ce password est erroné';
				}
				$reponse_login->closeCursor();
			}
		$verification_login->closeCursor();
	}
?>