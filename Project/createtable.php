<?php
	
	include_once 'connect.php';
	
	$conn = connect();
	
	$sql = "CREATE TABLE SANKALP.STUDENT
			(id INT(5) AUTO_INCREMENT,
				name VARCHAR(50),
				email VARCHAR(50),
				mobile VARCHAR(50),
				high VARCHAR(50),
				inter VARCHAR(50),
				dob VARCHAR(50),
				user VARCHAR(50),
				password VARCHAR(50), PRIMARY KEY(id))";
				
	try{
		$conn->query($sql);
		echo "<h3>Table created.</h3>";
	}
	catch(Exception $e){
		print_r($e);
	}
	

 ?>