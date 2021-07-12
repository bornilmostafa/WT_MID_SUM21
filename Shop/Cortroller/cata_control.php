<?php
include "Model/db_config.php";

$err_db="";
$hasError=false;
$name="";
$err_name="";
$hasError=false;

if(isset($_POST["add_cata"])){
//========================name=========================
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
//==================================================
//===============================================================================================
if(!$hasError)
{
  $rs=insert_Cata($name);
  if($rs==true)
  {
    header("Location:ed_cata.php");
  }
$err_db=$rs;
}

}

function insert_cata($name){

    $query="insert into cata values (NULL,'$name')";
    return execute($query);
  }
  function getallcata()
  {
  $query="select * from cata ";
  return get($query);
  
  }

  function getcata($id)
  {
  $query="select * from cata where id='$id'";
  $rs=get($query);
  return $rs[0];
  }




?>