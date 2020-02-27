<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Edwin Onywoki">
    
    <link rel='shortcut icon' href='../favicon.ico' type='image/x-icon'/>
    <link rel = "icon" type = "image/png" href = "../assets/img/nakuruCountyLogo.jpg">

<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Nakuru County Projects Management System</title>
    
    <!-- Custom Fonts -->

    <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../assets/DataTables/datatables.min.css"/>
    <!-- <script type="text/javascript" src="../assets/DataTables/DataTables/datatables.min.js"></script> -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/bootstrap/js/bootstrap.min.js" rel="stylesheet">
   <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    
    <link href="../assets/DataTables/Datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/colReorder.bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <link href="../assets/css/simptip.css" rel="stylesheet">
    <!--link href="../assets/css/dataTables.colVis.css" rel="stylesheet"-->
    
    <!-- MetisMenu CSS -->
    <link href="../assets/metismenu/dist/metisMenu.min.css" rel="stylesheet">
    
    <!-- Timeline CSS -->
    <link href="../assets/dist/plugins/timeline.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="../assets/css/sb-admin-2.css" rel="stylesheet">

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <style type="text/css">
        .panel {
    border: 1px solid rgb(127, 0, 0);
    border: 1px solid rgba(204, 204, 204, 0.5);
    -webkit-background-clip: padding-box; /* for Safari */
    background-clip: padding-box; /* for IE9+, Firefox 4+, Opera, Chrome */
}
    </style>

    
    <!-- DataTables CSS library -->
<link rel="stylesheet" type="text/css" href="../assets/DataTables/datatables.min.css"/>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- DataTables JS library -->
<script type="text/javascript" src="../assets/DataTables/datatables.min.js"></script>

	<style>
	.ficha{
		display: none;
	}
	.onyesha{
		display: block;
	}
	</style>	<script type="text/javascript" language="javascript" >
			$(document).ready(function() {

				var dataTable =  $('#memListTable').DataTable( {
				processing: true,
        		language: {
                    "processing": "<img style='width:50%; height:50%;' src='../img/loading.gif'/>"
                },
				serverSide: true,
				lengthMenu:[[10,50,100,500,1000],[10,50,100,500,1000]],
				ajax: "getData.php", // json datasource

				} );

				$("#project-grid_filter").css("display","none");  // hiding global search box
				$("#project-grid_length").css("display","none");  // hiding lengthMenu

				$('.search-input-text').on( 'keyup click', function () {   // for text boxes
					var i =$(this).attr('id');  // getting column index
					var v =$(this).val();  // getting search input value
					dataTable.columns(i).search(v).draw();
				} );
				$('.search-input-select').on( 'change', function () {   // for select box
					var i =$(this).attr('id');
					var v =$(this).val();
					dataTable.columns(i).search(v).draw();
				} );
			} );

		</script>
</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Makueni County Projects Management System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <!--a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a data-toggle="modal" href="#modalChangePassword"><i class="fa fa-lock fa-fw"></i> Change Password</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul-->
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
			<li class="text-center">
				<img src="img/find_user.png" class="user-image img-responsive"/>
			</li>
            <li>
                <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
			<li>
                <a href="projects.php"><i class="fa fa-bar-chart-o fa-fw"></i> Projects</a>
            </li>
            <li>
            	<a href="#myModal" data-toggle="modal"><i class="fa fa-envelope fa-fw"></i> Give Feedback</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Reports<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="projects_by_sub_county.php">Projects by Sub-county</a>
                    </li>
					<li>
                        <a href="projects_by_ward.php">Projects by Ward</a>
                    </li>
					<li>
                        <a href="projects_by_sub_ward.php">Projects by Sub-ward</a>
                    </li>
					<li>
						<a href="#">Projects by status<span class="fa arrow"></span></a>
							<ul class="nav nav-third-level">
								<li>
								    <a href="works_ongoing.php">Works ongoing</a>
								</li>
								<li>
								    <a href="stalled.php">Delayed</a>
								</li>
								<li>
									<a href="complete.php">Complete</a>
								</li>
							</ul>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
			<!-- Projects per Sub-county Bar Chart -->
                <div class="col-lg-12">
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Total Projects per Sub-county
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <iframe src="../charts/index.php" style="border:0; height: 450px; width:100%;"></iframe>
                                </div>
                                <!-- /.col-lg-12 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
			</div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Below is a list of sub-counties,click on the drop down arrow to select a sub county.</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<select id="3"  class="search-input-select">
							<option value="">Select Sub-county</option>
								<option value= 'Makueni' >Makueni</option><option value= 'Mbooni' >Mbooni</option><option value= 'Kilome' >Kilome</option><option value= 'Kaiti' >Kaiti</option><option value= 'Kibwezi West' >Kibwezi West</option><option value= 'Kibwezi East' >Kibwezi East</option><option value= 'All Sub-counties' >All Sub-counties</option>							</select> <strong>Sub-county</strong>

                            <div class="table-responsive">
							<table class="table table-striped table-bordered table-condensed" id="project-grid">
								<thead>
									<tr>
										<th>Project</th>
										<th>Department</th>
										<th>Ward</th>
										<th>Location</th>
										<th>Status</th>
										<th>Financial Year</th>
										<th>Budget</th>
									</tr>
								</thead>
								<thead>
									<tr>
										<td><input type="text" id="1" class="search-input-text"></td>
										<td><input type="text" id="2" class="search-input-text"></td>
										<td><input type="text" id="4" class="search-input-text"></td>
										<td><input type="text" id="5" class="search-input-text"></td>
										<td><input type="text" id="6" class="search-input-text"></td>
										<td><input type="text" id="7" class="search-input-text"></td>
										<td><input type="text" id="8" class="search-input-text"></td>
									</tr>
								</thead>
							</table>
							</div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
		<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 id="myModalLabel">We'd Love to Hear From You</h3>
			</div>
			<div class="modal-body">
				<form class="form-horizontal col-sm-12" action="save_feedback.php" method="post">
					<div class="form-group"><label>Name</label><input name="name" value="" class="form-control required" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text" required></div>
					<div class="form-group"><label>Message</label><textarea  name="message" id="message" value="" class="form-control" placeholder="Your message here.." data-placement="top" data-trigger="manual" required></textarea>Remaining: <b><span class="remaining">150</span></b></div>
					<div class="form-group"><label>E-Mail</label><input name="email"  value="" class="form-control email" placeholder="email@you.com (Optional)" data-placement="top" data-trigger="manual" data-content="Must be a valid e-mail address (user@gmail.com)" type="text"></div>
					<div class="form-group"><label>Phone</label><input name="phone"  value="" class="form-control phone" placeholder="+254...(So that we can contact you)" data-placement="top" data-trigger="manual" data-content="Must be a valid phone number" type="text" required></div>
					<input type="hidden" value="" name="project_id" class="project_id"/>
					<div class="form-group"><button type="submit" name="save" class="btn btn-success pull-right">Send</button></div>
				</form>
			</div>				
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
			</div>
		</div>
	</div>
</div>
	
    </div>
    <!-- /#wrapper -->
<footer class="footer">
  <div class="panel-footer">
    Copyright &copy; 2020 <a href="https://www.makueni.go.ke">Government of Makueni County </a>
  </div>
</footer>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/595baccde9c6d324a4738bf5/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>

</html>
