<?php

	// retiourne une chaîne de caractères identique
	// à '$nom' mais avec tous les caractères en
	// minuscule et avec la première lettre en majuscule
	function normalize($nom) {

		return ucfirst(strtolower($nom));
		
		
    }
    
	// lit le fichier '$student_file' et retourne un tableau
	// associatif de la forme [ ID => [ PRENOM , NOM ], ... ]
	// où ID est l'identifiant, PRENOM le prénom et
	// NOM le nom de l'étudiant
	function student_array($student_file) {
		$out=[];
		$studentTab = file($student_file);
		foreach($studentTab as $student){
			$studentInfo = explode(";",$student);
			$id = $studentInfo[0];
			$firstName = $studentInfo[1];
			$lastName = $studentInfo[2];
			$out[$id] = [$firstName,$lastName];

		}

		return $out;


		
	}
	
	// lit le fichier '$score_file' et retourne un tableau
	// associatif de la forme [ ID => [ NOTE1, NOTE2, NOTE3 ], ... ]
	// où ID est l'identifiant, et NOTE1, NOTE2 et NOTE3 les trois
	// notes obtenues par l'étudiant
	function score_array($score_file) {
		$out=[];
		$studentScoreTab = file($score_file);
		foreach($studentScoreTab as $studentScore){
			$studentTrimesters = explode(";",$studentScore);
			$id = $studentTrimesters[0];
			$note1 = $studentTrimesters[1];
			$note2 = $studentTrimesters[2];
			$note3 = $studentTrimesters[3];
			$out[$id] = [$note1,$note2,$note3];
		}

		return $out;
		
	}
	
	// retourne la moyenne des valeurs
	// contenues dans le tableau '$tabnotes'
	function average($tabnotes) {

		$average = 0;
		$n=0;
		foreach($tabnotes as $note){
			$average += intval($note);
			$n++;

		}

		return round($average/$n,2);
		
    }
    
    // retourne le TR adéquat qui contient successivement dans
	// les sept TD successifs l'identifiant, le prénom, le nom,
	// les trois notes et la moyenne de ces notes
	function student_score($id,$info,$score) {
		$firstName = normalize($info[0]);
		$lastName = normalize($info[1]);
		$note1 = $score[0];
		$note2 = $score[1];
		$note3 = $score[2];
		$average = average($score);
		return("<tr>
		<td>$id</td>
		<td>$firstName</td>
		<td>$lastName</td>
		<td>$note1</td>
		<td>$note2</td>
		<td>$note3</td>
		<td>$average</td>
		<td>
				<a href='exo6-mod-formulaire.php?id=$id'>Modifier</a>
			</td>
	</tr>");
		
    }
    
    // retourne les TR adéquats qui contiennent successivement
    // les informations des étudiants sélectionnés suivant la
    // valeur de '$name' :
    // - si '$name' est le prénom de l'étudiant, l'étudiant est sélectionné
    // - si '$name' est le nom de l'étudiant, l'étudiant est sélectionné
    // - si '$name' est la chaîne vide, l'étudiant est sélectionné
    function table_content($name,$students,$scores) {
		$name = strtolower($name);
		foreach($students as $id => $info){
			
			if($name == $info[0] || $name == $info[1] || $name == ""){
				
				echo(student_score($id,$info,$scores[$id]));
				
			}
		}
		
    }
    

	// retourne le contenu de l'élément HTML FORM
	// pour comprendre ce que cette fonction doit générer
    // regardez le code source HTML du fichier exemple fourni
    function form_content($id,$students,$scores) {
		$firstName = $students[$id][0];
		$lastName = $students[$id][1];
		$note1 = $scores[$id][0];
		$note2 = $scores[$id][1];
		$note3 = $scores[$id][2];
		$average = average($scores[$id]);
		return("<tr>
		<td>1013</td>
		<td>
			<input type='text' name='prenom' value='$firstName'>
		</td>
		<td>
			<input type='text' name='nom' value='$lastName'>
		</td>
		<td>
			<input type='text' name='score1' value='$note1'>
		</td>
		<td>
			<input type='text' name='score2' value='$note2'>
		</td>
		<td>
			<input type='text' name='score3' value='$note3'>
		</td>
		<td>$average</td>
		<td>
			<input type='submit' value='Valider'>
		</td>
		<input type='hidden' name='id' value='$id'>
	</tr>");
       
    }

    // sauve le tableau associatif '$array' dans le
	// fichier '$file' au format CSV. Le tableau est de
	// la forme [ ID => INFO ] où INFO est un tableau de
	// valeurs (associatif ou pas)
	function save_array($array, $file) {
		$out = "";
		foreach($array as $id => $info){
			$info_str = implode(";",$info);
			$out .= "$id;$info_str";

		}
		file_put_contents($file,$out);
		
	}

	// modifie le contenu du tableau '$students' en associant les
	// valeurs '$firstname' et '$lastname' aux clefs 'prenom' et 'nom'
	// pour la clef '$id'
    function update_student_array(&$students,$id,$firstname,$lastname) {
		$firstname = strtolower($firstname);
		$lastname = strtolower($lastname);
		$students[$id] = [$firstname,$lastname."\n"];
      
    }

	// modifie le contenu du tableau '$scores' en associant les
	// valeurs '$score1', '$score2' et '$score3' à la clef '$id'	
    function update_score_array(&$scores,$id,$score1,$score2,$score3) {
		$scores[$id] = [$score1,$score2,$score3."\n"];
	  
    }
    
    $STUDENT_FILE = "exo5-6/students.csv";
    $SCORE_FILE = "exo5-6/scores.csv";

?>
