<?php
$conn=mysql_connect("localhost","root","asd987654321")
                    or die("Can not connect to Database");
mysql_query("Drop Database db if exist",$conn)  
                    or die("Can not Drop Database") ;
mysql_query("Create Database db",$conn)  
                    or die("Can not Create Database ".mysql_error()) ;
mysql_select_db("db")    or die("Can not Select Database ".mysql_error()) ;
mysql_query("Create Table user (
                  name VARCHAR(30) NOT NULL,
                  pass VARCHAR(30) NOT NULL   
	)")            or die("Can not Create Table ".mysql_error());



?>