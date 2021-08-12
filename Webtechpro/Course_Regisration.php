<?php
           
           require_once "Controllers/CourseControl.php";

          $reg="";
           $reg=CourseDetail();





           echo "<table border=1>";	 
           echo "<tr>";
           echo "<td>S#NO</td>";
           echo "<td>Id</td>";
           echo "<td>UserId</td>";
           echo "<td> CourseName Name</td>";
        
           echo "</tr>";
           
           
             $i = 1;
                   foreach($reg as $c){
   
                        echo "<tr>";
                       echo "<td>$i</td>";
                       echo "<td>".$c["c_id"]."</td>";
                       echo "<td>".$c["courseid"]."</td>";
                       echo "<td>".$c["coursename"]."</td>";
                      
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
    <title>Regisration</title>
</head>
<body>
    


     <h1> STUDENT REGISRATION PAGE</h1>


     <form action=" " method="post"  enctype="multipart/form-data">

     <table>

     
     <tr> 

<td>Select Your Fisrt Course</td>

<td>:

<select id="course1" name="course1">

<option disabled selected>---course---</option>
  <?php
foreach($reg as $c)
{
  
    echo "<option value='".$c["c_id"]."'>".$c["coursename"]."</option>";
   
}
?>
</select>

</td>

</tr>

<tr>
      <td>Select Your Second Course</td>

 <td>: 
     <select  name="course2" id="Course2" >
     <option disabled selected>---course---</option>
        <?php
     foreach($reg as $c)
     {
        echo "<option value='".$c["c_id"]."'>".$c["coursename"]."</option>";
    }   
    ?> 
      </select> 
           
  </td>

  </tr>


  <tr>
  <td>Select your Third Course</td>

  <td>: 
<select id="course3" name="course3">
<option disabled selected>-- Course---</option>
    <?php
  foreach($reg as $c)
  {
    echo "<option value='".$c["c_id"]."'>".$c["coursename"]."</option>";
}   
 
  ?>
  </select>
</td>
</tr>

<tr>
  <td>Select your Fourth Course</td>
  <td> :
    <select id="course4" name="course4"> 
        <option disabled selected>---course---</option>
      <?php
        foreach($reg as $c){

         echo "<option value='".$c["c_id"]."'>".$c["coursename"]."</option>";
        
        }

      ?>
    </select>
    
    </td>

    </tr>

     







  <tr>
  <td colspan="2" align="right"><button type="submit" name="reg_course" value="submit">REGISTRATION COMPLETE </button>
  <td colspan="2" align="right"><button type="reset" name="reset" value="Rest">RESET</button>


  </tr>

  </table>
    
    
    </form>


     



    
</body>
</html>