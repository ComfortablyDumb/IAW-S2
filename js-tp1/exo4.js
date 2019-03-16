
// teste si les champs du formulaire sont corrects et :
// - si ils le sont, retourne 'true'
// - sinon, affiche le message d'erreur adéquat dans
//   l'emplacement prévu à cet effet, et retourne 'false'
function checkform() {
    let login = document.getElementById("log").value;
    let pass1 = document.getElementById("pass1").value;
    let pass2 = document.getElementById("pass2").value;
    let erreur = document.getElementById("erreur");
    if(login.length < 3 || !(/^[a-zA-Z]+$/.test(login))){
        errormsg("Login incorrect");
        return false;
    }
    if(pass1.length < 4){
        errormsg("Mot de passe trop court");
        return false;
        
    }
    if(!(pass1 == pass2)){
        errormsg("password1 et password2 sont différents");
        return false;
    }
    return true;
    


}

// efface le contenu de l'élément où on affiche
// les messages d'erreur et cache cet élément
function resetform() {
    let erreur = document.getElementById("erreur");
    erreur.innerHTML = "";
    erreur.style.visibility = "hidden";

}

// écrit 'msg' dans l'élément où on affiche
// les messages d'erreur et montre cet élément
function errormsg(msg) {
    erreur.style.visibility = "visible"
    erreur.innerHTML = msg;

}
