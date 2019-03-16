<?php

	# retourne le nom du jour de la semaine
	# correspondant à '$week', le  numéro du
	# jour de la semaine (0 -> dimanche, 1 -> lundi, ...)
function jour($week){

	$jours = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
	return ($jours[$week]);


}

	# retourne le nom du mois correspondant à '$month',
	# le  numéro du mois (1 -> janvier, 2 -> février, ...)
function mois($month){
	
	$mois = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"];
	return ($mois[$month]);

}

$day = date("j");
$jour = jour(date("w"));
$mois = mois(date("n"));
$year = date("Y");
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>TP 1 - Exo 7</title>
		<meta name="author" content="Marc Gaetano">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>TP 1 - Exo 7</h1>
		<hr>
		<h2>
		<?php 
			$jour = date("d");
			$week = jour(date("w"));
			$mois = mois(date("n"));
			$annee = date("Y");
			echo ("Nous sommes le $week $jour $mois $annee");
			 ?>
	</h2>
	</body>		
</html>
