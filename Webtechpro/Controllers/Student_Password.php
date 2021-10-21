<?php

require_once "Models/db_config.php";


$__RequestVerificationToken= $_COOKIE['__RequestVerificationToken'];
  
   $Opassword="";
   $err_Opassword="";

   $Npassword="";
   $err_Npassword="";

   $Cpassword="";
   $err_Cpassword="";

   $hasError=false;

 //===========================old Password===========================================

if(isset($_POST["password_submit"])){

  if(empty($_POST["Opassword"])){
    $hasError = true;
    $err_Opassword="Old Password Required";
  }

  else
  {
    htmlspecialchars($Opassword=$_POST["Opassword"]);
  }


//=========================================================================New Password================================		
  if(empty($_POST["Npassword"])){
    $hasError = true;
    $err_Npassword="New Password Required";
  }
  else if(strlen($_POST["Npassword"]) <= 7){
    $hasError = true;
    $err_Npassword="New Password must contain at least 8 character";   
  }
  else
  {
    htmlspecialchars($Npassword=$_POST["Npassword"]);
  }

  //========================================================Confirm Password======================================================

  if(empty($_POST["Cpassword"])){
    $hasError = true;
    $err_Cpassword="confirm Password Required";
  }
  else if(strlen($_POST["Cpassword"]) <= 7){
    $hasError = true;
    $err_Cpassword="confirm Password must contain at least 8 character";   
  }
  else if(($_POST["Cpassword"]) != ($_POST["Npassword"])){
    $hasError = true;
    $err_Cpassword="confirm Password and New password doesn't match"; 

  }
  else
  {

    htmlspecialchars($Cpassword=$_POST["Cpassword"]);
  }


  


 if(!$hasError){

  $data = authenticationfor_student_passwordchange();
   if($data>0)

   {

         updateStudentpassword($Npassword);
         echo "Password Sucessfully Change";

   }
   else{

     echo "Password has a problem";
   }
      

   }

}


function authenticationfor_student_passwordchange(){
  global $__RequestVerificationToken;
  global $Opassword;
  $query = "select * from users where id = '$__RequestVerificationToken' and pass = '$Opassword'";
  $data = get($query);
  return $data;
}

function updateStudentpassword($Npassword){
  global $__RequestVerificationToken;
  $query = "update users set pass='$Npassword' where id=$__RequestVerificationToken";
  return execute($query);
}



  ?>