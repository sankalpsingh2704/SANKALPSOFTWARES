<!DOCTYPE html>
<html>
<header>
	<title>
		Show Database
	</title>
	<link href="./StyleSheets/Main.css" rel="stylesheet" />
</header>
<body>
<?php
	include_once 'connect.php';

	$conn = connect();
	$sql = "SELECT * FROM sankalp.student";
	$stmt = $conn->query($sql);
	$result = $stmt->fetchAll(PDO::FETCH_NUM);
	
	/*
	$conn = mysqli_connect("localhost","root","","sankalp");
	mysqli_connect(hostname,dbuser,dbpassword,dbname);

	$query = "select * from sankalp.student";

	$result = mysqli_query($conn, $query);*/
?>
<table border="1">
		<tr>
			<th>Student Id</th>
			<th>Student Name</th>
			<th>Email</th>
			<th>mobile</th>
			<th>10th %</th>
			<th>12th %</th>
			<th>Date of Birth</th>
			<th>User Name</th>
			<th>Password</th>
		</tr>
		<?php
			foreach($result as $row)
			{
			
		      echo "<tr>";	
		?>
		     
		
	
	    <td> <?php echo $row[0]; ?> </td>
		<td> <?php echo $row[1]; ?> </td>
		<td> <?php echo $row[2]; ?> </td>
		<td> <?php echo $row[3]; ?> </td>
		<td> <?php echo $row[4]; ?> </td>
		<td> <?php echo $row[5]; ?> </td>
		<td> <?php echo $row[6]; ?> </td>
		<td> <?php echo $row[7]; ?> </td>
		<td> <?php echo $row[8]; ?> </td>
	
	    <?php
		echo "</tr>";
		}
?>	

</table>


</body>

</html>