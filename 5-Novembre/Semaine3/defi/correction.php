<?php 

	header('location:index.php'); 

 	include('singleton.php'); 

 	$titreInitial = $_POST['titreInitial'];
 	$titre = $_POST['titre'];
 	$dateEvenement = $_POST['date'];
 	$debut = $_POST['debut'];
 	$fin = $_POST['fin'];
 	$mail = $_POST['mail'];

 		if(!empty($titre) && !empty($titreInitial)) {
 			$requete = $bdd->prepare('UPDATE deficalendar SET titre=:titre WHERE titre=:titreInitial');

			$requete->execute(array(
				'titre' => $titre,
				'titreInitial' => $titreInitial
			));
 		}

 		if(!empty($titre) && !empty($dateEvenement)) {
 			$requete = $bdd->prepare('UPDATE deficalendar SET dateEvenement=:dateEvenement WHERE titre=:titre');

			$requete->execute(array(
				'dateEvenement' => $dateEvenement, 
				'titre' => $titre
			));
 		}


 		if(!empty($titre) && !empty($debut)) {
 			$requete = $bdd->prepare('UPDATE deficalendar SET debut=:debut WHERE titre=:titre');

			$requete->execute(array(
				'debut' => $debut,
				'titre' => $titre
			));
 		}

		if(!empty($titre) && !empty($fin)) {
 			$requete = $bdd->prepare('UPDATE deficalendar SET fin=:fin WHERE titre=:titre');

			$requete->execute(array(
				'fin' => $fin,
				'titre' => $titre
			));
 		}

		if(!empty($titre) && !empty($mail)) {
 			$requete = $bdd->prepare('UPDATE deficalendar SET mail=:mail WHERE titre=:titre');

			$requete->execute(array(
				'mail' => $mail,
				'titre' => $titre
			));
 		}
 ?>