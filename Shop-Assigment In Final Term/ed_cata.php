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
           $cat=getAllCategories();
           $key="";
           $key= $_GET["key"];
           $products=SearchCata($key);

           if(count($products)>0)
           {
                   foreach($products as $p)
                   {
                           echo "<p>".$p["Name"]."</p>";
                   }

           }
   ?>

          <h1> <u> <b>This is the editing page  </b> </u>  </h1 >
<table>
        <input type="text" placeholder="search......"  onkeyup="SearchCata(this)" >
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
  <script>
 function get(id){
  return doctument.getElementById(id);
 }
 function SearchCata(e)
 {
         if(e.value=="")
         { 
             get("suggestion").innerHTML="";

                
         }
    var xhr= new XMLHttpRequest();
    xhr.open("GET","ed_cata.php?key="+e.value,true);
    xhr.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            get("Suggestion").innerHTML=this.responseText;
        }

    };
   xhr.send();

 }


  </script>

</body>
</html>