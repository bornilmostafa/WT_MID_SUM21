<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

</head>
<body>
<?php
    include  "./Controllers/adminControl.php";
    include "./Controllers/stud_con.php";
     ?>

     <h1 align="middle" > Dash Board Page </h1>
<form action="" method="post">
     <table>

<tr>
   <td>Name: </td>
  <td><input type="text" name="name" value="<?php echo $name;?>"placeholder="Type Name........." > </td>
  <td><span> <?php echo $err_name;?> </span></td>
  </tr>

<tr>
<td>DATE OF BIRTH :</td>
<td><input type="text" name="dob" value="<?php echo $dob;?>" placeholder="Type User Name..........">  </td>
<td><span> <?php echo $err_dob;?> </span></td>

</tr>

<tr>
<td>Credit :</td>
<td><input type="text" name="credit" value="<?php echo $credit;?>"  placeholder="Type credit........." ></td>
<td><span> <?php echo $err_credit;?> </span></td>

</tr>


<tr>
<td>CGPA :</td>
<td><input type="text" name="cgpa" value="<?php echo $cgpa;?>"  placeholder="Type cgpa........." ></td>
<td><span> <?php echo $err_cgpa;?> </span></td>

</tr>
<tr>
<td>Department Id :</td>
<td><input type="text" name="dep_id" value="<?php echo $depId;?>"  placeholder="Type dpartment id........." ></td>
<td><span> <?php echo $err_depId;?> </span></td>

</tr>


 <td colspan="2" align="right"><input type="submit" name="add_stu" value="ADD STUDENT"></td>

 </form>








     <a href="dep.php"> Go To Department Page  </a>
    
</body>
</html>