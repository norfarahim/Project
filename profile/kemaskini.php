
<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
	header("Location: home.php");
}
	include ("dbconnect.php");

	extract($_POST);

	$query = "UPDATE tbl_users SET username = '$uname', email = '$email'  WHERE id = '$id'";


	$result = mysqli_query($DBcon, $query) or die("Could not execute query in kemaskini.php");

	if ($result) {
		echo "<script type = 'text/javascript'> window.location = 'papar.php'</script>";
	}
?>