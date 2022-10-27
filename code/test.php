<?php
//Hello world

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$servername = "mysql";
$username = "user";
$password = "password";
$db= "testdb";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "SELECT LastName, FirstName FROM Persons";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   output data of each row
  while($row = $result->fetch_assoc()) {
    echo " - Name: " . $row["LastName"]. " " . $row["FirstName"]. "<br>";
  }
} else {
  echo "0 results";
}
$result = mysql_query($sql);
while($row = mysql_fetch_array($result)) {
    echo $row['LastName'];
}

?>

