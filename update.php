<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}
	extract($_POST);

	$query = "UPDATE tbl_users SET fname = '$fname ', lname = '$lname', ic = '$ic' , address = '$address' , email = '$email' WHERE user_id=".$_SESSION['userSession'];

	$result = mysqli_query($DBcon, $query) or die("Could not execute query in update.php");

	if ($result) {		echo "<script type = 'text/javascript'> window.location = 'home.php'</script>";
	}
?>