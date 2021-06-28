<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1 align="middle" > <b>PASSWORD CHANGE</b> </h1>

<?php
   $Opassword="";
   $Npassword=""; ?>

   <form class="" action="index.html" method="post">
     <fieldset>
       <table>
         <tr>
           <td>Old Password</td>
           	<td>: <input type="password" name="Opassword" value="<?php echo $Opassword;?>" placeholder="Your Old Password ...."> </td>

         </tr>
         <tr>
           <td>Old Password</td>
           	<td>: <input type="password" name="Npassword" value="<?php echo $Npassword;?>" placeholder="Your New Password ...."> </td>

         </tr>
<tr>
  <td><input type="submit" name="submit" value="Change"></td>
</tr>
<tr>
 <td>   <a href="Gradereport.php"> Grade Rreport Page </a></td> 
</tr>

       </table>
     </fieldset>

   </form>


  </body>
</html>
