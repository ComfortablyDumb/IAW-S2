
// calcule le prix TTC à partir du prix hors-taxe
// et de la TVA
// affiche une alerte avec un message d'erreur si les
// valeurs fournies ne sont pas des nombres
function prixTTC() {
    let prix = Number(document.getElementById("pht").value);
    let tva = Number(document.getElementById("tva").value);
    if(isNaN(prix) || isNaN(tva)){
        alert("Le prix et la tva doivent être des nombres !");
        
    }
    else{
        
        let prixFinal = (1+tva/100)*prix;
        let resultat = document.getElementById("resultat");
        let pttc = document.getElementById("pttc")
        resultat.style.visibility = "visible";
        pttc.innerHTML = prixFinal;


    }
}
