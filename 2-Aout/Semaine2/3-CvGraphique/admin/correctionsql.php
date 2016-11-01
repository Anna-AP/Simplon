<?php header('location:correction.php'); ?>

<?php include('singleton.php'); ?>

<?php 

if(isset($_POST['nom_du_site']) && isset($_POST['lien_du_site']) && isset($_POST['url_logo']) && isset($_POST['url_screen']) && isset($_POST['message']) && isset($_POST['identifiant'])) {
//récupération de mes données

$nom_du_site = $_POST['nom_du_site'];
$lien_du_site = $_POST['lien_du_site'];
$url_logo = $_POST['url_logo'];
$url_screen = $_POST['url_screen'];
$description = $_POST['message'];
$identifiant = $_POST['identifiant'];

//création de la requête sql pour ajouter les données
$requete = $bdd->prepare('UPDATE Admistration SET nom_du_site=:nom_du_site, lien_du_site=:lien_du_site, url_logo=:url_logo, url_screen=:url_screen , description=:description WHERE id=:id');

$requete->execute(array(
	'nom_du_site' => $nom_du_site,
	'lien_du_site' => $lien_du_site,
	'url_logo' => $url_logo,
	'url_screen' => $url_screen,
	'description' => $description,
	'id' => $identifiant
	));
}
?>