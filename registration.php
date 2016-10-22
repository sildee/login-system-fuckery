 <?php
 
	include 'dbh.php';
 
	$username = $_POST['uid'];
	$password = $_POST['upw'];  
 
	$sql = "INSERT INTO user (uid, pwd) 
					VALUES ('$username', '$password')";
	$result = mysqli_query($conn, $sql);  

	//header("Location: index.php");