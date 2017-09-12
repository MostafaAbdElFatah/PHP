<?php
	
$servername = "localhost";
$username = "root";
$password = "asd987654321";
$dbname = "userdatabase";
$jsonarray = array();

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM userinfo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $tablearray = array();
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        echo json_encode( array('name'=>$row['name'] ,'email'=>$row['email'],'password'=>$row['password']) );
    }
    
} 

$conn->close();
?>