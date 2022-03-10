<?php
    session_start();
	include_once 'connect.php';
	$conn = connect();
	
	
    $cuser = $_SESSION['user'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mob = $_POST['mob'];
	$high = $_POST['high'];
	$inter = $_POST['inter'];
	$dob = $_POST['dob'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	//$conn = mysqli_connect("localhost","root","","sankalp");
	//$query = "update students1 set sname='".$_POST['nm']."',email='".$_POST['email']."',marks=".$_POST['marks']." where sid=".$_GET['id'];
	//$query = "update sankalp.student set name = '$name',email = '$email', mobile = '$mob',high='$high',inter = '$inter',dob='$dob',user='$user',password='$pass' WHERE user='$cuser'";
	
	$sql = "UPDATE sankalp.student set name = ?,email = ?, mobile = ?, high = ?, inter = ?, dob = ?, user = ?, password = ? WHERE user = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $name);
	$stmt->bindValue(2, $email);
	$stmt->bindValue(3, $mob);
	$stmt->bindValue(4, $high);
	$stmt->bindValue(5, $inter);
	$stmt->bindValue(6, $dob);
	$stmt->bindValue(7, $user);
	$stmt->bindValue(8, $pass);
	$stmt->bindValue(9, $cuser);
	if($stmt->execute())
	{
		header("location:index.php");
	}
	else{
		echo "error";
	}
	
	
	/*
	if(mysqli_query($conn,$query)){
		
	}
	else{
		echo mysqli_error($conn);
	}*/
?>