<?php include("singleton.php"); ?>

<?php include("element/header.html"); ?>
        
        <div id="titre_page">
            <h1>R&eacute;alisations</h1>
        </div>
        
        <section id="realisation">
            <aside id="miniature_realisation">
                
                <?php     
                    $reponse = $bdd->query('SELECT * FROM Admistration ORDER BY id DESC');

                    // J'affiche chaque entrée une à une
                    while ($donnees = $reponse->fetch()) {
                ?>

                <div class="miniature">
                    <?php echo '<img src="img/logo/' . $donnees['url_logo'] . '" alt="" />'; ?>

                    <?php echo '<a href="#oModal' . $donnees['id'] . '">' . $donnees['nom_du_site'] . '</a>'; ?>
                    
                    <?php echo '<div id="oModal' . $donnees['id'] . '" class="oModal">'; ?>
                        <div>
                            <header>
                                <?php echo '<a href="#fermer' . $donnees['id'] . '" title="Fermer la fenêtre" class="droite">X</a>'; ?>
                                <h2><?php echo $donnees['nom_du_site']; ?></h2>
                            </header>
                            
                            <section>
                                <?php echo '<img src="img/screen/' . $donnees['url_screen'] . '" alt="Accueil du site" />'; ?>
                                <p><?php echo $donnees['description']; ?></p>
                                <?php echo '<a href="' . $donnees['lien_du_site'] . '" target="_blank">Voir le site</a>'; ?>
                            </section>

                            <footer class="cf">
                                <?php echo '<a href="#fermer' . $donnees['id'] . '" class="btn droite" title="Fermer la fenêtre">Fermer</a>'; ?>
                            </footer>
                        </div>
                    </div>
                 </div>

                <?php
            }
                    $reponse->closeCursor(); //Je termine le traitement de ma requête
                ?>
            </aside>
        </section>
        
<?php include("element/footer.html"); ?>
