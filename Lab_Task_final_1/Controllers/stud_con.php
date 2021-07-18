<?php
require_once "Models/db_config.php";
  $name="";
  $err_name="";
  $id="";
  $err_id="";
  $dob="";
  $err_dob="";
  $credit="";
  $err_credit="";
  $cgpa="";
  $err_cgpa="";
  $depId="";
  $err_depId="";
  $hasError=false;


 
	//init validation variables

    if(isset($_POST["add_stu"])){
        //======================username========================
          if(empty($_POST["name"])){
            $hasError = true;
            $err_name="Name Required";
          }
          else{
          htmlspecialchars($name = $_POST["name"]);
          }

        //=============DOB =======================
        if(empty($_POST["dob"])){
            $hasError = true;
            $err_dob="birthday reqiured";
          }
          else{
          htmlspecialchars($dob = $_POST["dob"]);
          }
          
        //============ Credit ============================
        if(empty($_POST["dob"])){
            $hasError = true;
            $err_dob="birthday reqiured";
          }
          else{
          htmlspecialchars($dob = $_POST["dob"]);
          }
          

        //=====================err Credit===============
        if(empty($_POST["credit"])){
            $hasError = true;
            $err_credit="credit reqiured";
          }
          else{
          htmlspecialchars($credit = $_POST["dob"]);
          }
          //================CGPA ==========================
          if(empty($_POST["cgpa"])){
            $hasError = true;
            $err_credit="cgpa reqiured";
          }
          else{
          htmlspecialchars($cgpa = $_POST["cgpa"]);
          } 

          $rs = insertStudent($name,$dob,$credit,$cgpa,$depId);
          if($rs === true){
              header("Location:studentadd.php");
          }
          $err_db = $rs;
        
    }

    function insertStudent($name,$dob,$credit,$cgpa,$depId){
		$query = "insert into student values (NULL, '$name','$dob','$credit','$cgpa','$depId')";
		return execute($query);
		
	}
    
    function getStdents(){
		$query = "select * from students";
		$rs = get($query);
		return $rs[0];
	}
        

?>













