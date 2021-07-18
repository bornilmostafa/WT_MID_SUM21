<?php
  include "Models/db_config.php";

$name="";
$err_name="";
$uname="";
$err_uname="";
$password="";
$err_password="";
$err_db="";
$hasError=false;

 if(isset($_POST["log_in"])){
//======================username========================
  if(empty($_POST["username"])){
    $hasError = true;
    $err_uname="User Name Required";
  }
  else{
  htmlspecialchars($uname = $_POST["username"]);
  }

  //===================password=================
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
    header("Location:Dashboard.php");

  }
 $err_db="Invalid User Name and Password";
}

}
function authenticUser($uname,$password)
{
$query="select * from admin where username='$uname' and password='$password'";
return get($query);

}

?>