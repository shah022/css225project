
<?php
	$name = filter_var(trim($_POST['AddDrugName']), FILTER_SANITIZE_STRING);
	$cost = filter_var(trim($_POST['AddDrugCost']), FILTER_SANITIZE_NUMBER_INT);

	if(mb_strlen($name)==0){
		echo "Напишите название лекарства";
		exit();
	} 




	$mysql = new mysqli('localhost', 'root', '', 'project');
	$mysql->query("INSERT INTO `drug` (`drugname`, `cost`) VALUES('$name', '$cost')");

	$mysql->close();
	header('Location: ../Admin.html');
?>