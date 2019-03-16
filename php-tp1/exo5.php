<?php

	# retourne le code HTML (une chaîne de caractères)
	# d'une table 10x10 contenant les 10 tables de
	# multiplication
	function table() {
		// On fait une double boucle qui parcourt tous les couples (i,j) avec i et j compris entre 1 et 10.
		// Pour chaque couple on affiche la ligne de tableau correspondant.
		$out = "<table class='exo6'>";
		for($i=1;$i<=10;$i++){
			$out.="<tr>";
			for($j=1;$j<=10;$j++){
				$out .= make_line($i,$j);
			}
			$out.="</tr>";
		}
		$out .= "</tr></table>";
		echo($out);
		

	}

	function make_line($i,$j){
		// Cette fonction prend 2 nombres et renvoie la ligne de tableau correspondant à leur multiplication.
		$p = $i*$j;
		$out = "<td><strong>$i</strong> x $j = $p</td>";
		return($out);
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>TP 1 - Exo 5</title>
		<meta name="author" content="Marc Gaetano">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>TP 1 - Exo 5</h1>
		<hr>
		<?php table() // On affiche le tableau ?>
		
	</body>
</html>
