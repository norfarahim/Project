<!-- ubah.php -->
<!-- interface of update data -->

<?php
include ("dbconnect.php");


$query = "SELECT * FROM tbl_users WHERE username = '$uname'";
$result = mysqli_query($DBcon, $query) or die("Could not execute query in ubah.php");
$row = mysqli_fetch_array($result, MYSQL_BOTH);

$uname = $row['username'];
$fname = $row['fname'];
$lname = $row['lname'];
$ic    = $row['ic'];
$address = $row['address'];
$email = $row['email'];

@mysqli_free_result($result);
?>

<html>
<head>
	<title>Edit Profile</title>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
</head>
<body bgcolor="#FFFFFF" text="#000000">
<form method="post" action="kemaskini.php">
	First Name:
	<input type="text" name="fname" size="40" value="<?php echo $fname; ?>">
	<br>
	Last Name :
	<input type="text" name="lname" size="25" value="<><?php echo $lname;?>">
<br>
IC.No :
	<input type="text" name="ic" size="25" value="<><?php echo $ic;?>">
<br>

Address: <br>
<textarea name="address" cols="30" rows="8"><?php echo $address;?>">
	</textarea>
	Email :
	<input type="text" name="email" size="25" value="<><?php echo $email;?>">
<br>
	<br>
	<input type="hidden" name="id" value="<?php echo $id;?>">
	<input type="submit" value="Ubah">
	<input type="reset" value="Semula">
	<br>
</form>
<hr>
</body>
</html>