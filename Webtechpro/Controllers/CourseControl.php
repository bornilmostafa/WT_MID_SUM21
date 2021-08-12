<?php

require_once "Models/db_config.php";

$course1="";
$err_course1="";
$course2="";
$err_Course2="";
$course3="";
$err_course3="";
$course4="";
$err_course4="";

$hasError=false;



if( isset($_POST["reg_course"]))

{
      $course1=$_POST["course1"];
      $course2=$_POST["course2"];
      $course3=$_POST["course3"];
      $course4=$_POST["course4"];



    $rs =Regisration($course1,$course2,$course3,$course4);
		if($rs === true){
			header("Location:Success_reg.php");
		}
		$err_db = $rs;


        }


  

















//==================================================== Course Register In database================================


function Regisration($course1,$course2,$course3,$course4)

{
    $query = "insert into register_stu values(Null,'$course1','$course2','$course3','$course4')";
    return execute($query);



}


//================================================Registration Details Print============================================
function regDetail()

{
    $query = "SELECT id,S1.coursename as course1, S2.coursename as course2, S3.coursename as course3, S4.coursename as course4
    FROM register_stu U
    JOIN course S1 ON (S1.c_id = U.course1)
    JOIN course S2 ON (S2.c_id = U.course2)
    JOIN course S3 ON (S3.c_id = U.course3)
     JOIN course S4 ON (S4.c_id = U.course4)";
   
    $rs = get($query);
    return $rs;
  

}





//================================================Course Details Print============================================
function CourseDetail()

{
    $query = "select  * from course";
   
    $rs = get($query);
    return $rs;
  

}





















?>