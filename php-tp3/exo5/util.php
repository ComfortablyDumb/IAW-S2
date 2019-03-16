<?php
	
	
	// Etant donnés la langue ($lang qui vaut "fr", "en" ou "it")
	// et la page ($page qui vaut "index", "products" ou "contact")
	// cette fonction retourne un tableau associatif contenant tous
	// les couples (clef,information) contenus dans le fichier
	// correspondant

	function build_array($array){
		// transforme un tableau de la forme [i]=>"element1#element2"
		// en un tableau de la forme [element1]=>"element2"
		$out = array();
		foreach($array as $element){
			$logs = explode("#",$element);
			$out[$logs[0]] = $logs[1];
			
		}
		return $out;
	}

	function get_content($lang,$page)
	{
		$file = "/home/enzo/adw/php-tp3/exo5/$lang/$page.txt";
		$out = build_array(file($file,FILE_IGNORE_NEW_LINES));
		return $out;


	}

	function make_list_items($items_str){
		$items = explode(";",$items_str);
		$out = "<ul>";
		foreach($items as $item){
			$out .= "\n\t<li> $item </li>";
		}
		$out .="\n</ul>";
		return $out;
	}

	session_start();
	// Si on n'a ni variable get ni variable de session on initialise la variable de session à fr
	// Si il y a une variable get elle devient la variable de session
	// et sinon on garde la dernière variable de session.
	if(!isset($_GET["lang"]) && !isset($_SESSION["lang"])){
		$_SESSION["lang"] = "fr";
	}
	else if(isset($_GET["lang"])){
		$_SESSION["lang"] = $_GET["lang"];
	}
	

	
	// à compléter
	// Dans cette partie, il faut
	// - démarrer/reprendre une session
	// - stocker dans le tableau $_SESSION
	//   la langue
	// Par défaut, la langue est le français

	
?>
