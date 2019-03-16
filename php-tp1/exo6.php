<?php

	# retourne le code HTML (une chaîne de caractères)
	# d'une table '$n'x'$n' représentant un échiquier
	# alternant cases blanches et noires
function table($n)
// fonction identique à celle avec les tables de multiplications sauf qu'on appelle make_case au lieu
// de make_line.

{
	$out = '<table class="exo6">';
	for ($i = 1; $i <= $n; $i++) {
		$out .= "<tr>\n";
		for ($j = 1; $j <= $n; $j++) {
			$out .= make_case($i, $j);
		}
		$out .= "</tr>";
		
	}
	echo $out;

}

function make_case($i, $j)
// Fonction qui crée une case de l'echiquier.
// Si le somme des deux coordonnées du tableau est pair alors la case est noire et sinon elle est blanche.
{
	if (($i + $j) % 2 == 0) {
		return ("<td class='noir'></td>");
	} else {
		return ("<td class='blanc'></td>");
	}
}

function taille()
// Si taille n'existe pas on la fixe à 8 et sinon on la renvoie.
{
	if (isset($_GET["taille"])) {
		return ($_GET["taille"]);
	} else {
		return (8);
	}
}


?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>TP 1 - Exo 6</title>
		<meta name="author" content="Marc Gaetano">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>TP 1 - Exo 6</h1>
		<hr>
		<h2><?php echo "Echiquier de taille ".taille()."x".taille() ?> </h2>
		</tr>
  </tr>
  </tr>
  </tr>
  </tr>
  </tr>
  </tr>
  </tr>
  <?php table(taille()) ?>
		
		
	</body>
</html>
