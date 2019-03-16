
window.onload = function () {
	let indice = 0;
	
	// affiche la source de l'image cliquée dans l'image
	// d'id "realize"
	function show() {
		
		let realsize = document.getElementById("realsize")
		
		realsize.src = this.src;
		
	}

	// ici, il faut relier la fonction "show" à l'évènement "onmouseover"
	// sur toutes les images ayant la classe "miniature"

	let miniatures = document.getElementsByClassName("miniature");
	for(let miniature of miniatures){
		miniature.onmouseover = show;
		
	}
	

};
