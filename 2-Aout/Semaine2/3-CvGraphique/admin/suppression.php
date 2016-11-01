<?php include('singleton.php'); ?>

<?php include("element/header.html"); ?>
        
        <div id="titre_page">
            <h1>Administration</h1>
        </div>
        
            <div class="administration">
                <a href="ajout.php">Ajout</a>
                <a href="correction.php">Correction</a>
                <a href="suppression.php">Suppression</a>
            </div>

        <section id="ajout_projet">
            <article id="article_insertion">
                <form name="suppression" id="insertion" action="suppressionsql.php" method="post">
                    <legend><p>Supprimer un projet</p></legend>
                    <p class="formulaire_ajout"><label></label><input type="number" name="identifiant" class="input_ajout" id="identifiant" placeholder="Identifiant" /></p>
                    <p class="formulaire_ajout"><input type="submit" class="bouton_envoie" value="Envoyer" /></p>
                <form>
            </article>

            <article>
                <table>
                    <tr>
                        <td class="menu_tableau">Identifiant</td>
                        <td class="menu_tableau">Nom du site<td>
                    </tr>
                    <?php 
                        $reponse = $bdd->query('SELECT * FROM Admistration ORDER BY id DESC');

                        // J'affiche chaque entrée une à une
                        while ($donnees = $reponse->fetch()) {
                    ?>
                    <tr>
                        <td class="menu_tableau"><?php echo $donnees['id']; ?></td>
                        <td class="menu_tableau"><?php echo $donnees['nom_du_site']; ?></td>
                    </tr>
                    <?php
            }
                    $reponse->closeCursor(); //Je termine le traitement de ma requête
                ?>
                </table>
            </article>
        </section>
        
<?php include("element/footer.html"); ?>
