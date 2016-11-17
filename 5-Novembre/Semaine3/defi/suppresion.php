<?php 

	header('location:index.php'); 
	
	include('singleton.php'); 

	if(!empty($_POST['titre'])) {
		$titre = $_POST['titre'];

		$requete = $bdd->prepare('DELETE FROM deficalendar WHERE titre=:titre');

		$requete->execute(array(
			'titre' => $titre
			));
	}
?>