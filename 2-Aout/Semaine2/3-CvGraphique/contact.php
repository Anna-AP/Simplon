<?php include("element/header.html"); ?>
        
        <div id="titre_page">
            <h1>Contact</h1>
        </div>
        
        <section>
                <form id="formulaire_contact" action="verif2-contact.php" method="post">
                    <legend>Et si vous m'&eacute;criviez ?</legend>
                    <p><label for="identite"></label><input type="text" name="identite" id="nom" class="input_form" placeholder="Votre nom et votre prénom" /></p>
                    <p><label for="mail"></label><input type="email" name="mail" id="mail" class="input_form" placeholder="Votre adresse mail" /></p>
                    <p><label for="objet"></label><input type="text" name="objet" id="objet" class="input_form" placeholder="L'objet de votre message" /></p>
                    <p><label for="message"></label><textarea name="message" class="input_text" id="message" placeholder="Votre message"></textarea></p>
                    <p><input type="submit" value="Envoyer" class="bouton_envoi" id="bouton_envoi" /></p>
                </form>
        </section>
        
<?php include("element/footer.html"); ?>