
<?php
	$drugname = filter_var(trim($_POST['DeleteDrugName']), FILTER_SANITIZE_STRING);
	

	if(mb_strlen($drugname)==0){
		echo "Напишите название лекарства";
		exit();
	} 




	$mysql = new mysqli('localhost', 'root', '', 'project');
	$mysql->query("DELETE FROM `drug` WHERE `drug`.`drugname` = '$drugname'");

	$mysql->close();
	header('Location: ../Admin.html');
?>