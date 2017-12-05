<?php
include("../includes/dbconnect.php");
header("location: user.php");

$delete_id = $_GET['del'];

$delete_query = "delete from tbl_users where user_id='$delete_id'";

if(mysqli_query($DBcon,$delete_query)){
	
	echo "<script>alert('Deleted');</script>";
	}
	
	
	
?>