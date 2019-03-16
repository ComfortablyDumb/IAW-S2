<?php

	# retourne le code HTML (une chaîne de caractères)
	# d'une table contenant les diviseurs de '$N'
	# (une seule ligne, autant de colonnes que de diviseurs)
function diviseurs($N){
	// On parcourt tous les nombres entre 1 et N et si ils divisent N on les rajoute au tableau
	$out = "<table class='exo4'><tr>";
	for ($i = 1; $i <= $N; $i++) {
		if ($N % $i == 0) {
			$out .= "<td>$i</td>";
		}
	}
	$out .= "</tr></table>";
	return($out);

}


?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>TP 1 - Exo 3</title>
		<meta name="author" content="LP IMApp">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>TP 1 - Exo 3</h1>
		<hr>
		<h2>Les diviseurs de <?php echo $_GET["n"] ?></h2>
		<?php 
		// On affiche le tableau des diviseurs de N
		// La fonction inval sert à transformer le type str en type int
		echo diviseurs(intval($_GET['n']));
		
		?>

	</body>
</html>
