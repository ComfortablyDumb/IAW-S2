<?php
function check_vars(){
	// On vérifie si les variables existent.
	return(isset($_GET["proposition"]) && isset($_GET["essais"]) && isset($_GET["secret"]));
}

function display_message(){
	// Fonction qui affiche le message.
	if(!check_vars()){
		echo "<h3>Je pense à un nombre compris entre 1 et 100... à vous de le deviner !</h3>\n";
		
	}
	else{
		$proposion = $_GET["proposition"];
		$essais = $_GET["essais"];
		$secret = $_GET["secret"];
		echo "<h2>Vous proposez $proposion: </h2>";
		if($proposion > $secret){
			echo "<h3>Trop grand, essayez encore...</h3>";
		}
		else if($proposion < $secret){
			echo "<h3>Trop petit, essayez encore...</h3>";
		}
		else{
			echo "<h3>Bravo, vous avez trouvé en $essais essai(s) !</h3>";
		}
	}
}

function display_form(){
	// Fonction qui affiche le formulaire pour donner la réponse si le joueur n'a pas gagné et sinon
	// elle affiche un bouton permettant de rejouer.
	if(!check_vars()){
		$secret = rand(1,100);
		// on tire au sort le nombre secret et on fixe essais à 1.
		$out = "<form class='exo12' method='get'>
		Votre proposition : <input type='text' name='proposition'>
		<input type='hidden' name='essais' value='1'> 
		<input type='hidden' name='secret' value='$secret'>
		<input type='submit' value='Vérifier'>
	  </form>";
	}
	else if($_GET["proposition"] == $_GET["secret"]){
		$out = "\n<a class='bouton' href='exo12.php'>Autre partie</a>	</body>";
	}
	else{
		// On renvoie le nombre secret et le nombre d'essais + 1 car le joueur s'est trompé.
		$essais = $_GET["essais"] + 1;
		$secret = $_GET["secret"];
		$out = "<form class='exo10' method='get'>
		Votre proposition : <input type='text' name='proposition'>
		<input type='hidden' name='essais' value='$essais'>
		<input type='hidden' name='secret' value='$secret'>
		<input type='submit' value='Vérifier'>
	  </form>";
	}

	echo $out;
}


?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>TP 1 - Exo 12</title>
		<meta name="author" content="Marc Gaetano">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>TP 1 - Exo 12</h1>
		<hr>
<?php
// On affiche le message et le formulaire/bouton.
display_message();
display_form();


?>
	</body>
</html>