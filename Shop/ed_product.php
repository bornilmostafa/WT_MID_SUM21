<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editing page</title>
</head>
<body>
   <?php
           include "./Cortroller/cata_control.php"; 
           $id=$_GET["id"];
           echo $id;
          $c = getcata($id);
   ?>

          <h1> <u> <b>This is the editing page  </b> </u>  </h1 >

          <tr>
        <td>Name:</td>
  <td><input type="text" value= "<?php echo $c["Name"];?>"  placeholder="Type  Catagory....." > </td>
        

    </tr>
    <tr>
     <td colspan="2" align="right"><input type="submit" name="btn btn-success" value="Edit Catagory"></td>

  </tr>   


  
  
 



</body>
</html>