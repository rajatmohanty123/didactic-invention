<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "homeservice";
$name=$_POST[name];
$mob=$_POST[mob];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id=$name.$mob;
$sql = "INSERT INTO worker (id,name,Address,mob,specialization)
VALUES ('$id','$_POST[name]','$_POST[Address]','$_POST[mob]','$_POST[s1]')";

if ($conn->query($sql) === TRUE) {
    echo "
          <center><h1>You are successfully Registered</h1></center>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
