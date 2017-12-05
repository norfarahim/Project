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
							<li class="current"><a href="../event.html">Event</a></li>
							<li class="current"><a href="forum.php">Forum</a></li>
							<li class="current"><a href="../shop.php">Shop</a></li>

							<li><a href="../register.php" class="button special">Sign Up</a></li>
							<li><a href="../index.php" class="button special">Login Here</a></li>
							<li><a href="../admin/pages/index.php"  class="button"><strong><h1>admin</strong><h1></a></li>
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
$tbl_name="fanswer"; // Table name 

// Connect to server and select databse.
$conn = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($conn,"$db_name")or die("cannot select DB");

// Get value of id that sent from hidden field 
$id=$_POST['id'];

// Find highest answer number. 
$sql="SELECT MAX(a_id) AS Maxa_id FROM $tbl_name WHERE question_id='$id'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result);

// add + 1 to highest answer number and keep it in variable name "$Max_id". if there no answer yet set it = 1 
if ($rows) {
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}

// get values that sent from form 
$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];
$a_answer=$_POST['a_answer']; 

$datetime=date("d/m/y H:i:s"); // create date and time

// Insert answer 
$sql2="INSERT INTO $tbl_name(question_id, a_id, a_name, a_email, a_answer, a_datetime)VALUES('$id', '$Max_id', '$a_name', '$a_email', '$a_answer', '$datetime')";
$result2=mysqli_query($conn,$sql2);

if($result2){
echo "<BR>Successful<BR>";
echo "<a href='view_topic.php?id=".$id."'>View your answer</a>";

// If added new answer, add value +1 in reply column 
$tbl_name2="fquestions";
$sql3="UPDATE $tbl_name2 SET reply='$Max_id' WHERE id='$id'";
$result3=mysqli_query($conn,$sql3);
}
else {
echo "ERROR";
}

// Close connection
mysqli_close($conn);
?>