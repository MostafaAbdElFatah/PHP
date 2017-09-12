<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$name=$_POST["name"];
	if (filter_var($name,FILTER_VALIDATE_EMAIL)==true) {
	    $res = "this is email";
	}else
	    $res = "this isn't email";
}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>filters</title>
</head>
<body>
       <form method="post" action="<?=$_SERVER['PHP_SELF']; ?>">
       	 Name:<input type="text" name="name" > <input type="submit" value="submit" >
       	 <div><?=$res?></div>
       </form>
</body>
</html>