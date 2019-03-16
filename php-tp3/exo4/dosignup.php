<?php
    // à compléter
    // Ce script vérifie les paramètres envoyés par l'utilisateur
    // et, si ces paramètres sont corrects, réalise le signup puis
    // redirige l'utilisateur vers le script "signin.php",
    // sinon, redirige directement l'utilisateur vers le script
    // "signin.php" avec le bon message d'erreur en paramètre
    
    function build_array($array){
		$out = array();
		foreach($array as $element){
			$logs = explode(",",$element);
			$out[$logs[0]] = $logs[1];
		}
		return $out;
	}

    function check_logs_signup($login,$psw1,$psw2,$array){
        if(!ctype_alpha($login) || !ctype_lower($login)){
            // vérifie si le login ne comporte que des lettres minuscules
            return 1;
        }
        else if(array_key_exists($login,$array)){
            // vérifie si le login n'est pas déjà pas utilisé
            return 2;
        }

        else if(strlen($psw1)<4){
            // vérifie si le password fait au moins 4 caractères
            return 3;
            
        }

        else if($psw1!=$psw2){
            // vérfie si le deux mots de passe correspondent
            return 4;
        }

        else{
            // On renvoie 0 si tout va bien
            return 0;

        }

    }

    $login = $_POST["login"];
    $psw1 = $_POST["password1"];
    $psw2 = $_POST["password2"];
    $array = build_array(file("/home/enzo/adw/php-tp3/exo4/users.csv",FILE_IGNORE_NEW_LINES));

    if(check_logs_signup($login,$psw1,$psw2,$array)==0){
        $hash = md5($psw1);
        file_put_contents("/home/enzo/adw/php-tp3/exo4/users.csv","\n$login,$hash",FILE_APPEND);
        header("Location: http://localhost/adw/php-tp3/exo4/signin.php");
    }
    else{
        $error = check_logs_signup($login,$psw1,$psw2,$array);
        header("Location: http://localhost/adw/php-tp3/exo4/signup.php?badsignup=$error");

    }

    

?>
