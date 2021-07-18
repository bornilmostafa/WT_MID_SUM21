<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log In Page</title>
</head>
<body> 
<?php
    include  "./Controllers/adminControl.php";
     ?>

     <h1 align="middle" >Admin Log In page</h1>
    <form action="" method="post" >
     <table>

     <tr>
    <td>Name :</td>
  <td><input type="text" name="name" value= "<?php echo $name;?>"  placeholder="Type your Name......" > </td>
    <td><span> <?php echo $err_name;?> </span></td>
  </tr>
  <tr>    

<tr>
    <td>User Name :</td>
  <td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Type your Usernme......" > </td>
    <td><span> <?php echo $err_uname;?> </span></td>
  </tr>
  <tr>
<td>Password:</td>
  <td><input type="passowrd" name="password" value="<?php echo $password;?>"  placeholder="Type your Passowrd......" ></td>
<td><span> <?php echo $err_password;?> </span></td>

</tr>
<tr>
 <td colspan="2" align="right"><input type="submit" name="log_in" value="Log In"></td>

</tr>


</table>
</form>

<br>


</body>
</html>