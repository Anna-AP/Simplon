<?php
    try { // Je me connecte à MySQL avec PDO
        $bdd = new PDO('mysql:host=localhost;dbname=siteCV;charset=utf8', 'XXXXXXXXXX', 'XXXXXXXXXX', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch(Exception $e) { // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
    }

?>