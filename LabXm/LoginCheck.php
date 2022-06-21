<?php 
	session_start();

	//print_r($_GET);  
	$Id = $_POST['Id'];
	$password = $_POST['password'];
	//echo $username;

	if($Id == null || $password == null){
		echo "null username/password";
	}else{
		$file = fopen('Registration.txt', 'r');
		
		while (!feof($file)) {
			$data=fgets($file);
			$user = explode('|', $data);
			if($username == trim($user[0]) && $password == trim($user[1])){
				$_SESSION['status'] = true;
				setcookie('status', 'true', time()+3600, '/');
				header('location: AdminHome.html');
			}
		}
		echo "invalid user";
	}?>