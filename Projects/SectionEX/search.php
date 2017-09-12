<?php
session_start();
if (empty($_SESSION['name'])) {
     $log="Login";
}else{
      $log="Logout";
}
 if ($_SERVER["REQUEST_METHOD"]=="POST") {
 	$searchable=$_SERVER['search'];
 	if (empty($_SESSION['name'])) {
 		$res="Please LOGIN";
 	}
 	else{
	 	$conn=mysql_connect("localhost","root","asd987654321")
		            or die("Can not connect to Database");
		mysql_select_db("y")    or die("Can not Select Database ".mysql_error()) ;	    
	    $res="
	         <table border='1' width='100%'>
	              <tr>
	                  <th>ID</th>
	                  <th>Book Name</th>
	                  <th>Author</th>
	              </tr>";
	   $Select=mysql_query("SELECT * FROM books  WHERE name LIKE '%".$searchable."%';");
	   while ($data = mysql_fetch_assoc($Select)) {
	   	 $res .="
	      <tr>
	          <td>".$data['id']."</td>
	          <td>".$data['name']."</td>
	          <td>".$data['author']."</td>
	      </tr>
	   	 ";
	   }
	   $res .="</table>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
</head>
<body>
    <div id="main">
        <div id="header">
		    <a href="login.php"><div class="head" ><?= $log ?></div></a>
		    <a href="Register.php"><div class="head" >Sign up</div></a>
	    </div>
	    <form method="post" action="<?= $_SERVER["PHP_SELF"];?>">
			<input class="inputs" type="search" name="search" placeholder="Search Book name">
			<input id="btn" type="submit" value="Search" name="button">
	    </form>
	    <div id="result" class="head" > <?= $res ; ?> </div>
	</div>
</body>
</html>