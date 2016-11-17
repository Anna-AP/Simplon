<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="design.css" />
        <title>Calendar Evenement</title>
    </head>
    <body>

    <section>
    	<header>
    		<ul class="menu">
		  		<li><a id="lien0" href="#" onclick="affichePage(0)">Ajout</a></li>
		  		<li><a id="lien1" href="#" onclick="affichePage(1)">Correction</a></li>
		  		<li><a id="lien2" href="#" onclick="affichePage(2)">Suppression</a></li>
			</ul>
    	</header>

    	<article>
    		<div class="page" style="display:block;">
		    	<form action="ajout.php" method="post">
		    		<legend>Ajouter un &eacute;v&eacute;nement</legend>
		    		<p><label for="titre">Nom de l'&eacute;v&eacute;nement : </label><input type="text" name="titre" id="titre" placeholder="exemple" /></p>
		    		<p><label for="date">Date : </label><input type="text" name="date" id="date" placeholder="17.11.16" /></p>
		    		<p><label for="debut">Heure de d&eacute;but : </label><input type="text" name="debut" id="debut" placeholder="9h30" /></p>
		    		<p><label for="fin">Heure de fin : </label><input type="text" name="fin" id="fin" placeholder="17h30" /></p>
		    		<p><label for="mail">Mail du cr&eacute;ateur : </label><input type="text" name="mail" id="mail" placeholder="exemple@mail.fr" /></p>
		    		<p><input type="submit" value="Enregistrer" id="bouton" /></p>
		    	</form>
	    	</div>

	    	<div class="page">
	    		<form action="correction.php" method="post">
		    		<legend>Corriger un &eacute;v&eacute;nement</legend>
		    		<p><label for="titreInitial">Nom initial de l'&eacute;v&eacute;nement : </label><input type="text" name="titreInitial" id="titreInitial" placeholder="Seulement pour modifier le nom de l'évènement" /></p>
		    		<p><label for="titre">Nom de l'&eacute;v&eacute;nement : </label><input type="text" name="titre" id="titre" placeholder="exemple" /></p>
		    		<p><label for="date">Date : </label><input type="text" name="date" id="date" placeholder="17.11.17" /></p>
		    		<p><label for="debut">Heure de d&eacute;but : </label><input type="text" name="debut" id="debut" placeholder="9h30" /></p>
		    		<p><label for="fin">Heure de fin : </label><input type="text" name="fin" id="fin" placeholder="17h30" /></p>
		    		<p><label for="mail">Mail du cr&eacute;ateur : </label><input type="text" name="mail" id="mail" placeholder="exemple@mail.fr" /></p>
		    		<p><input type="submit" value="Corriger" id="bouton" /></p>
		    	</form>
	    	</div>

	    	<div class="page">
	    		<form action="suppresion.php" method="post">
		    		<legend>Supprimer un &eacute;v&eacute;nement</legend>
		    		<p><label for="titre">Nom de l'&eacute;v&eacute;nement : </label><input type="text" name="titre" id="titre" placeholder="exemple" /></p>
		    		<p><input type="submit" value="Supprimer" id="bouton" /></p>
		    	</form>
	    	</div>
    	</article>	
		</section>

    	<script>
			function affichePage(pageId){
			  masquePages();
			  document.getElementsByClassName('page')[pageId].style.display = 'block';
			  document.getElementById('lien'+pageId).classList.add('selected');
			}

			function masquePages(){
			  var pages = document.getElementsByClassName('page');
			  for(var i = 0 ; i < pages.length ; i ++){
			    pages[i].style.display = 'none';
			     
			  document.getElementById('lien'+i).classList.remove('selected');
			  }
			  
			}
    	</script>
    </body>
</html>