<?php
$mysql= new mysqli('localhost', 'root', '', 'project');
  
 
 
$result=$mysql->query("SELECT * FROM `drug`");
  while($row = mysqli_fetch_array($result)){
    $drugname=$row['drugname'];
    $cost=$row['cost'];
    $id=$row['id'];
    
 
    echo "<span class='drugName' id='drugName'>$drugname</span><span class='drugCost' id='drugCost'>$cost тенге</span></br>";
    }
  $mysql->close();
?>