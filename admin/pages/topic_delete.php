<?php
include("../includes/dbconnect.php");
header("location: topic.php");

$delete_id = $_GET['del'];

$delete_query = "delete from fquestions where id='$delete_id'";

if(mysqli_query($DBcon,$delete_query)){
	
	echo "<script>alert('Deleted');</script>";
	}
	
	
	
?>