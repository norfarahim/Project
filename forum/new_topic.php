<!DOCTYPE html>
<html>
<head>
<title>Add New Topic</title>
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
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form id="form1" name="form1" method="post" action="add_new_topic.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3" bgcolor="#676474"><strong>Create New Topic</strong> </td>
</tr>
<tr>
<td width="14%" bgcolor="#676474"><strong>Topic</strong></td>
<td width="0">:</td>
<td width="100%"><font color="#000000"><input name="topic" type="text" id="topic" size="50" /></font></td>
</tr>
<tr>
<td valign="top" bgcolor="#676474"><strong>Detail</strong></td>
<td valign="top">:</td>
<td><font color="#000000"><textarea name="detail" cols="50" rows="3" id="detail"></textarea></font></td>
</tr>
<tr>
<td bgcolor="#676474"><strong>Name</strong></td>
<td>:</td>
<td><font color="#000000"><input name="name" type="text" id="name" size="50" /></font></td>
</tr>
<tr>
<td bgcolor="#676474"><strong>Email</strong></td>
<td>:</td>
<td><font color="#000000"><input name="email" type="text" id="email" size="50"/></font></td>
</tr>
<tr>
<td bgcolor="#676474">&nbsp;</td>
<td bgcolor="#676474">&nbsp;</td>


<td class="buttons vertical" bgcolor="#676474"><input type="submit" name="Submit" value="Submit" /> 
<input class="buttons vertical" type="reset" name="Submit2" value="Reset" /></td>

</tr>
</table>
</td>
</form>
</tr>
</table>
</body>
</html>