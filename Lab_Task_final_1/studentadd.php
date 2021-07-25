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
    include "./Controllers/dep_con.php";  
    include  "./Controllers/stud_con.php";

    $student = getStudents();
     ?>

     <h1 align="middle" > Student Edit Inforamtion Page </h1>

     <table class="table table-striped">
		<thead>
			<th>Sl#</th>
			 <th> Name</th>
			 <th>DOB</th>
			 <th>Credit</th>
			 <th> CGPA</th>
			 <th>dep Name</th>
			
			
		</thead>
		<tbody>
			<?php
				$i = 1;
				foreach($student as $s){
					echo "<tr>";
                           echo "<td>$i</td>";
						echo "<td>".$s["Name"]."</td>";
						echo "<td>".$s["Dob"]."</p>";
						echo "<td>".$s["Credit"]."</p>";
						echo "<td>".$s["Cgpa"]."</p>";
						echo "<td>".$s["c_name"]."</p>";
						echo '<td><a href="edit_stud.php?id='.$s["id"].'" class="btn btn-success">Edit</a></td>';
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