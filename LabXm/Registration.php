<?php
session_start();
$Name = $_POST['Name'];
$Id = $_POST['Id'];
$password = $_POST['password'];
$cPassword = $_POST['cPassword'];

if($Name ==null||$Id==null||$password==null||$cPassword==null )
{
	echo "Enter data properly";
}
else {
	$user = $Id."|".$password."|".$cPassword."|".$Name."\r\n";
		$file = fopen('Registration.txt', 'a');
		fwrite($file, $user);
		header('location: Registration.html'); 
		
		if($SignUp == 'Sign up'){
			header('location: Sign Up.html');
		}else{
			header('location: login.html');
		}
		
}
?>