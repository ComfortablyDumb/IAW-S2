
window.onload = function () {

    // les noms des fichiers images
    var sources = ["paysage-1.jpg", "paysage-2.jpg", "paysage-3.jpg",
        "paysage-4.jpg", "paysage-5.jpg", "paysage-6.jpg",
        "paysage-7.jpg", "paysage-8.jpg", "paysage-9.jpg"];

    // les noms des fichiers images
    var indice = 0;

    // affiche l'image suivante
    function next() {
        let show = document.getElementById("show");
		indice++;
		if(indice>8){
			indice = 0
		}
		show.src = "images/"+sources[indice];
       
    }

	// ici, il faut relier le JS à l'évènement "onclick" sur
    // l'image d'id "show"
    
    let show = document.getElementById("show");
    show.onclick = next;
   
};
