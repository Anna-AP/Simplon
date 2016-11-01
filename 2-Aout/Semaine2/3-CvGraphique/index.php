<?php include("singleton.php"); ?>

<?php include("element/header.html"); ?>
        
        <div id="titre_page">
            <h1>Accueil</h1>
        </div>
        
        <section id="accueil">
            <aside id="panneau_trois_realisations">
                <header>
                    <h1>Derni&egrave;res r&eacute;alisations</h1>
                </header>
                
                <?php     
                    $reponse = $bdd->query('SELECT * FROM Admistration ORDER BY id DESC LIMIT 0, 3');

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
            
            <article class="article_accueil">
                <div id="center">
                    <h2>Mes langages, librairies et framework</h2>
                    <div id="progression">
                        <aside class="progression">
                            <div>
                                <p><img src="img/langage/html.png" alt="" /></p>
                                <progress max="100" value="95" form="form-id">95%</progress>
                            </div>

                            <div>
                                <p><img src="img/langage/css.png" alt="" /></p>
                                <progress max="100" value="90" form="form-id">90%</progress>
                            </div>
                        </aside>

                        <aside class="progression">
                            <div>
                                <p><img src="img/langage/js.png" alt="" /></p>
                                <progress max="100" value="40" form="form-id">40%</progress>
                            </div>

                            <div>
                                <p><img src="img/langage/bootstrap.png" alt="" /></p>
                                <progress max="100" value="70" form="form-id">70%</progress>
                            </div>
                        </aside>
                        
                        <aside class="progression">
                            <div>
                                <p><img src="img/langage/php.png" alt="" /></p>
                                <progress max="100" value="70" form="form-id">70%</progress>
                            </div>

                            <div>
                                <p><img src="img/langage/mysql.png" alt="" /></p>
                                <progress max="100" value="50" form="form-id">50%</progress>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="center" id="center_part2">
                    <h2>Je suis sur :</h2>
                    <p><a href="https://fr.linkedin.com/in/anna-angélique-porte-864614127" target="_blank"><img src="img/support/linkedin.png" alt="" /></a>
                    <a href="#" target="_blank"><img src="img/support/alsa.png" alt="" /></a>
                    <a href="https://github.com/Anna-AP" target="_blank"><img src="img/support/github.png" alt="" /></a></p>
                </div>
            </article>
            
            <aside id="photo">
                <img src="img/entiere2.png" alt="photo" title="photo en cours" />
            </aside>
        </section>
        
<?php include("element/footer.html"); ?>
