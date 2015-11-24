<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="csirhrdg"; // Mysql password 
$dbname="mydbone"; // Database name 
$tbl_name="MyGuests"; // Table name 

// Create connection
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id=$_GET['id'];
$firstname=$_GET['firstname'];
$lastname=$_GET['lastname'];
$sql = "UPDATE MyGuests SET firstname = '$firstname', lastname='$lastname' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>