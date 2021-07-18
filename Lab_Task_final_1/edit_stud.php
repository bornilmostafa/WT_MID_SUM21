<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1.0, initial-scale=1.0">
    <title>Edit Student page</title>
</head>
<body>

<?php
    include  "./Controllers/adminControl.php";
    include "./Controllers/stud_con.php";
    include "./Controllers/dep_con.php";
     $department=getAlldep();

     ?>


    <h1> <b> <u> EDIT INFORMATION PAGE  </u> </b> </h1>
    <body>
<form action="" method="post">
     <table>

<tr>
   <td>Name: </td>
  <td><input type="text" name="name" value="<?php echo $_POST["name"];?>"> </td>
 
  </tr>

<tr>
<td>DATE OF BIRTH :</td>
<td><input type="text" name="dob" value="<?php echo $_POST["dob"];?>"> </td>


</tr>

<tr>
<td>Credit :</td>
<td><input type="text" name="credit" value="<?php echo $_POST["credit"] ;?>" ></td>


</tr>


<tr>
<td>CGPA :</td>
<td><input type="text" name="cgpa" value="<?php echo $_POST["cgpa"];?>"  placeholder="Type cgpa........." ></td>


</tr>
<tr>
<td>Department Id :</td>
<td>
			<select name="c_id" class="form-control">
				<option selected disabled>Choose</option>
				<?php
					foreach($department as $c){
						echo "<option value='".$c["c_id"]."'>".$c["name"]."</option>";
					}
				?>
			</select>
            </td>		
</tr>


 <td colspan="2" align="right"><input type="submit" name="edit_stu" value="EDIT INOFMATION OF  STUDENT"></td>
</table>				
</div>
</body>
</html>