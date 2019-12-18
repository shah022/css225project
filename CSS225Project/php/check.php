
<?php
	$surname = filter_var(trim($_POST['usersurname']), FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['useremail']), FILTER_SANITIZE_EMAIL);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
	$repass = filter_var(trim($_POST['Repass']), FILTER_SANITIZE_STRING);

	if(mb_strlen($surname)<3 || mb_strlen($surname) > 50){
		echo "Недопустимая длина фамилии (от 3 до 50)";
		exit();
	} else if(mb_strlen($name)<3 || mb_strlen($name) > 50){
		echo "Недопустимая длина имени (от 3 до 50)";
		exit();
	} else if(mb_strlen($email)<5 || mb_strlen($email) > 50){
		echo "Недопустимая длина email (от 5 до 50)";
		exit();
	} else if(mb_strlen($pass)<8 || mb_strlen($pass) > 50){
		echo "Недопустимая длина имени (от 8 до 50)";
		exit();
	} else if($pass !== $repass){
		echo "Пороли не совпадают";
		exit();
	}



	$pass = md5($pass);

	$mysql = new mysqli('localhost', 'root', '', 'project');
	$mysql->query("INSERT INTO `users` (`surname`, `name`, `email`, `pass`) VALUES('$surname', '$name', '$email', '$pass')");

	$mysql->close();
	header('Location: ../SignIn.html');
?>