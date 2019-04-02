<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "homeservice";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (Name, Address,Mob,Email,Password)
VALUES ('$_POST[name]','$_POST[Address]','$_POST[mob]','$_POST[email]','$_POST[psw]')";

if ($conn->query($sql) === TRUE) {
    echo "
          <center><h1>You are successfully Registered</h1></center>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
