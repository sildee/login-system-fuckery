 <?php
    session_start();
	include '../dbh.php';
 
	$username = $_POST['uid'];
	$password = $_POST['upw'];  
 
	$sql = "SELECT * FROM user WHERE uid='$username' AND upw='$password'";
	$result = mysqli_query($conn, $sql);  

	if(!$row = mysqli_fetch_assoc($result)) {
		echo "Your username or password is incorrect!";
	} else {
		$_SESSION['id'] = $row['id'];
	}

	header("Location: ../index.php");