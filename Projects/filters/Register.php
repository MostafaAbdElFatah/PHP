<?php
   $res="";
   session_start();
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
	   if (empty($_POST["name"] ) ){
	      $res="Please Set UserName";
	   }elseif (empty($_POST["email"] ) ) {
	        $res="Please Set E-mail";
	   }elseif (empty($_POST["pass"]) ) {
	        $res="Please Set Password"; 
	   }elseif (empty($_POST["conpass"] ) ) {
	   	    $res="Please Set Confirm Password";
	    }elseif ($_POST["conpass"] != $_POST["pass"] ) {
	   	    $res="Password not Identical";
	    }else {     
		   $_SESSION['name']=$_POST["name"];
		   $_SESSION['email']=$_POST["email"];
		   $name=$_POST["name"];
		   $pass=$_POST["pass"];
		   $email=$_POST["email"];
		   $con=mysql_connect("localhost","root","asd987654321");
           if (!$con) {
	           die("Can not connect to Database");
           }
           mysql_select_db("db");
           $res=mysql_error();
            $sql = "INSERT INTO user (name,pass)
                           VALUES ('".$name."','".$pass."')";
           $in=mysql_query($sql,$con);
           if ($in) {
           	$res="Register is Sucessfully";
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