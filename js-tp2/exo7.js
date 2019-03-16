
window.onload = function () {

	// affiche le nombre "t" dans le span "spanElt"
	// "t" a au plus deux chiffres
	function afficher(t, span) {
		let unite = t%10;
		let diaine = (t-unite)/10;
		let images = span.getElementsByTagName("img");
		let image_unite = images[1];
		let image_dizaine = images[0];
		image_unite.src = "images/"+unite+".png";
		image_dizaine.src = "images/"+diaine+".png";
		

	}

	// met à jour les images de l'horloge
	// à chaque seconde
	function tictac() {
		let d = new Date();
		let h = d.getHours();
		let m = d.getMinutes();
		let s = d.getSeconds();
		let horloge = document.getElementById("horloge");
		let spans = horloge.getElementsByTagName("span");
		afficher(h,spans[0]);
		afficher(m,spans[1]);
		afficher(s,spans[2]);

		
	}

	setInterval(tictac,1000);

	// ici, il faut lancer l'horloge
	
};
