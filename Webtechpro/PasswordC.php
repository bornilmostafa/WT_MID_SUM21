<?php
        require_once "Controllers/Student_password.php";  
        
      $pssC=authenticationfor_student_passwordchange($Opassword);
?>


<script>

     var hasError=false;
      function get(id)
      {
        return document.getElementById(id);
      }
     
      function validate1()
     {
       refresh();

//===============================================================================
 if(get("Opassword").value=="")
 {
   hasError = true;
   get("err_Opassword").innerHTML="*old password required";
 }


 if(get("Npassword").value=="")
 {
   hasError = true;
   get("err_Npassword").innerHTML="*New password  required";
 }
 if(get("Cpassword").value=="")
 {
   hasError = true;
   get("err_Cpassword").innerHTML="*Confirm your password";

 }
  
 return !hasError;

}


      function refresh()
      {
        hasError=false;

      get("err_Opassword").innerHTML="";
      get("err_Npassword").innerHTML="";
      get("err_Cpassword").innerHTML="";
      }
       

</script>


<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Password Change</title>
  </head>
  <body>
<h1 align="middle"><b>PASSWORD CHANGE</b> </h1>

   <form class="" onsubmit="return validate1()" action="" method="post">
     <fieldset>
       <table>
         <tr>
           <td>Old Password</td>
           	<td>: <input type="text" id="Opassword" name="Opassword" value="<?php echo $Opassword;?>" placeholder="Your Old Password ...."> </td>
            <td><span id="err_Opasswrod" ><?php echo $err_Opassword ?></span></td>

         </tr>
         <tr>
           <td>New Password</td>
           	<td>: <input type="text" id="Npassword" Passw name="Npassword" value="<?php echo $Npassword;?>" placeholder="Your New Password ...."> </td>
            <td><span id="err_Npassword" ><?php echo $err_Npassword ?></span></td>

         </tr>
         <tr>
           <td>Confirm New Password</td>
             <td>: <input type="text" id="Cpassword" name="Cpassword" value="<?php echo $Cpassword;?>" placeholder="Your New Password ...."> </td>
             <td> <span id="err_Cpassword" ><?php echo $err_Cpassword?></span>
             </td>

         </tr>
<tr>
  <td><input type="submit" name="password_submit" value="submit"></td>
</tr>
       </table>
     </fieldset>

   </form>
 <h2>  <b>Contact Admin</b> </h2>

  </body>
</html>
