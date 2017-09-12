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

$sql = "SELECT * FROM doctors";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $doctable = array();
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $row_array['id']        = $row['id'];
        $row_array['name']      = $row['name'];
        $row_array['spec']      = $row['spec'];
        $row_array['address']   = $row['address'];
        $row_array['phone']     = $row['phone'];
        array_push($doctable,$row_array);
    }
    // push array
	$jsonarray['doctors'] = $doctable;
} 

$sql = "SELECT * FROM hospital";
$result1 = $conn->query($sql);

if ($result1->num_rows > 0) {
    $hospitaltable = array();
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
        $row_array1['id']        = $row1['id'];
        $row_array1['name']      = $row1['name'];
        $row_array1['type']      = $row1['type'];
        $row_array1['address']   = $row1['address'];
        $row_array1['phone']     = $row1['phone'];

        array_push($hospitaltable,$row_array1);
    }
     // push array
	$jsonarray['hospital'] = $hospitaltable;
} 


$sql = "SELECT * FROM hotels";
$result2 = $conn->query($sql);

if ($result2->num_rows > 0) {
    $hotelstable = array();
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
         $row_array2['id']        = $row2['id'];
         $row_array2['name']      = $row2['name'];
         $row_array2['address']   = $row2['address'];
         $row_array2['phone']     = $row2['phone'];

        array_push($hotelstable,$row_array2);
    }
     // push array
	$jsonarray['hotels'] = $hotelstable;
} 

$sql = "SELECT * FROM pharmacy";
$result3 = $conn->query($sql);

if ($result3->num_rows > 0) {
    $pharmtable = array();
    // output data of each row
    while($row3 = $result3->fetch_assoc()) {
        $row_array3['id']        = $row3['id'];
        $row_array3['name']      = $row3['name'];
        $row_array3['address']   = $row3['address'];
        $row_array3['phone']     = $row3['phone'];

        array_push($pharmtable,$row_array3);
    }
    // push array
	$jsonarray['pharmacy'] = $pharmtable;
} 

$sql = "SELECT * FROM restaurants";
$result4 = $conn->query($sql);

if ($result4->num_rows > 0) {
    $resttable = array();
    // output data of each row
    while($row4 = $result4->fetch_assoc()) {
        $row_array4['id']        = $row4['id'];
        $row_array4['name']      = $row4['name'];
        $row_array4['address']   = $row4['address'];
        $row_array4['phone']     = $row4['phone'];

        array_push($resttable,$row_array4);
    }
    // push array
	$jsonarray['restaurants'] = $resttable;
} 

$sql = "SELECT * FROM student";
$result5 = $conn->query($sql);

if ($result->num_rows > 0) {
    $studtable = array();
    // output data of each row
    while($row5 = $result5->fetch_assoc()) {
        $row_array5['id']        = $row5['id'];
        $row_array5['name']      = $row5['name'];
        $row_array5['area']      = $row5['area'];
        $row_array5['phone']     = $row5['phone'];

        array_push($studtable,$row_array5);
    }
        // push array
	$jsonarray['student'] = $studtable;
} 


echo json_encode($jsonarray);
$conn->close();
?>