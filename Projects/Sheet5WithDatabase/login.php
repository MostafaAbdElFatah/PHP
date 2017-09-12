<?php
session_start();
$res="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name=$_POST["name"];
	$pass=$_POST["pass"];
	if (empty($_POST["name"]) || empty($_POST["pass"])) {
		$res="Please Fill Name or Password  ";
	}elseif (!preg_match("/^[a-zA-Z _-]*$/",$name)) {
            $res= "Only letters and white space and _ and - allowed"; 
    }else{
	    $con=mysql_connect("localhost","root","asd987654321");
	    if (!$con) {
		    die("Can not connect to Database");
	    }
	    mysql_select_db("db");
	    $res=mysql_error();
	    $sql = "SELECT * FROM user
	                     WHERE name = '".$name."' AND pass = '".$pass."';";
	    $in=mysql_query($sql,$con);
	    $res=mysql_error();
	    if (mysql_num_rows($in)>0) {
	      	$array=mysql_fetch_assoc($in) /*"Welcome ".$_SESSION['name']*/;
	      	$res="Welcome ". $array['name'];
	    }else
	        $res="UserName or Password is wrong";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
</head>
<body>
    <div id="main">
        <div id="header">
		    <a href="login.php"><div class="head" style="color:#00cc00"> Login </div></a>
		    <a href="Register.php"><div class="head"> Register </div></a>
	    </div>
	    <form method="post" action="<?= $_SERVER["PHP_SELF"];?>">
			<input class="inputs" type="text" name="name" placeholder="UserName">
			<input class="inputs" type="password" name="pass" placeholder="Password">
			<input id="check" type="checkbox" name="rem"><b> Remember Me</b>
			<input id="btn" type="submit" value="Login" name="button">
			<a id="forgot" href="">Forgot Password?</a>
	    </form>
	    <div id="result" class="head" > <?= $res ; ?> </div>
	</div>
	
</body>
</html>