<?php

	# retourne un tableau à deux éléments [ C , N ] où :
	# - C est une chaîne de caractères de la forme
	#   "n1, n2, n3, n4, n5" où n1, n2,..., n5
	#   sont cinq nombres triés croissant tirés au hasard
	#   dans l'intervalle [1, 49]
	# - N un nombre tiré au hasard dans l'intervalle [1, 10]
function loto(){
	return ([tirage(), rand(1, 10)]);

}

function tirage(){
	// On tire au sort un nombre entre 1 et 49 puis s'il n'est pas dans le liste on le rajoute sinon on
	// recommence.
	// A la fin on trie la liste puis on le renvoie une string avec la forme demandée.
	$out = [];
	for ($i = 1; $i <= 5; $i++) {
		$k = rand(1, 49);
		if (!in_array($k, $out)) {
			array_push($out, $k);
		}
		else{
			$i--;
		}

	}
	sort($out);
	return (implode($out, ","));
}



?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>TP 1 - Exo 8</title>
		<meta name="author" content="Marc Gaetano">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">
	</head>

	<body>
		<h1>TP 1 - Exo 8</h1>
		<hr>
		<h2>Loto Flash</h2>
		<p>
			<?php 
		$loto = loto();
		echo "Les cinq numéro sont $loto[0] et le numéro chance : $loto[1]";
		?>
			
		</p>
		<p>
			<a class="bouton" href="exo8.php">Un autre Loto Flash</a>
		</p>
	</body>
</html>
