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
           $cat=getallcata();
   ?>

          <h1> <u> <b>This is the editing page  </b> </u>  </h1 >
<table>
          <?php
          $i=1;
           foreach($cat as $c){
              echo "<tr>";
              echo "<td>$i</td>";
              echo "<td>".$c["Name"]."</td>";
              echo "</tr>";
              echo '<td><a href="ed_product.php?id='.$c["id"].'" class="btn btn-success"> Edit</a></td>';
              echo  '<td><a class="btn btn-danger">Delete</a></td>';
              echo "</tr>";
              $i++;

           }
   ?>
  

  </table>

</body>
</html>