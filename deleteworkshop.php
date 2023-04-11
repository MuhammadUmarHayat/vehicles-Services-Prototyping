<?php
	session_start();
	require_once 'config/db.php';
	//if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
		//header('location: login.php');
	//}

	if(isset($_GET) & !empty($_GET)){
		$id = $_GET['id'];
		$sql = "DELETE FROM workshop WHERE id='$id'";
		if(mysqli_query($con, $sql)){
			header('location:workshop.php');
		}
	}else{
		header('location: workshop.php');
	}
?>