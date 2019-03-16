
window.onload = function () {

	// le "handler" du setTimeout
	let chrono = null;

	// si 'ok' est 'true', alors l'utilisateur
	// a choisi la bonne réponse
	let ok = false;

	// affiche le message 'm' avec la couleur 'c'
	// dans l'élément prévu à cet effet
	function msg(m, c) {

		let message = document.getElementById("message");
		message.innerHTML = m;
		message.style.color = c;
		

	}

	// cette fonction est appelée à l'issue
	// du setTimeout
	function stop() {
		let checked = false;
		let reponses = document.getElementsByName("reponse");
		for(let reponse of reponses){
			if(reponse.checked){
				verifier(reponse);
				checked = true;

			}
		}
		if(!checked){
			msg("Trop lent","#FF00FF");
		}
		
	}

	// traite le "clic" sur un bouton radio
	function verifier(reponse) {
		if(reponse.value == 60){
			msg("Bonne réponse","green");
		}
		else{
			msg("Mauvaise réponse","red");
			console.log(reponse.value)
		}
		
	}

	// ici, on lance le setTimeout et stocke
	// le "handler" dans la variable 'chrono'
	setTimeout(stop,5000);
	
};
