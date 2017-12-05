<?php

$host="localhost"; // Host name 
$username="id1731504_orfa"; // Mysqli username 
$password="mizansayang5"; // Mysqli password 
$db_name="id1731504_project"; // Database name 
$tbl_name="fquestions"; // Table name 

// Connect to server and select databse.
$conn = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($conn,"$db_name")or die("cannot select DB");

// get value of id that sent from address bar 
$id=$_GET['id'];
$sql="SELECT * FROM $tbl_name WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result);
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
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000000">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#000000">
<tr>
<td bgcolor="#9183CD"><strong><?php echo $rows['topic']; ?></strong></td>
</tr>

<tr>
<td bgcolor="#9183CD"><?php echo $rows['detail']; ?></td>
</tr>

<tr>
<td bgcolor="#9183CD"><strong>By :</strong> <?php echo $rows['name']; ?> <strong>Email : </strong><?php echo $rows['email'];?></td>
</tr>

<tr>
<td bgcolor="#9183CD"><strong>Date/time : </strong><?php echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>
<BR>

<?php

$tbl_name2="fanswer"; // Switch to table "forum_answer"
$sql2="SELECT * FROM $tbl_name2 WHERE question_id='$id'";
$result2=mysqli_query($conn,$sql2);
while($rows=mysqli_fetch_array($result2)){
?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#9183CD"><strong>ID</strong></td>
<td bgcolor="#9183CD">:</td>
<td bgcolor="#9183CD"><?php echo $rows['a_id']; ?></td>
</tr>
<tr>
<td width="18%" bgcolor="#9183CD"><strong>Name</strong></td>
<td width="5%" bgcolor="#9183CD">:</td>
<td width="77%" bgcolor="#9183CD"><?php echo $rows['a_name']; ?></td>
</tr>
<tr>
<td bgcolor="#9183CD"><strong>Email</strong></td>
<td bgcolor="#9183CD">:</td>
<td bgcolor="#9183CD"><?php echo $rows['a_email']; ?></td>
</tr>
<tr>
<td bgcolor="#9183CD"><strong>Answer</strong></td>
<td bgcolor="#9183CD">:</td>
<td bgcolor="#9183CD"><?php echo $rows['a_answer']; ?></td>
</tr>
<tr>
<td bgcolor="#9183CD"><strong>Date/Time</strong></td>
<td bgcolor="#9183CD">:</td>
<td bgcolor="#9183CD"><?php echo $rows['a_datetime']; ?></td>
</tr>
</table></td>
</tr>
</table><br>

<?php
}

$sql3="SELECT view FROM $tbl_name WHERE id='$id'";
$result3=mysqli_query($conn,$sql3);
$rows=mysqli_fetch_array($result3);
$view=$rows['view'];

// if have no counter value set counter = 1
if(empty($view)){
$view=1;
$sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
$result4=mysqli_query($conn,$sql4);
}

// count more value
$addview=$view+1;
$sql5="update $tbl_name set view='$addview' WHERE id='$id'";
$result5=mysqli_query($conn,$sql5);
mysqli_close($conn);
?>

<BR>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="add_answer.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td width="18%" bgcolor="#676474"><strong>Name</strong></td>
<td width="3%" bgcolor="#676474"> : </td>
<td width="79%" bgcolor="#676474"><input name="a_name" type="text" id="a_name" size="45"></td>
</tr>
<tr>
<td bgcolor="#676474"><strong>Email</strong></td>
<td bgcolor="#676474"> : </td>
<td bgcolor="#676474"><input name="a_email" type="text" id="a_email" size="45"></td>
</tr>
<tr>
<td valign="top" bgcolor="#676474"><strong>Answer</strong></td>
<td valign="top" bgcolor="#676474"> : </td>
<td bgcolor="#676474"><textarea name="a_answer" cols="45" rows="3" id="a_answer"></textarea></td>
</tr>
<tr bgcolor="#676474">
<td bgcolor="#676474">&nbsp;</td>
<td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
<td bgcolor="#676474"><input type="submit" name="Submit" value="Submit"><br>
<input type="reset" name="Submit2" value="Reset"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>