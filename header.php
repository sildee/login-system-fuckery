<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-12">
<Title> Index </Title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <?php
                if(isset($_SESSION['id'])) {
		            echo "<form action='includes/logout.inc.php'>
	                        <button>Sign Out</button>
                    </form>";
	            } else {
		                echo "<form action='includes/login.inc.php' method='POST'>
	                            <input type='text' name='uid' placeholder='username'>
	                            <input type='password' name='upw' placeholder='password'>
	                            <button type ='submit'> LOGIN </button>
                        </form>";
	            }

            ?>
            <li><a href="registration.php">Register</a></li>

        </ul>
    </nav>
</header>