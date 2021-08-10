<?php


	include 'Controllers/studentControl.php';
	$key = $_GET["key"];
	$student = studentSearch($key);
	
	if(count($student)> 0){
		foreach($student as $p){
			echo "<a href='Montly.php?id=".$p["id"]."'>".$p["admissiondate"]."</a><br>";
		
		}
	}

?>