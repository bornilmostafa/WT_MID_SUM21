<?php

require_once "Models/db_config.php";
  $name="";
  $err_name="";


  $err_db="";
$hasError=false;

 if(isset($_POST["add_in"])){
//======================name========================
  if(empty($_POST["name"])){
    $hasError = true;
    $err_name=" Department Name Required";
  }
  else{
  htmlspecialchars($name = $_POST["name"]);
  }
  $rs = insertdep($name);
  if($rs === true){
      header("Location: alldep.php");
  }
  $err_db = $rs;

}
elseif(isset($_POST["edit_dep"])){
    //do the validations
    //if not error
    $rs = editdep($_POST["name"],$_POST["dep_id"]);
    if($rs === true){
        header("Location: alldep.php");
    }
    $err_db = $rs;
}

 

 function insertdep($name){
    $query = "insert into department values (NULL, '$name')";
    return execute($query);
    
}

function getAlldep(){
    $query = "select * from department";
    $rs = get($query);
    return $rs;
}
function getdep($id){
    $query = "select * from department where id=$id";
    $rs = get($query);
    return $rs[0];
}
function editdep($name, $id){
    $query = "update department set name='$name' where id=$id";
    return execute($query);
    
}


?>