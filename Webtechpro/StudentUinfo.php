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


  $ad_date="";
  $E_student=Enrollinfo($ad_date);

  ?>
  <input type="text" placeholder="Search...."  onkeyup="searchStudent(this)" >
  <div id= "suggesstion"></div>
  <br>
  <br>
  <br>
  <div> <h3> Search For Date   </h3> </div>

  <input type="text" placeholder="search Dates by name...."  onkeyup="DateStudent(this)" >
  <div id= "suggesstion2"></div>
  <br>
  <br>
  <br>

    <h1>  ALL STUDENT UPADATED INFORMATION     </h1>


  <?php
  
		
      echo "<table border=1>";	 
      echo "<tr>";
      echo "<td>S#NO</td>";
      echo "<td>Id</td>";
      echo "<td>UserId</td>";
      echo "<td>Name</td>";
      echo "<td>Email</td>";
      echo "<td>Date Of Birth</td>";
      echo "<td>Blood Group</td>";
      echo "<td>admissiondate</td>";
      echo "<td>graduationdate</td>";
      echo "<td>religion</td>";
      echo "<td>Nationality</td>"; 
      echo "<td>Image</td>"; 
      echo  "<td>Operations</td>";
      echo  "<td>DATE OF STUDENT</td>";

      echo "</tr>";
      
      
        $i = 1;
              foreach($E_student as $c){

                   echo "<tr>";
                  echo "<td>$i</td>";
                  echo "<td>".$c["id"]."</td>";
                  echo "<td>".$c["userid"]."</td>";
                  echo "<td>".$c["name"]."</td>";
                  echo "<td>".$c["email"]."</td>";
                  echo "<td>".$c["birthday"]."</td>";
                  echo "<td>".$c["bloodgroup"]."</td>";  
                  echo "<td>".$c["admissiondate"]."</td>";  
                  echo "<td>".$c["graduationdate"]."</td>"; 
                  echo "<td>".$c["religion"]."</td>"; 
                  echo "<td>".$c["nationality"]."</td>"; 
                  echo "<td><img src='image/student/".$c["img"]."' width='100px' height='100px'></td>";   
                  echo '<td><a href="StudentUpdate.php?id= '.$c["id"].'">Update</a></td>';  
                  echo '<td><a href="Practice.php?id= '.$c["id"].'">ALL DATES UPDATE</a></td>';  
                   echo "</tr>";
          
                          $i++;
              

              
                      }
                      echo"</table>";
                     
                   //echo   '<td><a href="StudentAdmitted.php?id= '.$c["userid"].'"  onclick="return Studentdelete()">Delete</a></td>';         
                  // echo '<td colspan="2" align="right"><button type="submit" name="up_student" value="submit">Delete</button> </td>';
                  
      
          ?>
                   
   

          <br>
          <br>
          <br>
          <br>



     <a href="student.php">Go To Student Page</a> 


</form>

<script src="studentSearch.js"></script>

<script src="DateSearch.js"></script>


    
</body>
</html>