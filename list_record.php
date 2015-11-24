<html>
<head>
</head>
<body>

<?php
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

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
?>

<table border="1" style="width:100%">
<tr>
<td align="center"><strong>Firstname</strong></td>
<td align="center"><strong>Lastname</strong></td>
<td align="center"><strong>Update</strong></td>


<?php
if ($result->num_rows > 0) 
	{
    // output data of each row
    	while($row = $result->fetch_assoc()) 
    		{
    	        $id = $row['id'];
    	        
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];      
                echo "<tr><td>" . $firstname . "</td><td>" . $lastname . "</td><td><a href='update.php?id=" . $id . "'>Update</a></td</tr>";  //$row['index'] the index here is a field name

    		}

	}

?>	


</tr>
</table>


<?php
$conn->close();
?>

</body>
</html>


	
