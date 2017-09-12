<?php
	$name    = strip_tags($_POST["name"]);
   	$email   = strip_tags($_POST["email"]);
   	$pass    = strip_tags($_POST["pass"]);
	if (empty($name) || empty($email) || empty($pass) ){
		$response = array();
        $code = "reg_false";
        $message = "Please Fill UserName OR E-Mail OR Password OR Confirm Password....";
        array_push($response,array("code"=>$code,"message"=>$message));
        echo json_encode(array("server_response"=>$response));
    }elseif (filter_var($email,FILTER_VALIDATE_EMAIL)!=true) {
		$response = array();
        $code = "reg_false";
        $message = "Sorry The $email E-Mail is Invalid E-Mail...";
        array_push($response,array("code"=>$code,"message"=>$message));
        echo json_encode(array("server_response"=>$response));
    }else {    
	    $localhost = "localhost";
		$db = "userdatabase";
		$password = "asd987654321";
		$con=mysql_connect($localhost,"root",$password,$db);
		if (!$con) {
    		die("Can not connect to Database");
		}else{
			mysql_select_db("userdatabase");
			echo(mysql_error());
	   	    $sql = "SELECT * FROM userinfo  WHERE email like '" .$email."';";
	        $result = mysql_query($sql,$con);
	        if ( mysql_num_rows($result) > 0 ) {
	      	    $response = array();
                $code = "reg_false";
                $message = "user already Exist....";
                array_push($response,array("code"=>$code,"message"=>$message));
                echo json_encode(array("server_response"=>$response));
	        }else{
                $sql = "INSERT INTO userinfo (name,email,password)
                           VALUES ('".$name."','".$email."','".$pass."')";
                $result1=mysql_query($sql,$con);
				if($result1){
					$response = array();
                	$code = "reg_true";
                	$message = "Register is Sucessfully....";
                	array_push($response,array("code"=>$code,"message"=>$message));
                	echo json_encode(array("server_response"=>$response));
				}else
				 	echo(mysql_error());
				mysql_close($con);
            }
			
	           
		}

	}
?>