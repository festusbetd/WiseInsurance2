<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$policy = $_POST['policy'];
		$sql = "INSERT INTO members (username, email, policy) VALUES ('$username', '$email', '$policy')";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>