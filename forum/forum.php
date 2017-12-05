<?php

$host="localhost"; // Host name 
$username="id1731504_orfa"; // Mysqli username 
$password="mizansayang5"; // Mysqli password 
$db_name="id1731504_project"; // Database name 
$tbl_name="fquestions"; // Table name 


// Connect to server and select databse.
$conn = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($conn,"$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

$result=mysqli_query($conn,$sql);
?>
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

					<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>

<td width="53%" align="center" bgcolor="#676474"><strong>Topic</strong></td>
<td width="15%" align="center" bgcolor="#676474"><strong>Views</strong></td>
<td width="13%" align="center" bgcolor="#676474"><strong>Replies</strong></td>
<td width="13%" align="center" bgcolor="#676474"><strong>Date/Time</strong></td>
</tr>

<?php

// Start looping table row
while($rows = mysqli_fetch_array($result)){
?>
<tr>

<td bgcolor="#9183CD"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><font color="#FFFFFFF"><?php echo $rows['topic']; ?></font></a><BR></td>
<td align="center" bgcolor="#9183CD"><?php echo $rows['view']; ?></td>
<td align="center" bgcolor="#9183CD"><?php echo $rows['reply']; ?></td>
<td align="center" bgcolor="#9183CD"><?php echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection 
}
mysqli_close($conn);
?>
</section>
</div>
</table>
<footer>
	<ul class="buttons vertical">
		<li><a href="new_topic.php" class="button fit scrolly">Create New Topic</a></li>
	</ul>
	</footer>

</body>