<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Teacher</title>
      </head>
      <body>
        <form class="" action="index.html" method="post">
          <fieldset>
      <table>
        <tr align="middle">
          <td><b>Id</b></td>
              <td>: <input type="text" placeholder="Your Id ...."> </td>
        </tr>
        <tr align="middle">
          <td><b> Name</b></td>
              <td>: <input type="text" placeholder="Your Name ...."> </td>
        </tr>
        <tr align="middle">
          <td><b>Email</b></td>
              <td>: <input type="text" placeholder="Your Email...."> </td>
        </tr>
        <tr align="middle">
          <td><b>Salary</b></td>
              <td>: <input type="text" placeholder="Your Salary ...."> </td>
        </tr>
        <td>Date of Birth</td>
       <td>: <select name="date"><option disabled selected>---Date---</option>
          <?php
      for($i=1; $i<=31; $i++)
      {

        echo "<option> $i </option>";


      }
      ?>
        </select>

          <select name="Month"> <option disabled selected>---Month---</option>
            <?php
             foreach($array as $p){
                 echo "<option selected>$p</option>";

             }
           ?>
          </select>
           <select name="year">
            <option disabled selected>---year---</option>
            <?php
    for($j=1920; $j<=2010; $j++)
    {
      echo "<option> $j </option>";
    }
    ?>

         </select>
       </td>
       <td><span> <?php echo $err_dating;?></span>
          <span><?php echo $err_Month;?></span>
            <span><?php echo $err_year;?> </span></td>
     </tr>
     <tr align="middle">
       <td><b>Contact Number</b></td>
     <td>: <input type="text" placeholder="Your contact number ...."> </td>
     </tr>


         <td colspan="2" align="right"><input type="submit" name="Delete" value="Submit"></td>
          <td colspan="2" align="right"><input type="Submit" name="Udate" value="Submit"></td>
          <td><a target="_blank" href="Teacher.php">Go To First Page </a></td>

       </tr>





      </table>

        </fieldset>


      </form>



      </body>
    </html>


  </body>
</html>
