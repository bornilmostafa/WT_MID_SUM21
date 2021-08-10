<?php
	require_once "Controllers/studentControl.php";

	$ad=join_year($admission_year);

	echo $_COOKIE["admission_month"];

	//echo $admission_year;

	//print_r($ad);


	//=========== Information pritning================================

	
		
      echo "<table border=1>";	 
      echo "<tr>";
      echo "<td>S#NO</td>";
      echo "<td>Id</td>";
      echo "<td>UserId</td>";
      echo "<td>Name</td>";
      echo "<td>Email</td>";
	  echo "<td>ADMISSION DATE</td>";
      echo "</tr>";
      
      
        $i = 1;
              foreach($ad as $c){

                   echo "<tr>";
                  echo "<td>$i</td>";
                  echo "<td>".$c["id"]."</td>";
                  echo "<td>".$c["userid"]."</td>";
                  echo "<td>".$c["name"]."</td>";
                  echo "<td>".$c["email"]."</td>";
				  echo "<td>".$c["admissiondate"]."</td>";
                  
                  
                   echo "</tr>";
          
                          $i++;
              

              
                      }
                      echo"</table>";




?>