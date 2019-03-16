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
    
  $STUDENT_FILE = "exo5-6/students.csv";
	$SCORE_FILE = "exo5-6/scores.csv";
	

?>
