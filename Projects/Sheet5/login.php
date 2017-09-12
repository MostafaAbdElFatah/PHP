<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name=$_POST["name"];
	$pass=$_POST["pass"];
	if (empty($_POST["name"]) || empty($_POST["pass"])) {
		$res="Please Fill Name or Password  ";
	}elseif (!preg_match("/^[a-zA-Z _-]*$/",$name)) {
            $res= "Only letters and white space and _ and - allowed"; 
    }else{
		$name=$_POST["name"];
		$pass=$_POST["pass"];
		$dataArray=File('data.txt');
		$bool=false;
		for ($i=0; $i < count($dataArray) ; $i++) { 
		   $dataline=explode("-", $dataArray[$i]);
			   if( ( $dataline[0]==$name ) && ( $dataline[1] == $pass ) ){
				   $res="Welcome ".$_SESSION['name'];
				   $GLOBALS['bool']=true;
				   break;
			}
		}
		if ($bool==false){
		$res="UserName or Password is Wrong";
		}
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