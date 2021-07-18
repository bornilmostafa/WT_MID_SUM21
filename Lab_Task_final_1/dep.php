<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
include  "./Controllers/dep_con.php";
?>

    <h1 align="middle"> Departmnet Insertion </h1>
<form action=""method="post">
  <tr>
<td>Department Name :</td>
<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Type Department Name..........">  </td>
<td><span> <?php echo $err_name;?> </span></td>
</tr>

<tr>
  <br>
 <td colspan="2" align="right"><input type="submit" name="add_in" value=" Open New Department"></td>

</tr>



</form>
  
    
</body>
</html>