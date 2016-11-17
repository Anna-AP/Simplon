<?php 
	header('location:index.php');

	include('singleton.php');


	if(!empty($_POST['titre']) && !empty($_POST['date']) && !empty($_POST['debut']) && !empty($_POST['fin']) && !empty($_POST['mail']) && preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail'])) {


	$titre = $_POST['titre'];
	$dateEvenement = $_POST['date'];
	$debut = $_POST['debut'];
	$fin = $_POST['fin'];
	$mail = $_POST['mail'];

	$requete = $bdd->prepare('INSERT INTO deficalendar(titre, dateEvenement, debut, fin , mail) VALUES (:titre , :dateEvenement , :debut , :fin , :mail)');

	$requete->execute(array(
		'titre' => $titre,
		'dateEvenement' => $dateEvenement,
		'debut' => $debut,
		'fin' => $fin,
		'mail' => $mail
		));
	}
?>