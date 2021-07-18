<?php
  include "Model/db_config.php";

$name="";
$err_name="";
$uname="";
$err_uname="";
$email="";
$err_email="";
$password="";
$err_password="";
$err_db="";
$hasError=false;


if(isset($_POST["sign_up"])){

//========================name=========================
  if(empty($_POST["name"])){
    $hasError = true;
    $err_name="Name Required";
  }
  else if(strlen($_POST["name"]) <= 2){
    $hasError = true;
    $err_name="Name must contain >2 character";
  }
  else{
  htmlspecialchars($name = $_POST["name"]);
  }
//======================username========================
if(empty($_POST["uname"])){
  $hasError = true;
  $err_uname="User Name Required";
}
else{
htmlspecialchars($uname = $_POST["uname"]);
}



//========================email===========================
if(empty($_POST["email"])){
$hasError = true;
$err_email="Email Required";
}
  else if(strpos($_POST["email"], '@') == false || strpos($_POST["email"], '.') == false){
$hasError = true;
$err_email="Email must contain @ character and . character";
  }
  else{
      $email=$_POST["email"];
  }
//===========================passowrd==========================
if(empty($_POST["password"])){
  $hasError = true;
  $err_password="Password Required";
}
else if(strlen($_POST["password"]) <= 7){
  $hasError = true;
  $err_password="Password must contain at least 8 character";   
}
else{
    $password = $_POST["password"];
  }
  
//===============================================================================================
if(!$hasError)
{
  $rs=insertUser($name,$uname,$email,$password);
  if($rs==true)
  {
    header("Location:login.php");
  }
$err_db=$rs;
}
}


else if(isset($_POST["log_in"])){
//======================username========================
  if(empty($_POST["uname"])){
    $hasError = true;
    $err_uname="User Name Required";
  }
  else{
  htmlspecialchars($uname = $_POST["uname"]);
  }
  if(empty($_POST["password"])){
    $hasError = true;
    $err_password="Password Required";
  }
  else{
$password = $_POST["password"];

  }

if(!$hasError)
{
  if(authenticUser($uname,$password))
  {
    header("Location:all_cata.php");

  }
 $err_db="Invalid User Name and Password";
}

}
function insertUser($name,$uname,$email,$password){

  $query="insert into signup values (NULL,'$name','$uname','$email','$password')";
  return execute($query);
}
function authenticUser($uname,$password)
{
$query="select * from signup where username='$uname' and password='$password'";
return get($query);

}

 ?>