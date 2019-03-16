<?php

	# si '$N' est premier, retourne '$N'
	# sinon retourne le plus petit diviseur
	# de '$N'. Par exemple :
	# - premier(13) -> 13
	# - premier(35) -> 5
	function premier($N) {
		// On parcourt tous les nombres entre 2 et N et dès lors qu'un nombre divise N on le renvoie
		// Si N est premier le nombre renvoyé sera bien N car ça sera l'unique entier entre 2 et N qui divise N.
		for($i=2;$i<=$N;$i++){
			if($N%$i==0){
				return($i);
			}
			
		}

	}

	# retourne une chaîne de caractères du type :
	# - "Le nombre N est premier" si '$N' est premier
	# - "Le nombre N n'est pas premier car multiple de D"
	#   si '$N' est divisible par un nombre D (et donc, pas premier)
	function resultat($N) {
		// Si premier(N) renvoie N alors on est sûr que N est premier.
		// Sinon on affiche le plus petit diviseur de N (1 exclu).
		if(premier($N)==$N){
			return("$N est premier");
		}
		else{
			return("$N n'est pas premier car il est divisible par ".premier($N));
		}

	}

	
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>TP 1 - Exo 4</title>
		<meta name="author" content="Marc Gaetano">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>TP 1 - Exo 4</h1>
		<hr>
		<h2> <?php echo resultat(((intval($_GET["nombre"])))) ?></h2>
		<a class="bouton" href="exo4.html">Autre test</a>
	</body>
</html>
