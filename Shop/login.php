<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Portal</title>
  </head>
  <body>
    <?php
    include './cortroller/userinfo_control.php';
     ?>
            <h1 align="middle"> Log In Page </h1>
<form class="" action="" method="post">

<table>

   <tr>
       <td>User Name :</td>
     <td><input type="text" name="uname" value=""<?php echo $uname;?>"" placeholder="Type your usernme..................." > </td>
       <td><span> <?php echo $err_name;?> </span></td>
     </tr>
     <tr>
<td>Password:</td>
     <td><input type="passowrd" name="password" value=""<?php echo $password;?>"" placeholder="Type your passowrd..................." ></td>
  <td><span> <?php echo $err_password;?> </span></td>

   </tr>
   <tr>
    <td colspan="2" align="right"><input type="submit" name="log_in" value="Log In"></td>

 </tr>


</table>
<br>
<a href="sign_up.php"><u> Go to sign up </u>  </a>









</form>










  </body>
</html>
