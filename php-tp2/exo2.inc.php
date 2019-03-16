<?php
	$INFO = [
		"pays1"  => [ "Afrique du Sud", "afrique-du-sud.jpg", "Prétoria", "pretoria.jpg" ],
		"pays2"  => [ "Allemagne", "allemagne.jpg", "Berlin", "berlin.jpg" ],
		"pays3"  => [ "Australie", "australie.jpg", "Canberra", "canberra.jpg" ],
		"pays4"  => [ "Etats-Unis", "usa.jpg", "Washington", "washington.jpg" ],
		"pays5"  => [ "Vietnam", "vietnam.jpg", "Hanoi", "hanoi.jpg" ]
	];

    // pour comprendre ce que cette fonction doit générer
    // regardez le code source HTML du fichier exemple fourni
	function makeRadio($info,$name) {

		$out = "<div>";
		foreach($info as $key => $value){
			$out .= "<fieldset>
			<input type='radio' name='codepays' value='$key'> $value[0]
		</fieldset>";
		}
		$out .= "</div>";
		return($out);
 
	}

	// retourne le nom du pays de clef '$key'
	// '$key' est la clef dp nt la valeur est
	// l'information dans le tableau associatif '$info'
	function getCountryName($key,$info) {
		return($info[$key][0]);

	}

	// retourne le nom de la capitale de clef '$key'
	// '$key' est la clef dp nt la valeur est
	// l'information dans le tableau associatif '$info'	
	function getCapitalName($key,$info) {

		return($info[$key][2]);

	}

	// retourne l'élément HTML IMG qui est l'image
	// du pays de clef '$key'
	// '$key' est la clef dp nt la valeur est
	// l'information dans le tableau associatif '$info'	
	function getCountryImage($key,$info) {
		$img_name = $info[$key][1];
		$country_name =getCountryName($key,$info);
		$out = "<img class='exo2-3' src='exo2-3/$img_name' alt='$country_name' title='$country_name'>";
		return($out);

	}

	// retourne l'élément HTML IMG qui est l'image
	// de la capitale de clef '$key'
	// '$key' est la clef dp nt la valeur est
	// l'information dans le tableau associatif '$info'		
	function getCapitalImage($key,$info) {

		$img_name = $info[$key][3];
		$capital_name =getCapitalName($key,$info);
		$out = "<img class='exo2-3' src='exo2-3/$img_name' alt='$capital_name' title='$capital_name'>";
		return($out);

	}	
?>
