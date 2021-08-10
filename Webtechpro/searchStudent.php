<?php


	include 'Controllers/studentControl.php';
	$key = $_GET["key"];
	$student = studentSearch($key);
	
	if(count($student)> 0){
		foreach($student as $p){
			echo "<a href='studentUpdate.php?id=".$p["id"]."'>".$p["name"]."</a><br>";
		
		}
	}

?>