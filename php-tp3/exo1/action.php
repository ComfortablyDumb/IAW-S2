<?php
	session_start();

	function resultat($x,$y,$user) {
		$produit = $x*$y;
		if($produit == $user){
			echo "Bravo, vous avez raison, $x x $y = $user !";
		}
		else if($user==""){
			echo "Il faut répondre hein";
		}
		else{
			echo "Faux: $x x $y = $produit et non $user";
		}
	}

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>TP 3 - Exo 1</title>
		<meta name="author" content="Marc Gaetano">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="../css/tp3.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>TP 3 - Exo 1</h1>
		<hr>

		<h2>Multiplication</h2>
		<p>
<?php
	resultat($_SESSION["x"],$_SESSION["y"],$_GET["utilisateur"]);
	$_SESSION = array();
	session_destroy();
	session_regenerate_id(TRUE);
    
?>
		</p>
		<p>
			<a href="formulaire.php">Autre multiplication</a>
		</p>
	</body>
</html>
