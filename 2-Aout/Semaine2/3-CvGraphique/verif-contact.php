<?php

if(!empty($_POST['identite']) && !empty($_POST['mail']) && preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail']) && !empty($_POST['objet']) && !empty($_POST['message'])) {
	
	$identite = $_POST['identite'];
	$mail = $_POST['mail'];
	$objet = $_POST['objet'];
	$contenu = $_POST['message'];

	$destinataire = 'paestum1@gmail.com';
	$headers = "From: \"Anna - Développeuse\"<anna-developpeuse.unitshare.fr>\n";
	$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";
	$sujet = $objet;
	$message = 'Message de : ' . $identite . '<br />
	Adresse mail : ' . $mail . '<br />' . $contenu;
	

	if(mail($destinataire,$sujet,$message,$headers))
	{
	        echo "L'email a bien été envoyé.";
	}
	else
	{
	        echo "Une erreur c'est produite lors de l'envois de l'email.";
	}
} else {
	echo 'Vous devez remplir tous les champs ou votre mail n\'est pas cmplet';
}
?>
 