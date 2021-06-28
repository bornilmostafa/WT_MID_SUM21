<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>STUDENT UNENRTOLL PAGE</title>
  </head>
  <body>
    <h1> <b> Student Result  Unenroll Page  </b> </h1>
    <?php
     $resultid="";
     $err_rsult="";
     $enrollid="";
     $err_enrollid="";
     $result="";
     $err_result="";

    ?>
        <form class="" action="index.html" method="post">
      <fieldset>
      <table>
                <tr>
                  <td align="left">Result Id</td>
                      <td>: <input type="text" placeholder="Result ID ...."> </td>
                </tr>
                <tr>
                  <td align="left">Student Enrollment id</td>
                      <td>: <input type="text" placeholder="Enroll ...."> </td>
                </tr>
                <tr>
                  <td align="left">Grade</td>
                      <td>: <input type="text" placeholder="Grade...."> </td>
                </tr>


         <td colspan="2" align="right"><input type="submit" name="Delete" value="UPDATE"></td>
          <td colspan="2" align="right"><input type="Submit" name="Udate" value="DELETE"></td>
          <td> <a href="Studentenroll.php">Go To First Page </a></td>

       </tr>

      </table>

        </fieldset>


      </form>



      </body>
    </html>
