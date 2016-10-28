<?php
include 'header.php';
?>

<?php
	if(isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	} else {
		echo '<h3 style="text-align:center; margin-top:90px; font-family:Arial;"> You are not logged in! </h3>';
	}
?>

<br><br><br>
<div id="regform">
<?php

	$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ;
	if(strpos($url, 'error=empty') !== false){
		echo "You must fill in all the fields!";
	} elseif(strpos($url, 'error=duplicate_username') !== false) {
		echo "An account with this username already exists!";
	}

if(isset($_SESSION['id'])) {
	echo "You are already logged in!";
} else {
	echo "<form action='includes/registration.inc.php' method='POST'> 
	        <input type='text' name='uid' placeholder='username'> <br>
	        <input type='password' name='upw' placeholder='password'> <br>
	        <button type ='submit'> Sign up! </button>
    </form>";

}	
?>
</div>
	</body>
</html>