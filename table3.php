<html>
  <head>
    <style>
	table
	{
	border-style:solid;
	border-width:2px;
	border-color:pink;
	}
	</style>
  </head>
     <body bgcolor="#EEFDEF">
	 <?php
	    $con=new mysqli("localhost","root","");
		if(!$con)
		  {
		  die("Could not connect".mysql_error());
		  }
		mysql_select_db("student",$con);
		$result=mysql_query("SELECT * FROM student");
		echo "<table border='1'>
		<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Mobile</th>
		<th>Email</th>
		</tr>";
		while($row=mysql_fetch_array($result))
		    {
			echo"<tr>";
			echo"<td>".$row['Id']."</td>";
			echo"<td>".$row['Name']."</td>";
			echo"<td>".$row['Mobile']."</td>";
			echo"<td>".$row['Email']."</td>";
			echo"</tr>";
			}
		echo"</table>";
		mysql_close($con);
		?>
		</body>
		</html>
			
			
		
	