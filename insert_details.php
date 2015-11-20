<!DOCTYPE html>
<html>
<body>

<h1>PHP to MySQL Database</h1>

<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
$servername = "localhost";
$username = "root";
$password = "csirhrdg";
$dbname = "mydbone";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
//$email_address = mysqli_real_escape_string($link, $_POST['email']);
 
// attempt insert query execution
$sql = "INSERT INTO MyGuests (firstname, lastname) VALUES ('$first_name', '$last_name')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// close connection
mysqli_close($link);
?>

<FORM action="add_employee.php"><INPUT type=submit value="View Records"><a href="add_employee.php" ></a></FORM>

</body>
</html>