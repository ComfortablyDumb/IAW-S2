<?php

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
	$INFO = [];
	$data = file("exo2-3/data.csv");
	for($i=1;$i<=5;$i++){
		$codepays = "pays$i";
		$INFO[$codepays] = explode(",",$data[$i-1]);
		
	}




	
	//// ici on doit remplir le tableau $INFO à partir des données contenues dans le fichier 'exo2-3/data.csv'

	
?>
