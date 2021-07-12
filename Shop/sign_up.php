<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Portal</title>
  </head>
  <body>
    <?php
      include  "cortroller/userinfo_control.php";
     ?>
            <h1 align="middle"> Sign Up Page </h1>
<form class="" action="" method="post">

<h5 class="text-danger"><?php echo $err_db; ?> </h5>
<table>

   <tr>
      <td>Name : </td>
     <td><input type="text" name="name" value="<?php echo $name;?>"placeholder="Type your Name........." > </td>
     <td><span> <?php echo $err_name;?> </span></td>
     </tr>

     <tr>
  <td>User Name :</td>
  <td><input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Type User Name..........">  </td>
  <td><span> <?php echo $err_name;?> </span></td>
  </tr>

<tr>
  <td>Email :</td>
  <td> <input type="text" name="email" value="<?php echo $email;?>" placeholder="Your Email........">  </td>
  <td><span> <?php echo $err_email;?> </span></td>
</tr>

<tr>
   <td>Password :</td>
<td><input type="passowrd" name="password" value="<?php echo $password;?>"  placeholder="Type your passowrd........." ></td>
  <td><span> <?php echo $err_password;?> </span></td>

   </tr>

    <td colspan="2" align="right"><input type="submit" name="sign_up" value="Sign Up"></td>




</table>
<a href="login.php"><u>Go To Log In Page </u> </a>
</form>
  </body>
</html>
