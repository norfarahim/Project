<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
	header("Location: home.php");
}
require_once 'dbconnect.php';

if(isset($_POST['btn-signup'])) {

	$uname = strip_tags($_POST['username']);
	$fname = strip_tags($_POST['fname']);
	$lname = strip_tags($_POST['lname']);
	$ic = strip_tags($_POST['ic']);
	$address = strip_tags($_POST['address']);
	$email = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);
	
	$uname = $DBcon->real_escape_string($uname);
	$fname = $DBcon->real_escape_string($fname);
	$lname = $DBcon->real_escape_string($lname);
	$ic = $DBcon->real_escape_string($ic);
	$address = $DBcon->real_escape_string($address);
	$email = $DBcon->real_escape_string($email);
	$upass = $DBcon->real_escape_string($upass);
	
	$hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
	
	$check_email = $DBcon->query("SELECT email FROM tbl_users WHERE email='$email'");
	$count=$check_email->num_rows;
	
	if ($count==0) {
		
		$query = "INSERT INTO tbl_users(username,fname,lname,ic,address,email,password) VALUES('$uname','$fname','$lname','$ic','$address','$email','$hashed_password')";

		if ($DBcon->query($query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Successfully registered !
					</div>";
		}else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error while registering !
					</div>";
		}
		
	} else {
		
		
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Sorry email already taken !
				</div>";
			
	}
	
	$DBcon->close();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Form</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link rel="stylesheet" href="style.css" type="text/css" />
<script>
	var generateID = function () {
		var firstName = document.getElementById("fname").value.split(" ");
		var lastName = document.getElementById("lname").value.split(" ");
		var icNo = document.getElementById("ic").value;


		if(firstName && lastName && icNo) {
			var lastFourIC = icNo.substr(icNo.length - 4);
			var a = "";

			for (var i = 0; i < firstName.length; i++) {
				a += firstName[i].charAt(0);
				
			}
			var b = lastName[lastName.length - 1];
			var c = lastFourIC;
			var d = a + b + c;

			document.getElementById("username").value = d;
			document.getElementById("username-hidden").value = d;
		} else
		{
			alert("Please fill up First Name, Last Name and IC no.");
		}
	};
</script>

</head>
<body>
   <center><a href="index.html"><img src="images/logo.png"></a></center><hr/>
<div class="signin-form">

	<div class="container">      
       <form class="form-signin" method="post" id="register-form">
     
        <h2 class="form-signin-heading"><center>CREATE ACCOUNT</center></h2>
        
        <?php
		if (isset($msg)) {
			echo $msg;
		}
		?>
          
        <div class="form-group">
        	<input type="text" class="form-control" id="username" placeholder="Username"  disabled />
        </div>

		<input type="hidden" id="username-hidden" name="username">

        <div class="form-group">
        	<input type="text" class="form-control" placeholder="First Name" name="fname" id="fname" required  />
        </div>

        <div class="form-group">
        	<input type="text" class="form-control" placeholder="Last Name" name="lname" id="lname" required  />
        </div>

        <div class="form-group">
        	<input type="text" class="form-control" placeholder="IC. No" name="ic"  id="ic" maxlength="20" required  />
        </div>

		<div>Generate ID for Username</div>

		<div class="form-group">
			<input id="clickMe" type="button" value="Generate ID" onclick="generateID();" />
		</div>

        <div class="form-group">
		<textarea class="form-control" rows="5" placeholder="Address" name="address" required ></textarea>
        </div>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" required  />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required  />
        </div>
        
     	<hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-signup">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp;Sign Up
			</button>
            <a href="index.php" class="btn btn-default" style="float:right;">Log In Here</a>
     	<center><a href="index.html" class="btn btn-default" >Home</a></center>
        </div> 
      
      </form>

    </div>
    
</div>

</body>
</html>