
window.onload = function() {

	// l'élément d'id 'info' qui contient les
	// informations pour un personnage donné
	let info = document.querySelector("#info");

	// cette fonction place les données regroupées
	// dans le JSON 'data' dans les éléments adéquats, ainsi
	// que le 'src' comme valeur de l'attribut 'src' de
	// l'image adéquate
	function update(data, src) {
		let infos = JSON.parse(data);

		for(let key in infos){
			document.getElementById(key).innerHTML = infos[key];


		}

		info.querySelector("img").src = src;

		
	}

	// cette fonction est appelée lorsqu'on clique sur une image.
	// Elle récupère la valeur de l'attribut 'id' et effectue une
	// requête AJAX au script 'info.php' avec cette valeur en paramètre.
	// Elle mets à jour le contenu des éléments adéquat avec les valeurs
	// retournées par le script.
	function showinfo() {
		let id = this.getAttribute("id");
		let src = this.src;
		function onSuccess(request){
			let data = request.responseText;
			update(data, src);
		};
		function onFailure(request){console.log("Erreur durant la requete Ajax");};
		new simpleAjax("info.php","get","id="+id,onSuccess,onFailure);

		info.style.visibility = "visible";
		
		
	}

	// ici, on ajoute l'évènement 'onclick' sur toutes les images
	// et on lie la fonction 'showInfo' à cet évènement

	let images = document.querySelectorAll("#gallery img");
	for(let image in images){
		image.onclick = showinfo;
	}
	
	
	
	// ici, on ajoute l'évènement 'onclick' sur l'élément
	// d'id 'info' et on lie à cet évènement la fonction
	// qui cache cet élément
	
	

	info.onclick = function(){info.style.visibility = "hidden";};
	
};
