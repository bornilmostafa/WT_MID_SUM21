<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPADTE</title>
</head>
<body>
    <h1>UPDATE STUDENT  USER ID</h1>

  <form action="" method="post" enctype="multipart/form-data" >
  <?php
  
  require_once "Models/db_config.php";
  require_once "Controllers/studentControl.php";
  
 
 

  ?>
  <input type="text" placeholder="Search...." onkeyup="enroll_student(this)">
  <div id="suggestion1"></div>
  <?php
  
		
        echo "<table border=1>";	 
      echo "<tr>";
      echo "<td>S#NO</td>";
      echo "<td>Id</td>";
      echo "<td>UserId</td>";
      echo "<td>Name</td>";
      echo "<td>Email</td>";
      echo "<td>admissiondate</td>";
     
      echo "</tr>";
      
      
        $i = 1;
              foreach($E_student as $c){

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

   

          <br>
          <br>
          <br>
          <br>



     <a href="student.php">Go To Student Page</a> 


