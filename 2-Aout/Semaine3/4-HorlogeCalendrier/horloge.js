function calendrier(){
    var now = new Date();
    var annee = now.getFullYear();
    var moisChiffre = now.getMonth() +1;
    var mois;
    var jour = now.getDate();
    
    function mois(){
        switch(moisChiffre) {
            case 1:
                return mois = "janvier";
            case 2:
                return mois = "février";
            case 3:
                return mois = "mars";
            case 4:
                return mois = "avril";
            case 5:
                return mois = "mai";
            case 6:
                return mois = "juin";
            case 7:
                return mois = "juillet";
            case 8:
                return mois = "août";
            case 9:
                return mois = "septembre";
            case 10:
                return mois = "octobre";
            case 11:
                return mois = "novembre";
            case 12:
                return mois = "décembre";
        }
    }

    document.getElementById('affichedate').innerHTML = jour + " " + mois() + " " + annee;
}

setInterval(function(){
    document.getElementById('afficheheure').innerHTML = new Date().toLocaleTimeString();
}, 1000);
