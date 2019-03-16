
// étant donnée la moyenne 'm'
// retourne l'appréciation correspondante
// (une chaîne de caractères)
function appreciation( m ) {
    if(m<6){
        return("Très insuffisant");

    }
    else if(6<=m && m<10){
        return("Insuffisant");
    }
    else if(10<=m && m<13){
        return("Moyen");
    }
    else{
        return("C'est bien =)");
    }

    

}

// calcule la moyenne à partir des trois notes
// et affiche la moyenne et l'appréciation correspondante
function calculer() {

    let note1 = Number(document.getElementById("note1").value);
    let note2 = Number(document.getElementById("note2").value);
    let note3 = Number(document.getElementById("note3").value);
    if(isNaN(note1)|| isNaN(note2) || isNaN(note3)){
        alert("Les notes doivent être des nombres !");
        
    }
    else{
        
        let resultat = document.getElementById("resultat");
        let moyenne = document.getElementById("moyenne");
        let appreciationObj = document.getElementById("appreciation");
        let m = (note1+note2+note3)/3;
        let appreciationStr = appreciation(m);
        resultat.style.visibility = "visible";
        moyenne.innerHTML = m;
        appreciationObj.innerHTML = appreciationStr;
        


    }
    


}
