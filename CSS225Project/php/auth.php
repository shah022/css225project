<?php
	$email = filter_var(trim($_POST['useremail']), FILTER_SANITIZE_EMAIL);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

	$pass = md5($pass);

	$mysql = new mysqli('localhost', 'root', '', 'project');
	
	$result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");
	$user = $result->fetch_assoc();
	if(count($user) ==0){
		echo "Такой пользователь не найден";
		exit();
	}

	setcookie('user', $user['name'], time() + 3600, "/");
	setcookie('surname', $user['surname'], time() + 3600, "/");
	setcookie('email', $user['email'], time() + 3600, "/");





	$mysql->close();
	header('Location: ../Main.html');
?>