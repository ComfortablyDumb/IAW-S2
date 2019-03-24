<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Exercice 3</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/gallery.css">
		<script src="js/simpleajax.js"></script>
		<script src="js/gallery.js"></script>
	</head>
	<body>
		<div id="info" class="hide">
			<img src="" alt="Image du personnage" />
			<div>
				Nom : <span id="nom"></span>
			</div>
			<div>
				Prénom : <span id="prenom"></span>
			</div>
			<div>
				Sexe : <span id="sexe"></span>
			</div>
			<div>
				Age : <span id="age"></span>
			</div>
			<div>
				Activité : <span id="activite"></span>
			</div>
		</div>
		<div>
			<header>
				<h1><img src="images/logo.png" /></h1>
			</header>
			<div id="gallery">
<?php
	$characters = file("gallery.csv",FILE_IGNORE_NEW_LINES);

	foreach ($characters as $character) {
		$character = explode(",", $character);
?>
				<img id="<?= $character[0] ?>" src="images/<?= $character[1] ?>" alt="Personnage" />
<?php
	}
?>
			</div>
		</div>
	</body>
</html>
