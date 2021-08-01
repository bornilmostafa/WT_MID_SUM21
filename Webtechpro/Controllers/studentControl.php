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
     htmlspecialchars( $email=$_POST["email"]);
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

htmlspecialchars($fname=$_POST["fname"]);
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

htmlentities($fname=$_POST["fname"]);
}

//=====================Gender============================
if(!isset($_POST["gender"])){
  $hasError = true;
  $err_gender="Gender Required";
}
else{
  htmlspecialchars($gender = $_POST["gender"]);
}

//======================Nationality======================
if(!isset($_POST["Nationality"])){
  $hasError = true;
  $err_nation="Nationality Required";
}
else{
  htmlspecialchars($nation = $_POST["Nationality"]);
}


//=================blood========================
if(!isset($_POST["blood"])){
$hasError = true;
$err_blood="blood Required";
}
else {
   htmlspecialchars($blood = $_POST["blood"]);
}

//=================Religion========================
if(!isset($_POST["religion"])){
$hasError = true;
$err_religion="religion Required";
}
else {
htmlspecialchars($blood = $_POST["religion"]);
}


      //////////////////===============================Alll dates=======================================


      if (!isset($_POST["date"])){
        $hasError = true;
        $err_dating="Date Required";
      }
      else{
      htmlspecialchars($dating = $_POST["date"]);
      }
      if (!isset($_POST["Month"])){
        $hasError = true;
        $err_Month="Month Required";
      }
      else{
      htmlspecialchars($Month = $_POST["Month"]);
      }
      if (!isset($_POST["year"])){
        $hasError = true;
      $err_year="year Required";
      }
      else{
      htmlspecialchars ($year = $_POST["year"]);
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

htmlspecialchars($address=$_POST["address"]);
}




//====================parmanent address==================================


if(empty($_POST["Paddress"]))
{
  $hasError = true;
  $err_paddress="Permanent Address Required";
}
else {

htmlspecialchars($paddress=$_POST["Paddress"]);
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

htmlspecialchars($payment=$_POST["payment"]);
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

htmlspecialchars($phone=$_POST["phone"]);
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
