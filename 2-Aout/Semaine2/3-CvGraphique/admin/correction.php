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
                <form name="correction" id="insertion" action="correctionsql.php" method="post">
                    <legend><p>Modifier un projet</p></legend>
                    <p class="formulaire_ajout"><label></label><input type="number" name="identifiant" class="input_ajout" id="identifiant" placeholder="Identifiant" /></p>
                    <p class="formulaire_ajout"><label></label><input type="text" name="nom_du_site" class="input_ajout" id="nom_du_site" placeholder="Nom du projet" /></p>
                    <p class="formulaire_ajout"><label></label><input type="text" name="lien_du_site" class="input_ajout" id="lien_du_site" placeholder="Lien du projet" /></p>
                    <p class="formulaire_ajout"><label></label><input type="text" name="url_logo" class="input_ajout" id="logo_du_site" placeholder="Nom du logo" /></p>
                    <p class="formulaire_ajout"><label></label><input type="text" name="url_screen" class="input_ajout" id="screen_du_site" placeholder="Nom du screen" /></p>
                    <p class="formulaire_ajout"><label></label><textarea name="message" id="input_text" id="description_du_site" placeholder="Description du projet"></textarea></p>
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
