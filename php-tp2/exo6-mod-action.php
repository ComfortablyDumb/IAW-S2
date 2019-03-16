<?php
	include("exo6.inc.php");
	
	$id = $_GET["id"];
	$prenom = $_GET["prenom"];
	$nom = $_GET["nom"];
	$score1 = $_GET["score1"];
	$score2 = $_GET["score2"];
	$score3 = $_GET["score3"];
	$studentArray = student_array($STUDENT_FILE);
	$scoreArray = score_array($SCORE_FILE);
	update_student_array($studentArray,$id,$prenom,$nom);
	update_score_array($scoreArray,$id,$score1,$score2,$score3);
	save_array($studentArray,$STUDENT_FILE);
	save_array($scoreArray,$SCORE_FILE);
	

    
    
    
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>TP 2 - Exo 6</title>
		<meta name="author" content="Marc Gaetano">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/tp2.css">
	</head>
	<body>
        <h1>TP 2 - Exo 6</h1>
        <hr>

		<h2>Modification(s) effectuée(s)</h2>
		<a class="bouton" href="exo6-formulaire.html">Nouvelle recherche</a>
	</body>
</html>
