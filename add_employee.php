<!DOCTYPE html>
<html>
<body>

<h1>PHP to MySQL Database</h1>

<?php
/*
$conn = odbc_connect('db_test', '', '') or die("Error in Connection");

$sql = "INSERT INTO Table2 (id, fname, lname, age) VALUES" .
"('$_POST[userID  ]', '$_POST[firstname]', '$_POST[lastname]', '$_POST[userage]')";

$rs = odbc_exec($conn, $sql);

if (!$rs)
   {
      exit("Error in sql");
   }

/*odbc_fetch_row($rs);
odbc_close($conn);
} 
?>

<br><br>
<fieldset >  
Add a new user 
<br>
<br>
<label for='userID'>ID: &nbsp;</label>  
<input type='text' name='userID' id='userID'/>  
<label for='firstname'>First Name: &nbsp;</label>  
<input type='text' name='firstname' id='firstname'/>
<label for='lastname'>Last Name: &nbsp;</label>  
<input type='text' name='lastname' id='lastname'/> 
<label for='userage'>Age: &nbsp;</label>  
<input type='text' name='userage' id='userage'/> 
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">

<br>

<input type='submit' name='Submit' value='Submit' />  
</form>
</fieldset>  
<table width=100%>

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

<FORM action="person_details.php"><INPUT type=submit value="Insert Records"><a href="person_details.php" ></a></FORM>
</body>
</html>