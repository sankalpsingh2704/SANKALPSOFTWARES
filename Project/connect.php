<?php
	
	function connect()
	{
		$host = "ap-cdbr-azure-southeast-b.cloudapp.net";
		$user = "bc90a2f54447fe";
		$pwd = "7699fd31";
		$db = "sankalp";
		try{
			$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			return $conn;
		}
		catch(Exception $e){
			die(print_r($e));
		}
	}
?>