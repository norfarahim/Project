<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>
<!DOCTYPE html>
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
  <h1 id="logo"><a href="index.html">Karaoke<span>Party</span></a></h1>
            <nav id="nav">
            <ul>
                        <li class="current"><a href="event.html">Event</a></li>
			<li class="current"><a href="forum/forum.php">Forum</a></li>
			<li class="current"><a href="shop.php">Shop</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; Welcome, <?php echo $userRow['username'];?>!</a></li>
            <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
            </ul>
       </nav>
 </header>

      <!-- Banner -->
        <section id="banner">
          <div class="inner">
<article id="main">
            <header>
            <p>User Detail</p>
            </header>
            <br>Username : <?php echo $userRow['username']; ?>
            <br>Full Name : <?php echo $userRow['fname'], ' ' , $userRow['lname']; ?>
            <br>IC.No : <?php echo $userRow['ic']; ?>  
            <br>Address : <?php echo $userRow['address']; ?>
            <br>E-mail : <?php echo $userRow['email']; ?>

                  <ul class="buttons">
                <li><br><a href="edit.php" class="button fit">Edit Profile</a></li>
                  </ul>

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