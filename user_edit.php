<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
	header("Location: home.php");
}
require_once 'dbconnect.php';

$edit_id = $_GET['edit'];

$query = "select * from tbl_users where user_id = '$edit_id'";
$result = $DBcon->query($query);
$row = mysqli_fetch_assoc($result);

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Registration Form</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>
        <body>
            <center>
                <a href="index.html"><img src="images/logo.png"></a>
            </center>
            <hr/>
            <div class="signin-form">

                <div class="container">
                    <form class="form-signin" method="post" id="register-form">

                        <h2 class="form-signin-heading">
                            <center>Edit <?php echo $row['username']; ?></center>
                        </h2>
                        <?php
                        if (isset($msg)) {
                            echo $msg;
                        }
                        ?>
                        <div class="form-group">
                            <input type="text" class="form-control" value=<?php echo $row['username']; ?> placeholder="Username" name="username" required />
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" value=<?php echo $row['fname']; ?>  placeholder="First Name" name="fname" required />
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" value=<?php echo $row['lname']; ?>  placeholder="Last Name" name="lname" required />
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" value=<?php echo $row['ic']; ?>  placeholder="IC. No" name="ic" maxlength="20" required />
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" value=<?php echo $row['address']; ?>  rows="5" placeholder="Address" name="address" required></textarea>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" value=<?php echo $row['email']; ?> placeholder="Email address" name="email" required />
                            <span id="check-e"></span>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required />
                        </div>

                        <hr />

                        <div class="form-group">
                            <button type="submit" class="btn btn-default" name="btn-signup">
                            <span class="glyphicon glyphicon-log-in"></span> &nbsp;Sign Up
                            </button>
                            <a href="index.php" class="btn btn-default" style="float:right;">Log In Here</a>
                            <center><a href="index.html" class="btn btn-default">Home</a></center>
                        </div>
                    </form>
                </div>
            </div>
        </body>
    </html>