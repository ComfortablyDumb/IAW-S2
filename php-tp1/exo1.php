<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>TP 1 - Exo 1</title>
		<meta name="author" content="Marc Gaetano">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>TP 1 - Exo 1</h1>
		<hr>
		<?php
$heure = date("G");
$min = date("i");
$sec = date("s");
;

?>
		<h2>
		Il est <?php echo $heure?> heure(s) <?php echo $min?> minute(s) et <?php $sec?> seconde(s)
		
			
		</h2>
	</body>
</html>
