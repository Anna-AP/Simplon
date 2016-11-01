<?php header('location:suppression.php'); ?>

<?php include('singleton.php'); ?>

<?php 

if(isset($_POST['identifiant'])) {
//récupération de mes données
$identifiant = $_POST['identifiant'];

//création de la requête sql pour ajouter les données
$requete = $bdd->prepare('DELETE FROM Admistration WHERE id=:id');

$requete->execute(array(
	'id' => $identifiant
	));
}
?>