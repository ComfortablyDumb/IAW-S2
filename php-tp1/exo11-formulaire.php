<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>TP 1 - Exo 11</title>
		<meta name="author" content="Marc Gaetano">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>TP 1 - Exo 11</h1>
		<hr>
		<form action="exo11-action.php" method="get">
			<?php 
			// On tire au sort deux nombres puis on affiche la question et on transmet les deux nombres avec des 
			// lignes de formulaire cachées.
			$x = rand(2,10);
			$y = rand(2,10);
			echo "Combien fait $x x $y ?\n<br><br>\n";
			echo "<input type=\"hidden\" name=\"x\" value=$x >\n";
			echo "<input type=\"hidden\" name=\"y\" value=$y >\n"; 
			?>
			Reponse: <input type="number" name="user" />
			<br><br>
			<input type="submit" value="Envoyer" />

		
		</form>

	</body>
</html>
