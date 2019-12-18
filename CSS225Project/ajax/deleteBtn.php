<?php
	$id = filter_var(trim($_POST['id']), FILTER_SANITIZE_NUMBER_INT);
	

	

	$mysql = new mysqli('localhost', 'root', '', 'project');
	
	$result = $mysql->query("DELETE FROM `drug` WHERE `drug`.`id` = '$id'");
	


	$mysql->close();
	
?>