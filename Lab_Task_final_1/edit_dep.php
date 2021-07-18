html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

</head>
		
        <?php 
	include 'Controllers/dep_con.php';
	$id = $_GET["dep_id"];
	$c = getdep($id);
	
?>
<!--edit category starts -->
<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="hidden" name="id" value="<?php echo $c["dep_id"];?>">
			<input type="text" name="name" value="<?php echo $c["name"];?>" class="form-control">
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="edit_dep" class="btn btn-success" value="Name Correction" class="form-control">
		</div>
	</form>
</div>


 










     <a href="dep.php"> Go To Department Page  </a>
    
</body>
</html>