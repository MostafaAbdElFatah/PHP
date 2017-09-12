<?php
$conn=mysql_connect("localhost","root","asd987654321");
if (!$conn) {
	die("Can not connect to Database");
}
echo "connection Sucessfully<br>";
mysql_query("Drop Database db if exist",$conn);
echo "drop Database<br>";
/*mysql_query("Create Database db",$conn);
echo mysql_error()."<br>";
echo "Create Database<br>";*/
mysql_select_db("db");
echo mysql_error()."<br>";
echo "select Database<br>";
mysql_query("Create Table user (
                  name VARCHAR(30) NOT NULL,
                  pass VARCHAR(30) NOT NULL   
	)");
echo mysql_error()."<br>";
echo "Create table<br>";
?>