<?php

	# retourne la chaîne '$s' normalisée
	# (toutes les lettres en minuscule sauf la première)
function normalize($s)
{
	strtolower($s);
	ucfirst($s);

}
	
	# Teste si les prénom et nom sont bien renseignés et
	# retourne le tableau des messages d'erreurs
	# (tableau vide s'il n'y a pas d'erreur)
function check_input()
{
	$errors = [];
	if ($_GET["prenom"] == "") {
		array_push($errors, "Vous n'avez pas renseigné votre prenom");
	}
	if ($_GET["nom"] == "") {
		array_push($errors, "Vous n'avez pas renseigné votre nom");
	}
	return ($errors);

}
	
	# retourne le code HTML (une chaîne de caractères) 
	# d'une liste "<ul><li>..</li>..</ul>", les
	# éléments de liste contenant les erreurs
	# contenues dans le tableau '$errors' 
function display_errors($errors)
{
	$out = "<ul>";
	foreach ($errors as $error) {
		$out .= "<li> $error </li>";
	}
	$out .= "</ul>";
	echo $out;

}
	
	# retourne le code HTML (une chaîne de caractères) 
	# d'un heading "<h2>...</h2>" contenant le message
	# de bienvenu en anglais
function display_welcome($h, $c, $p, $n)
{
	switch ($h) {
		case ($h < 12):
			echo "<h2>\nGood morning $c $p $n , welcome to Polytech !\n</h2>";
			break;
		case (12 <= $h && $h < 18):
			echo "<h2>\nGood afternoon $c $p $n , welcome to Polytech !\n</h2>";
			break;
		case (18 <= $h):
			echo "<h2>\nGood evening $c $p $n , welcome to Polytech !\n</h2>";
			break;




	}
}


?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>TP 1 - Exo 9</title>
		<meta name="author" content="Marc Gaetano">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>TP 1 - Exo 9</h1>
		<hr>
<?php
$errors = check_input();
// S'il y a des erreus on affiche les erreurs et sinon on affiche le message de bienvenue.
if(!empty($errors)){
	display_errors($errors);
}
else{
	display_welcome(date("G"),$_GET["civilite"],$_GET["prenom"],$_GET["nom"]);
}

?>
	</body>
</html>
