<?php
	$search = $_POST['search'];
	$mysql= new mysqli('localhost', 'root', '', 'project');
	  
	 
	 
	$result=$mysql->query("SELECT * FROM `drug` WHERE UPPER(`drug`.`drugname`) LIKE UPPER('%$search%')");
	  while($row = mysqli_fetch_array($result)){
	    $drugname=$row['drugname'];
	    $cost=$row['cost'];
	    $id=$row['id'];
	    
	 
	    echo "<span class='drugName'>$drugname</span><span class='drugCost'>$cost тг</span> <button class='addToBasket'>Купить</button></br>";
	    }
	  $mysql->close();
?>