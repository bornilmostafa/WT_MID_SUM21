
<?php


require_once "Controllers/CourseControl.php";
 
$comp="";
 $comp=regDetail();




echo "<table border=1>";	 
echo "<tr>";
echo "<td>S#NO</td>";
echo "<td>Id</td>";
echo "<td>Couser1</td>";
echo "<td>Course2</td>";
echo "<td> Course3</td>";
echo "<td> Course4</td>";

echo "</tr>";


  $i = 1;
        foreach($comp as $c){

             echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>".$c["id"]."</td>";
            echo "<td>".$c["course1"]."</td>";
            echo "<td>".$c["course2"]."</td>";
            echo "<td>".$c["course3"]."</td>";
            echo "<td>".$c["course4"]."</td>";
           
             echo "</tr>";
    
                    $i++;
        

        
                }
                echo"</table>";





?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration SuccessFull</title>


</head>
<body>


      <h1>  SuccessFul registration  </h1>




      <a href="Course_Regisration.php"> Previous Page </a>

      
</body>
</html>