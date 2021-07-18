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

          $rs = insertStudent($name,$dob,$credit,$cgpa,$_POST["c_id"]);
          if($rs === true){
              header("Location:studentadd.php");
          }
          $err_db = $rs;
        
    }
   else if(isset($_POST["edit_stu"])){
        $rs = editstudent($name,$dob,$credit,$cgpa,$depId,$id);
        if($rs === true){
            header("Location:studentadd.php");
        }
        $err_db = $rs;
      
  }


    function insertStudent($name,$dob,$credit,$cgpa,$c_id){
		$query = "insert into student values (NULL, '$name','$dob','$credit','$cgpa','$c_id')";
		return execute($query);
		
	}
    
  function getStudents(){
		$query ="select p.*,c.name as 'c_name' from student p left join department c on p.dep_id = c.dep_id";
		$rs = get($query);
		return $rs;
	}

  function editstudent($name,$dob,$credit,$cgpa,$depId,$id){
		$query ="update student set Name='$name',Dob=$dob,Credit=$credit,Cgpa=$cgpa ,c_id=$depId where id = $id";
		return execute($query);
	}
	



?>













