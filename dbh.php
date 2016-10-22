<?php 

$conn = mysqli_connect("localhost", "root", "", "logintest");

if (!$conn) {
	die("ERROR NIGGA: " . mysqli_connect_error());
} /* else {
	echo "All good!";
} */ 