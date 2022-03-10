<?php
session_start();

include_once 'connect.php';

$conn = connect();
$userEmail = $_POST['user'];
$pwd = $_POST['password'];

$sql = "SELECT * FROM sankalp.student WHERE user = '$userEmail' AND password = '$pwd'";

$stmt = $conn->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_NUM);


if(count($result)> 0){
	$userData = $result[0];
	$_SESSION['user'] = $userData[7];
	$_SESSION['password'] = $userData[8];
	header("location:index.php");
	//header("location:./View/showdatabase.php");
}else{
	$_SESSION['error'] = "Invalid username / password";
	header("location:LoginPage.php");
}


?>