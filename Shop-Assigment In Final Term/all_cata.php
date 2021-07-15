<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Catagory Page</title>
  </head>
  <body>

  <?php
         include "./Cortroller/cata_control.php"; 

  ?>
     <h1 align="middle"> <u>All Catagory  Page </u>  </h1>

  <form class="" action="" method="post">

    <tr>
        <td>Name:</td>
      </tr>
      <tr>
  <td><input type="text" name="name" value=""<?php echo $name;?>"" placeholder="Type  Catagory....." > </td>
          <td><span> <?php echo $err_name;?></span></td>

    </tr>
    <tr>
     <td colspan="2" align="right"><input type="submit" name="add_cata" value="Add Catagory"></td>

  </tr>

  </form>

  </body>
</html>