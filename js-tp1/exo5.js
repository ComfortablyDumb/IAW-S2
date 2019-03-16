
// le nombre d'essais dans la partie courante
var essais = 1;
// le nombre total d'essais de toutes les parties
var nbEssais = 0;
// le nombre de paties jouées et terminées
var nbParties = 1;
// indique si on est en train de jouer une partie
var partieEnCours = true;
// le nombre à deviner
var secret = generer();
// le nombre d'essais du meilleur jeu
// Number.MAX_SAFE_INTEGER est la plus grande valeur
// entière possible
var meilleurJeu = Number.MAX_SAFE_INTEGER;

// vérifie la proposition de l'utilisateur et :
// - si la proposition est incorrecte, affiche la bonne
//   indication (trop petit ou trop grand)
// - sinon affiche le nombre d'essais qui ont été nécessaires
//   et mets à jour les statistiques
function verifier() {
    console.log(secret);
    let proposition = Number(document.getElementById("proposition").value);
    let message = document.getElementById("message");
    if (partieEnCours) {
        if (proposition > secret) {
            afficher("Trop grand ! ", "red")
            essais++;
        }
        else if (proposition < secret) {
            afficher("Trop petit !", "red")
            essais++
        }
        else {
            partieEnCours = false;
            afficher("Bravo ! Vous avez reussi en " + essais + " essais", "green");
            nbEssais += essais;
            if (essais < meilleurJeu) {
                meilleurJeu = essais;
            }
            essais = 1;
            let question = document.getElementById("question");
            question.style.visibility = "visible";
            afficherStat();
        }

    }

}

// si 'encore' est vrai, démarre une nouvelle partie
// sinon termine le jeu en affichant le message adéquat
function jouerEncore(encore) {
    let message = document.getElementById("message");
    let question = document.getElementById("question");
    if (encore) {
        partieEnCours = true;
        afficher("C'est reparti", "blue")
        question.style.visibility = "hidden";
        secret = generer();

        nbParties++;

    }
    else {
        afficher("Merci d'avoir jouer", "blue")
        question.style.visibility = "hidden";
    }

}

// affiche un message dans une couleur donnée
// dans l'élément prévu à cet effet
function afficher(message_str, couleur) {
    message.innerHTML = message_str;
    message.style.color = couleur;

}

// met à jour les statistiques
function afficherStat() {
    nbPartiesObj = document.getElementById("nbParties");
    nbMoyenEssaisObj = document.getElementById("nbMoyenEssais");
    meilleurJeuObj = document.getElementById("meilleurJeu");
    nbPartiesObj.innerHTML = nbParties;
    nbMoyenEssaisObj.innerHTML = (nbEssais / nbParties).toFixed(2);
    meilleurJeuObj.innerHTML = meilleurJeu;

}

// retourne un nombre aléatoire dans l'intervalle [1, 100]
function generer() {
    return (Math.floor(Math.random() * 100));
}
