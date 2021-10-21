



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>
<body>
        <h1  align="middle">  UPLOAD YOUR ASSIGNMENT </h1>








   <form action="" method="post" enctype="multipart/form-data">          

  <tr>
<td>
   <input id="pdf" type="file" name="pdf">
   </td>
    <td> <span id="pdf" > <?php echo $err_pdf;?></span> </td>
  </tr>
                                                


  <tr>
      <td colspan="2" align="right"><button type="submit" name="add_student" value="submit">ADD STUDENT</button>
        <td colspan="2" align="right"><button type="reset" name="reset" value="Rest">  RESET   </button>
      </tr>


      </form>                
           
    
</body>
</html>