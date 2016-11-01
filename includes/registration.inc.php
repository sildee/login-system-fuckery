<?php
 	session_start();

	include '../dbh.php';
 
	$username = $_POST['uid'];
	$password = $_POST['upw'];  
	
	if (empty('uid')){
		header("Location: ../registration.php?error=empty");	
		exit();		
	}
	if (empty('upw')){
		header("Location: ../registration.php?error=empty");	
		exit();		
	}

    else {
		$sql = "SELECT uid FROM user WHERE uid='$username'";
		$result = mysqli_query($conn, $sql);
		$uidcheck = mysqli_num_rows($result);
		if($uidcheck > 0) {
			header("Location: ../registration.php?error=duplicate_username");	
			exit();	
	} 	else {
		$upwhash = password_hash($password, PASSWORD_DEFAULT);
		$sql = "INSERT INTO user (`uid`, `upw`) 
				VALUES ('$username', '$upwhash')";
		$result = mysqli_query($conn, $sql);  

		header("Location: ../index.php");
	}
	}

