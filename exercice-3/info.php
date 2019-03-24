<?php
	// Récupération des personnages.
	$characters = file("gallery.csv", FILE_IGNORE_NEW_LINES);

	/**
	 * Récupère les informations d'un personnage (en format JSON).
	 */
	function getInfo($id, $characters) {
		// Initialisation du tableau.
		$info = [];

		// Pour chaque personnage.
		foreach ($characters as $character) {
			// Récupérations des informations.
			$character = explode(",", $character);

			// S'il s'agit du bon personnage.
			if ($character[0] === $id) {
				// Ajout des informations au tableau.
				$info["nom"] = $character[2];
				$info["prenom"] = $character[3];
				$info["sexe"] = $character[4];
				$info["age"] = $character[5];
				$info["activite"] = $character[6];
				break;
			}
		}

		// On retourne les informations (en format JSON).
		return json_encode($info);
	}

	// Affichage des informations d'un personnage donné.
	echo getInfo($_GET["id"], $characters);
?>
