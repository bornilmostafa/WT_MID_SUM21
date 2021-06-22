<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    	$userid="";
    	$err_userid="";
    	$name="";
    	$err_name="";
    	$password="";
    	$err_password="";
      $email="";
      $err_email="";
      $phone="";
      $err_phone="";
    	$gender="";
    	$err_gender="";
    	$dating="";
    	$err_dating="";
      $Month="";
    	$err_Month="";
      $year="";
    	$err_year="";
    	$hobbies=[];
    	$err_hobbies="";
    	$bio="";
    	$err_bio="";

    	$hasError=false;

    	$array= array("Jaunary","February","March","April","May","June", "July" ,"August","September","Octobar","November","December");

    	function hobbyExist($hobby){
    		global $hobbies;
    		foreach($hobbies as $h){
    			if($h == $hobby) return true;
    		}
    		return false;
    	}


    	//if($_SERVER["REQUEST_METHOD"]=="POST"){
    	if(isset($_POST["submit"])){
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
        if(empty($_POST["username"]))
          {
    				$hasError = true;
    				$err_username="Username Required";
    			}
    else if (strlen($_POST["username"]) <= 5) {
      $hasError=true;
      $err_username="Must be in <5 character";
    }
    else if(strpos($_POST["username"]," ")){
      $hasError=true;
      $err_username="Username should not contain white space";
    }
    else {

    	$username=$_POST["username"];
    }

    			if(empty($_POST["password"]))
          {
            $hasError=true;
    				$err_password="Password Required";
          }
          else if(isset($_POST[""])){
    		       echo htmlspecialchars($_POST["pass"]);
    		    }
    			 else if(strlen($_POST["password"])<8){
            $hasError=true;
    				 $err_password="Password Must Be 8 Charachter Long";
    		 }
    			 else if(!strpos($_POST["password"],"#")){
             $hasError=true;
    			 $err_password="Password should contain special character";
    		    }
    		 else if(!strpos($_POST["password"],"1")){
             $hasError=true;
    			    $err_password="Password should contain Numeric values";
    		   }
    		   else if(!ctype_upper($_POST["password"])){
              $hasError=true;
    			     $err_password="Password should contain UpperCase values";
    		    }
    		     else if(!ctype_lower($_POST["password"])){
               $hasError=true;
    			    $err_password="Password should contain LowerCase values";
    		     }
    		   else if(strpos($_POST["password"]," ")){
              $hasError=true;
    			    $err_password="Password should not contain white space";
    		    }
    			 else{
    				 $password=$_POST["password"];
    			 }
    #confirm strart
    if(empty($_POST["Cpassword"]))
    {
    	$hasError = true;
    	$err_Cpassword="Cofirm Password Required";
    }
    else if($_POST["password"]!=$_POST["Cpassword"])
    {
      $hasError = true;
     $err_Cpassword="Password doesn't match";
    }
    else {

    	$Cpassword=$_POST["Cpassword"];
    }

    #confirm end

    #phone start
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
    //phone end

    //address start

     if (empty($_POST["email"])) {
      $hasError=true;
      $err_email = "Email is required";   }
     elseif(strpos($_POST["email"],"@.")){
              $hasError=true;
    			     $err_email="Email must contain @ and .";
    		     }

    			 else {
                     $email =$_POST["email"];
                 }

    		if(!isset($_POST["gender"])){
    			$hasError = true;
    			$err_gender="Gender Required";
    		}
    		else{
    			$gender = $_POST["gender"];
    		}
    		if(!isset($_POST["hobbies"])){
    			$hasError = true;
    			$err_hobbies="Checking Required";
    		}
    		else{
    			$hobbies = $_POST["hobbies"];
    		}
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

    		if(!$hasError){

    			echo "<h1>Form submitted</h1>";
    			echo $_POST["userid"]."<br>";
    			echo $_POST["name"]."<br>";
    			echo $_POST["password"]."<br>";
          echo $_POST["password"]."<br>";
          echo $_POST["email"]."<br>";
          echo $_POST["phone"]."<br>";
    			echo $_POST["gender"]."<br>";
    			echo $_POST["date"]."<br>";
          echo $_POST["Month"]."<br>";
          echo $_POST["year"]."<br>";

    			$arr = $_POST["hobbies"];

    			foreach($arr as $e){
    				echo "$e<br>";
    			}
    		}

    		//we will otherwise DB CRUD or authenticate
    		///header("Location: index.php");
    	}

    ?>












  <form class="" action="index.html" method="post">
  <fieldset>
    <table>
      <tr>
  					<td>Id</td>
  					<td>: <input type="text" name="id" value="<?php echo $userid;?>" placeholder="Your id ...."> </td>
  					<td><span> <?php echo $err_userid;?> </span></td>
  				</tr>
  				<tr>
  					<td>name</td>
  					<td>: <input type="text" name="name" value="<?php echo $name;?>" placeholder="Username">  </td>
  					<td><span> <?php echo $err_name;?> </span></td>
  				</tr>
  				<tr>
  					<td>Password</td>
  					<td>: <input type="password" name="password" placeholder="Password">  </td>
  					<td><span> <?php echo $err_password;?> </span></td>
  				</tr>
  				<tr>
  					<td>Gender</td>
  					<td>: <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
  					<td><span> <?php echo $err_gender;?> </span></td>
  				</tr>
  				<tr>
            <td>Admission Date :</td>
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
          <tr>
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


          <tr>
<td>Contact Number </td>
<td><input type="text" name="phone"value="<?php echo $phone;?>" placeholder="Number...."> </td>
<td><span> <?php echo $err_phone;?> </span></td>
</tr>

</tr>

    <td colspan="2" align="right"><input type="submit" name="Insert" value="Submit"></td>
    <td colspan="2" align="right">  <input type="submit" name="Next Page" value="reset"> <a href=""></a>    </td>
  <td><a target="_blank" href="StudentDU.php">Go To Edit information page</a></td>

  </tr>
	</table>

    </table>
  </fieldset>


  </form>
  </body>
</html>
