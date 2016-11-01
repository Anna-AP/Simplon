<?php

if(!empty($_POST['identite']) && !empty($_POST['mail']) && preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail']) && !empty($_POST['objet']) && !empty($_POST['message'])) {

	// Déclaration de l'adresse de destination.
	$destinataire = 'anna.dev.pro@gmail.com'; 

		// Je filtre les serveurs qui présentent des bogues.
		if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $destinataire)) {
			$passage_ligne = "\r\n";
		} else {
			$passage_ligne = "\n";
		}


	// Récupération des données du visiteur
	$identite = $_POST['identite'];
	$email = $_POST['mail'];
	$objet = $_POST['objet'];
	$messageform = $_POST['message'];

	//=====Déclaration des messages au format texte et au format HTML.
	$message_txt = 'Message de : ' . $identite . $passage_ligne . 'Adresse mail : ' . $email . $passage_ligne . 'Objet du Message : ' . $objet. $passage_ligne . $messageform . $passage_ligne;
	$message_html = '<html><head></head><body><p><b>Message de :</b> ' . $identite . '.</p><p><b>Adresse mail :</b> ' . $email .'</p>' . $passage_ligne . '<p><b>Objet du Message :</b> '. $objet . '</p>' . $passage_ligne. '<p>' . $messageform . '</p></body></html>';

	//=====Création de la boundary.
	$boundary = "-----=".md5(rand());
	$boundary_alt = "-----=".md5(rand());

	//J'indique l'objet du message
	$sujet = $identite . ' : ' . $objet;	

	//=====Création du header de l'e-mail.
	$header = "From: \"Anna-Developpeuse\"<anna-developpeuse>".$passage_ligne;
	$header.= "MIME-Version: 1.0".$passage_ligne;
	$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

	//=====Création du message.
	$message = $passage_ligne."--".$boundary.$passage_ligne;
	$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
	$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
	//=====Ajout du message au format texte.
	$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
	$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
	$message.= $passage_ligne.$message_txt.$passage_ligne;


	$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
	 
	//=====Ajout du message au format HTML.
	$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
	$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
	$message.= $passage_ligne.$message_html.$passage_ligne;

	//=====On ferme la boundary alternative.
	$message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;

	$message.= $passage_ligne."--".$boundary.$passage_ligne;


	//Envoi du mail
	if(mail($destinataire,$sujet,$message,$header)){
	    echo "L'email a bien été envoyé.";
	} else {
	    echo "Une erreur c'est produite lors de l'envois de l'email.";
	}
} else {
	echo 'Vous devez remplir tous les champs ou votre mail n\'est pas cmplet';
}
?>