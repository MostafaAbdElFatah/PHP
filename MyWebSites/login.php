<?php
    $localhost = "localhost";
    $password  = "asd987654321";
    $dbname    = "userDatabase";
	
	$email=$_POST["email"];
	$pass=$_POST["pass"];
	if (empty($_POST["email"]) || empty($_POST["pass"])) {
        $response = array();
        $code = "login_false";
        $message = "Please Fill Name or Password...";
        array_push($response,array("code"=>$code,"message"=>$message));
        echo json_encode(array("server_response"=>$response));
	}else{
	    $con=mysql_connect($localhost,"root",$password,$dbname);
	    if (!$con) {
		    die("Can not connect to Database");
		}
		mysql_select_db("userdatabase");
		$sql = "SELECT * FROM userInfo
	                     WHERE email like '".$email."' AND password like '".$pass."';";
		$result = mysql_query($sql,$con);
		if ( mysql_num_rows($result) > 0 ) {
	    	$response = array();
        	$code = "login_true";
			$row = mysql_fetch_array($result);
			$name = $row[0];
        	$message = "login Successfull .... Hello ".$name;
        	array_push($response,array("code"=>$code,"message"=>$message));
        	echo json_encode(array("server_response"=>$response));
		}else{
			$response = array();
			$code = "login_false";
			$message = "login failure email or password wrong....";
			array_push($response,array("code"=>$code,"message"=>$message));
			echo json_encode(array("server_response"=>$response));
		}
		mysql_close($con);
	}
	
?>