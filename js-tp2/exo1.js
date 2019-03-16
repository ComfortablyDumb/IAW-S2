
window.onload = function () {
	
	// les noms des fichiers images
	var sources = ["paysage-1.jpg", "paysage-2.jpg", "paysage-3.jpg",
		"paysage-4.jpg", "paysage-5.jpg", "paysage-6.jpg",
		"paysage-7.jpg", "paysage-8.jpg", "paysage-9.jpg"];

	// l'indice de l'image actuellement visible
	var indice = 0;

	// affiche l'image suivante
	function next() {
		let show = document.getElementById("show");
		indice++;
		if(indice>8){
			indice = 0
		}
		show.src = "images/"+sources[indice];
		//console.log("COUCOU")

		
	}

	// affiche l'image précédente
	function previous() {

		let show = document.getElementById("show");
		indice--;
		if(indice<0){
			indice = 8
		}
		show.src = "images/"+sources[indice];
		
	}

	// ici, il faut relier le JS à l'évènement "onclick" sur
	// les deux "flèches" (les images)
	let image = document.getElementById("image");
	let arrow = document.getElementsByClassName("arrow");
	arrowL = arrow[0];
	arrowR = arrow[1];
	arrowL.onclick = previous;
	arrowR.onclick = next;
	
	
};
