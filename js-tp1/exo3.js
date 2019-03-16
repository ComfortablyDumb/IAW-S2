
var x; // le premier nombre de la multiplication
var y; // le deuxième nombre de la multiplication

// donne le rôle du bouton :
// si 'verifier' est 'true' alors le prochain clic sur le bouton
// est destiné à vérifier la réponse de l'utilisateur, sinon,
// le clic est destiné à proposer une nouvelle multiplication
var verifier = true;

// génére une nouvelle multiplication, autrement dit :
// - génère deux entiers au hasard dans l'intervalle [1,9]
// - les affiche dans les bons éléments HTML
function nouvelle() {
    x = Math.floor(Math.random() * 10);
    y = Math.floor(Math.random() * 10);
    let nombre1 = document.getElementById("nombre1");
    let nombre2 = document.getElementById("nombre2");
    nombre1.innerHTML = x;
    nombre2.innerHTML = y;

}

// cette fonction est appelée quand l'utilisateur clique
// sur le bouton. La fonction a deux rôles alternatifs :
// - vérifier que la proposition de l'utilisateur est correcte
// - générer une nouvelle multiplication
// Cette alternance est gérée à l'aide de la variable 'verifier'
function valider() {
    let proposition = Number(document.getElementById("proposition").value);
    if (isNaN(proposition)) {
        alert("Il faut mettre un nombre !");
    }
    else {
        let resultat = document.getElementById("resultat");
        resultat.style.visibility = "visible";

        if (verifier) {
            verifier = false;
            if (proposition == x * y) {
                resultat.innerHTML = "Bonne réponse =)";

            }
            else {
                resultat.innerHTML = "Mauvaise réponse ='c";



            }
        }
        else {
            let bouton = document.getElementById("bouton");
            bouton.onclick = location.reload();
        }
    }
}


