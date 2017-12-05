<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
  header("Location: index.php");
}
$query = "SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession'];

$result = mysqli_query($DBcon, $query) or die("Could not execute query in edit.php");
$row = mysqli_fetch_array($result, MYSQL_BOTH);

$fname = $row['fname'];
$lname = $row['lname'];
$ic = $row['ic'];
$address = $row['address'];
$email = $row['email'];

@mysqli_free_result($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 

<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="assets/css/main.css" type="text/css" />
</head>

<body class="index">


  <header id="header" class="alt">   
  <h1 id="logo">Karaoke<span>Party</span></a></h1>
 </header>

      <!-- Banner -->
        <section id="banner">

          <div class="inner">
            <img src="images/song.png" alt="" /><img src="images/sing.png" alt="" /><br>

            <br><header>Edit Detail</header>
            <form method="post" action="update.php">
            <div class="form-group">

  First Name :
  <input type="text" name="fname" class="form-control" placeholder="First Name" value="<?php echo $fname; ?>">
     </div>
 <div class="form-group">
  Last Name :
  <input type="text" name="lname" class="form-control" placeholder="Last Name" value="<?php echo $lname; ?>">
     </div>
 <div class="form-group">
IC.No :
 <input type="text" name="ic" class="form-control" placeholder="IC.No" value=" <?php echo $ic; ?>">
     </div>

     <div class="form-group">

  Address :
<textarea name="address" class="form-control" placeholder="Address" value=" <?php echo $address; ?>"></textarea>
     </div>
     <div class="form-group">

  Email :
  <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>">
     </div>

  <input type="hidden" name="user_id" value="<?php echo $_SESSION['userSession'];?>">
  <input type="submit" value="Save">
  
  <br>
  </form>
 </article>            
              <footer>
                <ul class="copyright">
            <li>&copy;KaraokeParty</li>
              </ul>
                </footer>


</div>
 </section>
</body>
</html>