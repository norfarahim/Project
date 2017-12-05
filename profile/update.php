<!-- kemaskini.php -->
<!-- update data of ubah.php into DB -->

<?php
	include ("try.php");

	extract($_POST);

	$query = "UPDATE tbl_users SET username = '$uname', email = '$email' WHERE user_id = '$id'";

	$result = mysqli_query($DBcon, $query) or die("Could not execute query in kemaskini.php");

	if ($result) {
		echo "<script type = 'text/javascript'> window.location = 'index.php'</script>";
	}
?>