<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Karaoke Party</title>
    <meta charset="utf-8">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css" />
     <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container{width: 100%;padding: 50px;}
    p{color: #34a853;font-size: 18px;}
    </style>
</head>
</head>
 <body class="left-sidebar">
        <div id="page-wrapper">

            <!-- Header -->
                <header id="header">
                    <h1 id="logo"><a href="index.html">Karaoke<span>Party</span></a></h1>
                    <nav id="nav">
                        <ul>
                        <li class="current"><a href="index.html">Event</a></li>
                        <li class="current"><a href="index.html#main">Forum</a></li>
                        <li class="current"><a href="shop.php">Shop</a></li>
                            <li><a href="register.php" class="button special">Sign Up</a></li>
                            <li><a href="index.php" class="button special">Login Here</a></li>
                        </ul>
                    </nav>
                </header>

	<div class="container">
	<br>
    <h1><strong>Order Status</strong></h1>
    <p><strong>Your order has submitted successfully. Order ID is #<?php echo $_GET['id']; ?></strong></p>
</div>
			</div>		
		</div>
		<!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.dropotron.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollgress.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="assets/js/main.js"></script>

	<center><img src="images/karaoke.gif-c200.gif" alt="" /></center>
</body>
</html>