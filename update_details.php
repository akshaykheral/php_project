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

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>


<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>

<?php 

while($row = mysql_fetch_array($result))
            {

$id = $row['id'];
$firstname = $row['firstname'];

$lastname = $row['lastname'];
?>


<td width="100"></td>
<td><?=$id?></td>
</tr>
<tr>
<td width="100">First Name</td>
<td><input name="firstname" type="text" value="<?=$first?>"></td>
</tr>
<tr>
<td width="100">Last Name</td>
<td><input name="lastname" type="text" value="<?=$lastname?>"></td>
</tr>

<?php } ?>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="update" type="submit" id="update" value="Update">
</td>
</tr>
</table>
</form>



</body>
</html>