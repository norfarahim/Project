<!DOCTYPE HTML>
<html>
	<head>
		<title>Karaoke Party</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body class="index">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><a href="../index.html">Karaoke<span>Party</span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="event.html">Event</a></li>
							<li class="current"><a href="forum.php">Forum</a></li>
							<li class="current"><a href="shop.php">Shop</a></li>

							<li><a href="register.php" class="button special">Sign Up</a></li>
							<li><a href="index.php" class="button special">Login Here</a></li>
							<li><a href="admin/pages/index.php"  class="button"><strong><h1>admin</strong><h1></a></li>
						</ul>
					</nav>
				</header>
					<section id="banner">
					<div class="inner">
<img src="../images/karaoke.gif-c200.gif">

<?php

$host="localhost"; // Host name 
$username="id1731504_orfa"; // Mysqli username 
$password="mizansayang5"; // Mysqli password 
$db_name="id1731504_project"; // Database name 
$tbl_name="fquestions"; // Table name 


// Connect to server and select database.
$conn =mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($conn,"$db_name")or die("cannot select DB");

// get data that sent from form 
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];

$datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result=mysqli_query($conn,$sql);


if($result){
echo "<BR>Successful<BR>";
echo "<a href=forum.php>View your topic</a>";
}
else {
echo "ERROR";
}
mysqli_close($conn);
?>
</section>
</div>