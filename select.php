<!DOCTYPE html>
<html>
<head><style>
<style>
*{
 margin: 0;
 padding: 0;
}
table {
  border-collapse: collapse;
  width: 100%;
}
th{
 font-size: 24px;
}
td{
 font-size: 18px;
}

th, td {
  background: green;
  padding: 16px 16px;
  text-align: justify;
  color: white;
  border: none;
   border-bottom: 1px solid #ddd;

}


th,td:hover {
 background-color: maroon;
}
</style>
</head>
<form action="select.html" method="post">
<body>

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

$sql = "SELECT id,name,Address,mob FROM worker WHERE specialization='Plumber'";
$result = $conn->query($sql);
echo "<table border='1'>
		<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Address</th>
		<th>Mob</th>
                <th>Selection</th>
		</tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
			echo"<td>".$row['id']."</td>";
			echo"<td>".$row['name']."</td>";
			echo"<td>".$row['Address']."</td>";
			echo"<td>".$row['mob']."</td>";
                        echo"<td><input type='button' value='select' name='select'size=50></td>";
			echo"</tr>";
}
echo"</table>";
} else {
    echo "<table border='1'>
		<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Address</th>
		<th>Mob</th>
		</tr>
           </table>";
                
}

$conn->close();
?>

</body>
</html>
