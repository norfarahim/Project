<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
             <img src="../../images/logo.png" alt="" />
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="topic.php"><i class="fa fa-table fa-fw"></i>View All Topics</a>
                        </li>
                          <li>
                            <a href="user.php"><i class="fa fa-table fa-fw"></i> View All User</a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list-ul fa-5x"></i>
                                </div>
                                 <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $total_question; ?></div>
                                    <div>All Topics!</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $total_users; ?></div>
                                    <div>All Users!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                          
                        </a>
                    </div>
                </div>
               
            </div>
			
			
			
           

<!--Post Section Open-->

<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
	<div class="panel-heading">
		<h2>All Topics</h2>
	</div>
 <div class="panel-body">
	<div class="dataTable_wrapper">
		<table class="table table-striped table-bordered table-hover" id="dataTables-example">
			<thead>
				<tr>
					<th>S.No.</th>
					<th>Topic</th>
					<th>Detail</th>
                    <th>Name</th>
                    <th>Email</th>
					<th>Delete</th>
				</tr>
			</thead>


	<?php
include("../includes/dbconnect.php");
$i=1;


	$query="select * from fquestions";
	$run=mysqli_query($DBcon,$query);
	
while($row=mysqli_fetch_array($run)){
	$id = $row['id'];
	$topic = $row['topic'];
	$detail = $row['detail'];
    $name = $row['name'];
    $email = $row['email'];
?>
	
	
	
	 <tbody>
        <tr class="gradeC">
             <td><?php echo $i++; ?></td>
			 <td><?php echo $topic; ?></td>
			<td><?php echo $detail; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $email; ?></td>
			<td><a href="topic_delete.php?del=<?php echo $id;?>"><button type="button" class="btn btn-success"><span class="fa fa-trash-o">&nbsp;</span>Delete</button></a></td>
		</tr>
 </tbody>
                                
<?php } ?>

</table>
</div>
</div>
</div>
</div>
</div>
</div>
<!--Post Section Close-->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>


</body>

</html>
