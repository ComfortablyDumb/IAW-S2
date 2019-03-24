/**
 * Ajout du gestionnaire de chargement de la page.
 */
window.onload = function() {
	/**
	 * Le conteneur d'informations du personnage.
	 */
	let info = document.querySelector("#info");

	/**
	 * Met à jour les informations du personnage.
	 * @param string[] data Le tableau des informations du personnage.
	 * @param string src Le chemin d'acès à l'image du personnage.
	 */
	function updateInfo(data, src) {
		// Décodage du tableau (en format JSON).
		let infos = JSON.parse(data);

		// Pour chaque information.
		for (let key in infos) {
			// Mise à jour de l'information.
			document.getElementById(key).innerHTML = infos[key];
		}

		// Mise à jour de l'image du personnage.
		info.querySelector("img").src = src;
	}

	/**
	 * Récupère et affiche les informations du personnage.
	 */
	function showInfo() {
		// Récupération du chemin d'accès.
		let src = this.src;

		// Requête Ajax pour les données.
		new simpleAjax(
			"info.php",
			"get",
			"id=" + this.id,
			// Fonction de succès.
			function (request) {
				let data = request.responseText;
				updateInfo(data, src);
			},
			// Fonction d'échec.
			function (request) {}
		);

		// Affichage des informations du personnage.
		info.style.visibility = "visible";
	}

	/**
	 * Dissimule les informations du personnage.
	 */
	function hideInfo() {
		// Dissimulation des informations du personnage.
		info.style.visibility = "hidden";
	}

	// Récupération des images de la galerie.
	let images = document.querySelectorAll("#gallery img");

	// Pour chaque image.
	for (let i = 0; i < images.length; i++) {
		// Ajout du gestionnaire de clic.
		images[i].onclick = showInfo;
	}

	// Ajout du gestionnaire de clic.
	info.onclick = hideInfo;
};
