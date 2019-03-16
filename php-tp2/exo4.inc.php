<?php
    
    // remplit les tableaux '$day', '$month' et '$lang'
    // à partir des informations contenues dans les fichiers
    // '*.txt' contenus dans le répertoire '$folderpath'
    function fillArrays($folderpath,&$day,&$month,&$lang) {
        $files = glob("exo4/*.csv");
        $i=1;
        foreach($files as $file){
            $content = file($file);
            $lang_code = "lang$i";
            $lang[$lang_code] =  $content[0];
            $day[$lang_code] = explode(",",$content[1]);
            $month[$lang_code] = explode(",",$content[2]);
            $i++;
            
            
        }
 
    }

    function makeRadio($keyval,$name) {

		$out = "<div>";
		foreach($keyval as $key => $value){
			$out .= "<fieldset>
			<input type='radio' name='langue' value='$key'> $value
		</fieldset>";
		}
		$out .= "</div>";
		return($out);
 
    }

    // retourne une chaîne de caractères qui donne
    // la date dans la langue déterminée par le code '$langue'
    function makeDate($langue,$jour,$mois) {
		$jour_str = $jour[$langue][date("w")];
		$mois_str = $mois[$langue][date("n")-1];
		$jour_int = date("d");
		$annee = date("Y");
		return("$jour_str $jour_int $mois_str $annee");
 
    }

    $LANGUE = [];
    $JOUR = [];
    $MOIS = [];

    fillArrays("exo4",$JOUR,$MOIS,$LANGUE);
    
    
    
    
?>
