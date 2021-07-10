<?php
 $uname="";
 $err_uname="";
 $pass="";
 $unme="";
 $hasError=false;
$users=array("Bornil"=>"123","XYZ"=>"345");

if($_SERVER["REQUEST METHOD"]=="POST"){
  if(empty($_POST["Uname"])){
			$hasError = true;
			$err_username="Username Required";
		}
		}
		else{
			$username = $_POST["Uname"];
		}
    if(empty($_POST["pass"])){
        $hasError = true;
        $err_pass="Password Required";
      }

      else{
        $pass = $_POST["pass"];
      }

if(!hassError){

  foreach ($users as $u => $p) {
    if($username==$u && $pass==$p){
      setcookie("logedUser",$uname,time()+300,"/");
      $_COOKIE["logedUser"]=$uname;
      header("Location:dash.php");
    }
    else{echo "Invalid User";}
  }
}

}

 ?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log In Page</title>
  </head>
  <body>
            <h1 align="middle"><b>Welcome Log In Page</b> </h1>

<form class="" action="" method="post">
  <tr>
    <td>User Name: </td>
  <td><input type="text" name="Uname" value=""></td>
  </tr>

  <tr>
    <td>Password: </td>
  <td><input type="text" name="pass" value=""></td>
  </tr>


</form>



  </body>
</html>
