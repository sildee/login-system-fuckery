 <?php
    session_start();
	include '../dbh.php';
 
	$username = $_POST['uid'];
	$password = $_POST['upw'];  


	$sql = "SELECT * FROM user WHERE uid='$uid'";
	$result = mysqli_query($conn, $sql);  
	$row= mysqli_fetch_assoc($result);
	$hash_upw = $row['upw'];
	$hash = password_verify($password, $hash_upw);

	if ($hash == 0) {
		header("Location: ../index.php?error=hash");
		exit();
	} else {

 		$sql = "SELECT * FROM user WHERE uid='$username' AND upw='$hash_upw'";
		$result = mysqli_query($conn, $sql);  

		if(!$row = mysqli_fetch_assoc($result)) {
			echo "Your username or password is incorrect!";
		} else {
			$_SESSION['id'] = $row['id'];
		}

		header("Location: ../index.php");
	}