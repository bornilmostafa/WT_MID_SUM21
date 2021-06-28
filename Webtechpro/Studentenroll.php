    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Enroll Page</title>
      </head>
      <body>

        <!DOCTYPE html>
        <html lang="en" dir="ltr">
          <head>
            <meta charset="utf-8">
            <title>Student result enroll</title>
          </head>
          <body>
              <h1> <b> Student Result Enroll </b> </h1>

            <?php
             $resultid="";
             $err_rsultid="";
             $subject="";
             $err_subject="";
             $teacher="";
             $err_teacher="";
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
          <td align="left">Course Name</td>
              <td>: <input type="text" placeholder="Result ID ...."> </td>
        </tr>
        <tr>
          <td align="left">Teacher Name</td>
              <td>: <input type="text" placeholder="Teacher Name ...."> </td>
        </tr>

        <tr>
          <td align="left">Student Enrollment id</td>
              <td>: <input type="text" placeholder="Enroll ...."> </td>
        </tr>
        <tr>
          <td align="left">Grade</td>
              <td>: <input type="text" placeholder="Grade...."> </td>
        </tr>
    <tr>
      <td colspan="2" align="right"><input type="Submit" name="Insert" value="Submit"></td>
     <td><a href="StudentUneroll.php">Go To Edit Page </a></td>
       </tr>





     </table>


     </fieldset>


     </form>
     </body>
   </html>
