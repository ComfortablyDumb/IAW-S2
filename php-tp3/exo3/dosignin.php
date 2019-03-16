<?php
	session_start();

	function check_logs($login_user,$psw_user,$array){
		// Cette fonction parcourt un tableau de la forme [login]=>password
		// et vérifie si au moins une ligne correspond au login et au password donné
		foreach($array as $login => $psw){
			$psw = $psw;
			
			if($login_user == $login && $psw_user == $psw){
				return true;
			}
			
			
			
		}
		return false;
	}

	function build_array($array){
		// Cette fonction transforme un tableau de la forme [i]=>"element1,element 2"
		// en un tableau de la forme [element1]=>"element2"
		$out = array();
		foreach($array as $element){
			$logs = explode(",",$element);
			$out[$logs[0]] = $logs[1];
		}
		return $out;
	}
	
	$log = $_POST["login"];
	$psw = md5($_POST["password"]);
	$passwords_array = build_array(file("/home/enzo/adw/php-tp3/exo3/users.csv",FILE_IGNORE_NEW_LINES));
	

	$_SESSION["login"] = $log;
	$_SESSION["password"] = $psw;
	
	
	
	
	if(!check_logs($log,$psw,$passwords_array)){
		
		$_SESSION = array();
		session_destroy();
		session_regenerate_id(TRUE);
		
		header("Location: http://localhost/adw/php-tp3/exo3/signin.php?badlogin=true");
		exit();
		
		
		
		

	}
	else{
		if(isset($_GET["goto"])){
			$goto = $_GET["goto"];
		}
		else{
			$goto="page1";
		}
		header("Location: http://localhost/adw/php-tp3/exo3/$goto.php");
		exit();
		
	}
	
	

?>
