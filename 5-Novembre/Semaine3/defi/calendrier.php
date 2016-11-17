<?php include('singleton.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="design.css" />
        <title>Calendar Evenement</title>
    </head>
    <body>

    <?php

    	$reponse = $bdd->query('SELECT * FROM deficalendar ORDER BY dateEvenement');

    	while ($donnees = $reponse->fetch()) {
    ?>

    <aside>
        <h1><?php echo $donnees['titre']; ?></h1>
    	<p>Le : <?php echo $donnees['dateEvenement']; ?></p>
    	<p>De : <?php echo $donnees['debut']; ?> &agrave; <?php echo $donnees['fin']; ?></p>
    	<p>Contact : <?php echo $donnees['mail']; ?></p>
    </aside>
    <?php
    	}

    	$reponse->closeCursor();
    ?>
    </body>
</html>