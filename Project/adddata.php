<?php
	include_once 'connect.php';
	
	try{
	$conn = connect();
	
	//$conn = mysqli_connect("localhost","root","","sankalp");
	//$query = "INSERT INTO sankalp.student(name,email,mobile,high,inter,dob,user,password) VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['mob']."','".$_POST['high']."','".$_POST['inter']."','".$_POST['dob']."','".$_POST['user']."','".$_POST['pass']."')";
	//echo $query;
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mob'];
	$high = $_POST['high'];
	$inter = $_POST['inter'];
	$dob = $_POST['dob'];
	$user = $_POST['user'];
	$password = $_POST['pass'];
	
	$sql = "INSERT INTO sankalp.student (name,email,mobile,high,inter,dob,user,password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $name);
	$stmt->bindValue(2, $email);
	$stmt->bindValue(3, $mobile);
	$stmt->bindValue(4, $high);
	$stmt->bindValue(5, $inter);
	$stmt->bindValue(6, $dob);
	$stmt->bindValue(7, $user);
	$stmt->bindValue(8, $password);
	$stmt->execute();
	header("location:index.php");
	}
	catch(Exception $e)
	{
		print_r($e);
	}
	
	/*
	if(mysqli_query($conn,$query)){
		header("location:index.php");
	}else{
		echo mysqli_error($conn);
	}*/
?>