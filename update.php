<?php
	include_once('db_pro.php');
 
	if( isset($_GET['id']) )
	{
		$id = $_GET['id'];
		$res= mysql_query("SELECT * FROM MyGuests WHERE id='$id'");
		$row= mysql_fetch_array($res);
	}
 
	if( isset($_POST['firstname]']) )
	{
		$firstname = $_POST['firstname'];
		$id  	 = $_POST['id'];
		$sql     = "UPDATE MyGuests SET name='$firstname' WHERE id='$id'";
		$res 	 = mysql_query($sql) 
                                    or die("Could not update".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=list_record.php'>";
	}

?>

<form action="update.php" method="POST">
Name: <input type="text" name="`firstname" value="<?php echo $row[1]; ?>"><br/>
<input type="hidden" name="id" value="<?php echo $row[0]; ?>">
<input type="submit" value=" Update "/>
</form>




<!--

<html>
<head>
</head>
<body>
<table>
<form method = "post" action = "update_ac.php">

<?php
/*
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="csirhrdg"; // Mysql password 
$db_name="mydbone"; // Database name 
$tbl_name="MyGuests"; // Table name
$conn = mysql_connect($host, $username, $password);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
} 

$id=$_GET['id'];
$sql = "SELECT * FROM MyGuests WHERE id= '$id'";

mysql_select_db('mydbone');

$retval = mysql_query( $sql, $conn );


if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "<tr><td><strong>First Name: </strong><input name = ' firstname  ' type = 'text' id = 'firstname' value = " . $row['firstname'] . "></td><td><strong>LastName: </strong><input name = ' lastname  ' type = 'text' id = 'lastname' value = " . $row['lastname'] . "></td><td><input name = ' id  ' type = 'hidden' id = 'id' value = " . $row['id'] . "></td><td><input type = 'submit' name = 'Submit' value = 'Submit'></td><td><button type = 'submit' formaction = 'update_ac.php?id=" . $id ."' value = 'Submit'>Submit as admin</button></td></tr><br>";
} 

mysql_close($conn);
?>	

</form>
</table>

</body>
</html>
