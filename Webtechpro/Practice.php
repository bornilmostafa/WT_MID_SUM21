
<?php
      require_once "Controllers/studentControl.php";
     // $id = $_GET["id"];
     // echo $id;
      $ad=StudentforUpdate($id);
      

      $birthday=explode(" ",$ad["birthday"]);
      $ad_date=explode(" ",$ad["admissiondate"]);
      $gd_date=explode(" ",$ad["graduationdate"]);
      
      $dating=$birthday[0];
      $Month=$birthday[1];
      $year=$birthday[2];


      $Adating=$ad_date[0];
      $AMonth=$ad_date[1];
      $Ayear=$ad_date[2];

      $Gdating=$gd_date[0];
      $GMonth=$gd_date[1];
      $Gyear=$gd_date[2];

      echo $dating;
      echo $Month;
      echo $year;

      echo $Adating;
      echo $AMonth;
      echo $Ayear;

      echo $Gdating;
      echo $GMonth;
      echo $Gyear;

     



      ?>

<form action=""method="Post">
    <table>

    <td>Date of Birth</td>
    <td>: <select id="date" name="date">
      <?php
    for($i=1; $i<=31; $i++)
    {
       if($dating==$i){
         echo "<option selected>$i</option>";
        }
        else{
    echo "<option> $i </option>";
    }
    }
    ?>
    </select>

      <select name="Month" id="Month" > 
        <?php
          foreach($array as $p){
            if($Month==$p){
              echo "<option selected>$p</option>";
            }
            else{
              echo "<option selected>$p</option>";
            }

          }
        ?>
      </select>
       <select name="year" id="year" >
        <?php
    for($j=1920; $j<=2010; $j++)
    {
    if($year==$j){
    echo "<option selected> $j </option>";}
    else {
    echo "<option> $j </option>";
    }
    }
    ?>

      </select>
    </td>

   



<tr>
      <td>Admission Date</td>

 <td>: <select  name="Adate">
        <?php
    for($i=1; $i<=31; $i++)
    {
       if($Adating==$i){
      echo "<option selected> $i </option>";
    }
    else {
  echo  "<option>$i</option>";
    }

    }
    ?> 
      </select> 

        <select   name="AMonth"> 
          <?php
            foreach($array as $p){
                if($AMonth==$p){
                echo "<option selected>$p</option>";
              }
                else {
                    echo "<option> $p </option>";
                }
            }
          ?>
        </select>
         <select  name="Ayear">
          <?php
  for($c=1920; $c<=2010; $c++)
  {
    if($Ayear==$c){
    echo "<option selected> $c </option>";
  }
  else {
    echo  "<option>$c</option>";
  }
  }

  ?> 

        </select>

  </td>

  </tr>

  <tr>
  <td>Graduation Date </td>
  <td>: <select id="Gdate" name="Gdate"><option disabled selected>---Date---</option>
    <?php
  for($i=1; $i<=31; $i++)
  {
  if($Gdating==$i){
  echo "<option selected> $i </option>";}
  else {
  echo  "<option>$i</option>";
  }
  }
  ?>
  </select>

    <select id="GMonth" name="GMonth"> <option disabled selected>---Month---</option>
      <?php
        foreach($array as $p){
          if($GMonth==$p){
            echo "<option selected>$p</option>";
        }
        else {
            echo "<option> $p</option>";
        }
      }
      ?>
    </select>
     <select id="Gyear" name="Gyear">
      <option disabled selected>---year---</option>
      <?php
  for($j=1920; $j<=2010; $j++)
  {
  if($Gyear==$j){
  echo "<option selected> $j </option>";
  }
  else {
  echo "<option> $j </option>";

  }
  }
  ?>

    </select>







  <tr>
  <td colspan="2" align="right"><button type="submit" name="date_student" value="submit">UPADETE STUDENT  ALL DATES </button>
        <td colspan="2" align="right"><button type="reset" name="reset" value="Rest">  RESET   </button>


  </tr>

  </table>


  </form>