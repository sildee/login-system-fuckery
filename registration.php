<?php
include 'header.php';
?>

<?php
	if(isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	} else {
		echo "You are not logged in!";
	}
?>

<br><br><br>
<?php
if(isset($_SESSION['id'])) {
	echo "You are already logged in!";
} else {
	echo "<form action='includes/registration.inc.php' method='POST'> 
	        <input type='text' name='uid'' placeholder='username'> <br>
	        <input type='password'' name='upw' placeholder='password'> <br>
	        <button type ='submit'> Sign up! </button>
    </form>";

}	
?>

	</body>
</html>