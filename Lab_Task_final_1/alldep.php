html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

</head>
<body>
<?php
    include  "./Controllers/adminControl.php";
    include  "./Controllers/dep_con.php";

    $department = getAlldep();
     ?>

     <h1 align="middle" > Student Edit Inforamtion Page </h1>

     <table class="table table-striped">
		<thead>
			<th>Sl#</th>
             <th>id </th>
			 <th>Department Name</th>
			
			
		</thead>
		<tbody>
			<?php
				$i = 1;
				foreach($department as $s){
					echo "<tr>";
                        echo "<td>$i</td>";
						echo "<td>".$s["name"]."</td>";
						echo '<td><a href="edit_dep.php?id='.$s["dep_id"].'" class="btn btn-success">Edit</a></td>';
						echo '<td><a class="btn btn-danger">Delete</td>';
					echo "</tr>";
					$i++;
						
				}
			?>
			
		</tbody>
	</table>

 <










     <a href="dep.php"> Go To Department Page  </a>
    
</body>
</html>