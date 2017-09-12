<?php

$servername = "localhost";
$username = "root";
$password = "asd987654321";
$dbname = "myspind";
$jsonarray = array();

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $tablearray = array();
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $row_array['id']        = $row['id'];
        $row_array['name']      = $row['name'];
        $row_array['address']   = $row['address'];
        $row_array['phone']     = $row['phone'];

        array_push($tablearray,$row_array);
    }
    // push array
	$jsonarray['student'] = $tablearray;

} 

echo json_encode($jsonarray);
$conn->close();
?>