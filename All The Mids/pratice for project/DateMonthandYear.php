<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1 align="middle"><b> STUDENT ADMISSION PAGE</b>  </h1>
<?php

////==============================Student Name Phone ===============================
 $userid="";
 $err_userid="";
 $name="";
 $err_name="";
 $email="";
 $err_email="";
 $gender="";
 $err_gender="";
 $blood="";
 $err_blood="";
 $nation="";
 $err_nation="";

//===================father's and Mother's name==============================================
$fname="";
$err_fname="";
$mname="";
$err_mname="";


//===========================Date ,Birth date every==================================
    $dating="";
    $err_dating="";
    $Month="";
    $err_Month="";
    $year="";
    $err_year="";
    $Gdating="";
    $err_Gdating="";
    $GMonth="";
    $err_GMonth="";
    $year="";
    $err_Gyear="";
    $Adating="";
    $err_Adating="";
    $AMonth="";
    $err_AMonth="";
    $Ayear="";
    $err_Ayear="";
    $cer=[];
    $err_cer="";
    $religion="";
    $err_religion="";
    //=================address ,payment ,phone ==================================
    $address="";
    $err_address="";
    $paddress="";
    $err_paddress="";
    $payment="";
    $err_payment="";
    $phone="";
    $err_phone="";

    $hasError=false;

          function cerExist($cer){
      		global $cer;
      		foreach($cer as $c){
      			if($c == $cer) return true;
      		}
      		return false;
      	}




    	$array= array("Jaunary","February","March","April","May","June", "July" ,"August","September","Octobar","November","December");
      $array2= array("A+","A-","B+","B-","O+","O-", "AB+" ,"AB-");
      $array3 = array("Muslim","Hindu","Christain", "Buddist","Others");
  if(isset($_POST["submit"])){
      ////========================================Student All info====================================
//===================id================
if(empty($_POST["id"])){
  $hasError = true;
  $err_userid="id Required";
}
else if(strpos($_POST["id"],'S')){
  $hasError = true;
  $err_userid="Start with S";
}
else {
        $userid= $_POST["id"];
}
//============Student Name Validation==================
if(empty($_POST["name"])){
  $hasError = true;
  $err_name="Name Required";
}
else if(strlen($_POST["name"]) <= 2){
  $hasError = true;
  $err_name="Name must contain >2 character";
}
else{
htmlspecialchars($name = $_POST["name"]);
}
//============================Email=========================
if(empty($_POST["email"])){
$hasError = true;
$err_email="email Required";
}
  else if(strpos($_POST["email"], '@') == false || strpos($_POST["email"], '.') == false){
$hasError = true;
$err_email="Email must contain @ character and . character";
  }
  else{
      $email=$_POST["email"];
  }


//============Student other Information   ==================

//==========================fathers Name and Mother.s Name======================================
if(empty($_POST["fname"]))
  {
    $hasError = true;
    $err_fname="Father name Required";
  }
else if (strlen($_POST["fname"]) <= 5) {
$hasError=true;
$err_fname="Must be in <5 character";
}
else {

$fname=$_POST["fname"];
}

if(empty($_POST["mname"]))
{
$hasError = true;
$err_mname="Mother name Required";
}
else if (strlen($_POST["mname"]) <= 5) {
$hasError=true;
$err_mname="Must be in <5 character";
}
else {

$fname=$_POST["fname"];
}

//=====================Gender============================
if(!isset($_POST["gender"])){
  $hasError = true;
  $err_gender="Gender Required";
}
else{
  $gender = $_POST["gender"];
}

//======================Nationality======================
if(!isset($_POST["Nationality"])){
  $hasError = true;
  $err_nation="Nationality Required";
}
else{
  $nation = $_POST["Nationality"];
}


//=================blood========================
if(!isset($_POST["blood"])){
$hasError = true;
$err_blood="blood Required";
}
else {
        $blood = $_POST["blood"];
}

//=================Religion========================
if(!isset($_POST["religion"])){
$hasError = true;
$err_religion="religion Required";
}
else {
        $blood = $_POST["religion"];
}


      //////////////////===============================Alll dates=======================================


      if (!isset($_POST["date"])){
        $hasError = true;
        $err_dating="Date Required";
      }
      else{
        $dating = $_POST["date"];
      }
      if (!isset($_POST["Month"])){
        $hasError = true;
        $err_Month="Month Required";
      }
      else{
        $Month = $_POST["Month"];
      }
      if (!isset($_POST["year"])){
        $hasError = true;
        $err_year="year Required";
      }
      else{
        $year = $_POST["year"];
      }
      ////===================Addmison=================
      if (!isset($_POST["Adate"])){
        $hasError = true;
        $err_Adating="Date Required";
      }
      else{
        $Adating = $_POST["Adate"];
      }
      if (!isset($_POST["AMonth"])){
        $hasError = true;
        $err_AMonth="Month Required";
      }
      else{
        $AMonth = $_POST["AMonth"];
      }
      if (!isset($_POST["Ayear"])){
        $hasError = true;
        $err_Ayear="year Required";
      }
      else{
        $Ayear = $_POST["Ayear"];
      }

      ///=================Graduation-----------------------
      if (!isset($_POST["Gdate"])){
        $hasError = true;
        $err_Gdating="Date Required";
      }
      else{
        $Gdating = $_POST["Gdate"];
      }
      if (!isset($_POST["GMonth"])){
        $hasError = true;
        $err_GMonth="Month Required";
      }
      else{
        $GMonth = $_POST["GMonth"];
      }
      if (!isset($_POST["Gyear"])){
        $hasError = true;
        $err_Gyear="year Required";
      }
      else{
        $Gyear = $_POST["Gyear"];
      }
//====================================================================

//===================================present address==================
if(empty($_POST["address"]))
{
  $hasError = true;
  $err_address="Address Required";
}
else {

  $address=$_POST["address"];
}




//====================parmanent address==================================


if(empty($_POST["Paddress"]))
{
  $hasError = true;
  $err_paddress="Permanent Address Required";
}
else {

  $paddress=$_POST["Paddress"];
}


//==============================payment==============================
if(empty($_POST["payment"]))
{
  $hasError = true;
  $err_payment="Payment Required";
}
else if(!is_numeric($_POST["payment"])){
  $hasError = true;
  $err_payment="payment is value based  Required";
}
else {

  $payment=$_POST["payment"];
}

//====================phone===========================
if(empty($_POST["phone"]))
{
  $hasError = true;
  $err_phone="Phone Required";
}
else if(!is_numeric($_POST["phone"])){
  $hasError = true;
  $err_phone="Phone Required";
}
else {

  $phone=$_POST["phone"];
}

//================Cer Validation==========

if(!isset($_POST["cer"])){
			$hasError = true;
			$err_cer="Certifate  Required";
		}
		else{
			$cer = $_POST["cer"];
		}

      if(!$hasError)
      {
          echo "<h1>Form submitted</h1>";
          echo $_POST["id"]."<br>";
     			echo $_POST["name"]."<br>";
          echo $_POST["email"]."<br>";

          echo $_POST["gender"]."<br>";
          echo $_POST["blood"]."<br>";
          echo $_POST["Nationality"]."<br>";
          echo $_POST["fname"]."<br>";
          echo $_POST["mname"]."<br>";
          echo $_POST["religion"]."<br>";

          echo $_POST["date"]."<br>";
          echo $_POST["Month"]."<br>";
          echo $_POST["year"]."<br>";
          echo $_POST["Adate"]."<br>";
          echo $_POST["AMonth"]."<br>";
          echo $_POST["Ayear"]."<br>";
          echo $_POST["Gdate"]."<br>";
          echo $_POST["GMonth"]."<br>";
          echo $_POST["Gyear"]."<br>";
          echo $_POST["address"]."<br>";
          echo $_POST["Paddress"]."<br>";
          echo $_POST["payment"]."<br>";
          echo $_POST["phone"]."<br>";
          $arr4 =  $_POST["cer"];
          foreach($arr4 as $e){
				echo "$e<br>";


        }

}
}
 ?>


<form class="" action="" method="post">

<table>

  <tr>
  <td>Id</td>
  <td>: <input type="text" name="id" value="<?php echo $userid;?>" placeholder="Your id ...."> </td>
  <td><span> <?php echo $err_userid;?> </span></td>
  </tr>


  <tr>
  <td>Name</td>
  <td>: <input type="text" name="name" value="<?php echo $name;?>" placeholder="Your Name........">  </td>
  <td><span> <?php echo $err_name;?> </span></td>
  </tr>
  <td>Email</td>
  <td>: <input type="text" name="email" value="<?php echo $email;?>" placeholder="Your Email........">  </td>
  <td><span> <?php echo $err_email;?> </span></td>
</tr>


  <tr>
  <td>Gender</td>
  <td>: <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
  <td><span> <?php echo $err_gender;?> </span></td>
</tr>
<tr>
  <td>Blood Group :</td>
  <td>: <select name="blood"><option disabled selected>---select---</option>
    <?php
foreach($array2 as $k)
{
  if($array2==$k)
  {
echo "<option selected> $k </option>";}
else {
    echo "<option> $k </option>";
}

}
?>
  <td><span> <?php echo $err_blood;?> </span></td>

  </tr>

    <td>Date of Birth</td>
    <td>: <select name="date"><option disabled selected>---Date---</option>
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

      <select name="Month"> <option disabled selected>---Month---</option>
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
       <select name="year">
        <option disabled selected>---year---</option>
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
    <td><span> <?php echo $err_dating;?></span>
      <span><?php echo $err_Month;?></span>
        <span><?php echo $err_year;?> </span></td>
    </tr>


    <tr>
      <td>Religion :</td>
      <td>: <select name="religion"><option disabled selected>---select---</option>
        <?php
    foreach($array3 as $l)
    {
      if($array3==$l)
          {echo "<option selected> $l </option>";}
          else{
            echo "<option> $l </option>";
          }
    }
    ?>
      </select>
      <td><span> <?php echo $err_religion;?> </span></td>
      </tr>

      <tr>
        <td>Nationality</td>
        <td>: <input type="radio" name="Nationality" value="Bangladeshi" <?php if($nation=="Bangladeshi") echo "checked"; ?> name="Nationality"> Bangladeshi <input name="Nationality" <?php if($nation=="Forigner") echo "checked"; ?> value="Forigner" type="radio"> Foriger </td>
        <td><span> <?php echo $err_nation;?> </span></td>
      </tr>

      <tr>
        <td>Father's Name</td>
        <td>: <input type="text" name="fname" value="<?php echo $fname;?>" placeholder="Fater's Name........">  </td>
        <td><span> <?php echo $err_fname;?> </span></td>
      </tr>
      <tr>
        <td>Mother's Name</td>
        <td>: <input type="text" name="mname" value="<?php echo $mname;?>" placeholder="Mother's Name........">  </td>
        <td><span> <?php echo $err_mname;?> </span></td>
      </tr>
      <tr>


    <tr>
      <td>Admission Date :</td>
      <td>: <select name="Adate"><option disabled selected>---Date---</option>
        <?php
    for($i=1; $i<=31; $i++)
    {
       if($Adating==$i){
      echo "<option> $i </option>";
    }
    else {
  echo  "<option>$i</option>";
    }

    }
    ?>
      </select>

        <select name="AMonth"> <option disabled selected>---Month---</option>
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
         <select name="Ayear">
          <option disabled selected>---year---</option>
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
      <td><span> <?php echo $err_Adating;?></span>
        <span><?php echo $err_AMonth;?></span>
          <span><?php echo $err_Ayear;?> </span></td>

    </tr>

    <tr>

  <tr>
  <td>Graduation Date </td>
  <td>: <select name="Gdate"><option disabled selected>---Date---</option>
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

    <select name="GMonth"> <option disabled selected>---Month---</option>
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
     <select name="Gyear">
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
  </td>
  <td><span> <?php echo $err_Gdating;?></span>
    <span><?php echo $err_GMonth;?></span>
      <span><?php echo $err_Gyear;?> </span></td>

  </tr>

  <tr>
    <td>Present Address </td>
    <td>: <input type="text" name="address" value="<?php echo $address;?>" placeholder="Your address ...."> </td>
    <td><span> <?php echo $err_address;?> </span></td>

  </tr>
  <tr>
    <td>Parmanent Address </td>
    <td>: <input type="text" name="Paddress" value="<?php echo $paddress;?>" placeholder="Your permanent address ...."> </td>
    <td><span> <?php echo $err_paddress;?> </span></td>

  </tr>

  <tr>
    <td>Payment Statues </td>
    <td>: <input type="text" name="payment" value="<?php echo $payment;?>" placeholder="Amount ...."> </td>
    <td><span> <?php echo $err_payment;?> </span></td>

  </tr>

  <tr>
  <td>Contact Number </td>
  <td> : <input type="text" name="phone" value="<?php echo $phone;?>" placeholder="Number...."> </td>
  <td> <span> <?php echo $err_phone;?> </span></td>
  </tr>









  <tr>
    <td>Certifate Provided</td>
    <td>: <input type="checkbox" name="cer[]" <?php if(cerExist("Jsc")) echo "checked";?> value="Jsc"> Jsc
    <input type="checkbox" name="cer[]" <?php if(cerExist("Ssc")) echo "checked";?> value="Ssc"> Ssc<br>
    <input type="checkbox" name="cer[]" <?php if(cerExist("Hsc")) echo "checked";?> value="Hsc">Hsc
    </td>
  					<td><span> <?php echo $err_cer;?> </span></td> </td>

  </tr>


  <tr>
      <td colspan="2" align="right"><input type="submit" name="submit" value="submit"></td>
        <td colspan="2" align="right"><input type="reset" name="reset" value="Rest"></td>
      </tr>

      </table>
    </form>
  </body>
</html>
