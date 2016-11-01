function verification1 () {
	var reponse1 = document.getElementById('reponse1').value;
	
	var resultat1 = document.getElementById('resultat1');

	if (reponse1 === 'blanc') {

		var sautDeLigne = '<br />';
		var balise1 = '<a href="index2.html" >';
		var text = 'question suivante';
		var balise2 = '</a>';

		resultat1.innerHTML = 'Bravo, tu as trouvé !' + sautDeLigne + balise1 + text + balise2;

		/*var partie_un = document.getElementById('premierResultat');
		var lien = document.createElement('a');
		lien.setAttribute('href' , 'index2.html');
		partie_un.appendChild(lien);
		var lien = document.createTextNode('question suivante');*/
	} else {

		resultat1.innerHTML = 'Essai encore...';
	}
}

function verification2 () {
	var reponse2 = parseInt(document.getElementById('reponse2').value);
	
	var resultat2 = document.getElementById('resultat2');

	if (reponse2 === 7) {

		resultat2.innerHTML = 'Bravo, tu as trouvé !';

	} else {

		resultat2.innerHTML = 'Essai encore...';
	}
}