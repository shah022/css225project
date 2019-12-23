<?php

	$drugName = filter_var(trim($_POST['drugName']), FILTER_SANITIZE_STRING);

	$mysql = new mysqli('localhost', 'root', '', 'project');
	
	$result = $mysql->query("DELETE FROM `drug` WHERE `drug`.`drugname` = '$drugName'");
	
	$mysql->close();
	
?>