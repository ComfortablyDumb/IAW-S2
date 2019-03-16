<?php
	session_start();

	function check_logs($login_user,$psw_user,$array){
		foreach($array as $login => $psw){
			$psw = $psw;
			
			if($login_user == $login && $psw_user == $psw){
				return true;
			}
			
			
			
		}
		return false;
	}

	function build_array($array){
		$out = array();
		foreach($array as $element){
			$logs = explode(",",$element);
			$out[$logs[0]] = $logs[1];
		}
		return $out;
	}
	
	$log = $_POST["login"];
	$psw = md5($_POST["password"]);
	$passwords_array = build_array(file("/home/enzo/adw/php-tp3/exo4/users.csv",FILE_IGNORE_NEW_LINES));
	

	$_SESSION["login"] = $log;
	$_SESSION["password"] = $psw;
	
	
	
	
	if(!check_logs($log,$psw,$passwords_array)){
		
		$_SESSION = array();
		session_destroy();
		session_regenerate_id(TRUE);
		
		header("Location: http://localhost/adw/php-tp3/exo4/signin.php?badlogin=true");
		exit();
		
		
		
		

	}
	else{
		if(isset($_GET["goto"])){
			$goto = $_GET["goto"];
		}
		else{
			$goto="page1";
		}
		header("Location: http://localhost/adw/php-tp3/exo4/$goto.php");
		exit();
		
	}
	
	

?>
