 <?php
 	session_start();

	include '../dbh.php';
 
	$username = $_POST['uid'];
	$password = $_POST['upw'];  
 
	$sql = "INSERT INTO user (`uid`, `upw`) 
					VALUES ('$username', '$password')";
	$result = mysqli_query($conn, $sql);  

	header("Location: ../index.php");