<?php
   $res="";
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
   	   $name=strip_tags($_POST["name"]);
   	   $email=strip_tags($_POST["email"]);
   	   $pass=strip_tags($_POST["pass"]);
   	   $conpass=strip_tags($_POST["conpass"]);
	   if (empty($name) || empty($email) || empty($pass) || empty($conpass) ){
	      $res="Please Fill UserName OR E-Mail OR Password OR Confirm Password";
	   }elseif ($_POST["conpass"] != $_POST["pass"] ) {
	   	    $res="Password not Identical";
	    }elseif (!preg_match("/^[a-zA-Z _-]*$/",$name)) {
            $res= "Only letters and white space and _ and - allowed"; 
        }elseif (filter_var($email,FILTER_VALIDATE_EMAIL)!=true) {
               $res= " Sorry The $email E-Mail is Invalid E-Mail ";
        }else {     
		    $_SESSION['name']=$_POST["name"];
		    $_SESSION['email']=$_POST["email"];
		    $name=$_POST["name"];
		    $pass=$_POST["pass"];
		    $email=$_POST["email"];
		    $conn=mysql_connect("localhost","root","asd987654321")
	                    or die("Can not connect to Database");
	        /*mysql_query("Drop Database db if exist",$conn)  
	                    or die("Can not Drop Database") ;
	        mysql_query("Create Database db",$conn)  
	                    or die("Can not Create Database ".mysql_error()) ;*/
	        mysql_select_db("y")    or die("Can not Select Database ".mysql_error()) ;	    
            $sql = "INSERT INTO user (name,pass)
                           VALUES ('".$name."','".$pass."')";
            $in=mysql_query($sql,$conn);
            if ($in) {
           	   $res="Register is Sucessfully";
           	   header("Location:login.php");
            }else
              $res=mysql_error();
		   
		}
	}
   
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="CSS/Register.css">
</head>
<body>
    <div id="main">
        <div id="header">
		    <a href="login.php"><div class="head" > Login </div></a>
		    <a href="Register.php"><div class="head" style="color:#00cc00"> Register </div></a>
	    </div>
	    <form method="post" action="<?= $_SERVER["PHP_SELF"];?>">
			<input class="inputs" type="text" name="name" placeholder="UserName">
			<input class="inputs" type="text" name="email" placeholder="E-mail Address">
			<input class="inputs" type="password" name="pass" placeholder="Password">
			<input class="inputs" type="password" name="conpass" placeholder="Confirm Password"><span class="error"><?= $conPass;?></span>
			<input id="btn" type="submit" value="REGISTER NOW" name="button">
	    </form>
	    <div id="result" class="head" > <?= $res ; ?> </div>
	</div>
</body>
</html>