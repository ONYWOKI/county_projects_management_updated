<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>County Projects Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
    <!-- MetisMenu CSS -->
    <!-- <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet"> -->

    <!--Notify CSS -->
		<link href="css/plugins/notify/prettify.css" rel="stylesheet">
        <link href="css/plugins/notify/notify.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    <!-- <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bootstrap/js/bootstrap.min.js" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--  [if lt IE 9]> -->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!-- <![endif] -->

	<!-- Do not remove. Can't access the header.-->
	<style>
	.ficha{
		display: none;
	}
	.onyesha{
		display: block;
	}
	</style>
	
	<!-- jQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="js/plugins/metisMenu/metisMenu.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="js/sb-admin-2.js"></script>

	<script src="js/plugins/notify/prettify.js"></script>
	<script src="js/plugins/notify/notify.js"></script>
	<script src="js/jquery.backstretch.js"></script>
	
	<!-- sweetalert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
            <div class="login-panel panel panel-default" style ="border: 5px solid white; border-radius: 5px; opacity: 0.8;">
                <div class="panel-heading" style="background: #C90000; padding: 2px;">
                    <img src="img/find_user.png" class="user-image img-responsive"/>
                </div>
                <div class="panel-body">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign in here</h3>
                </div>
                   <form type="text" method="post" action="" id="login-form" autocomplete="off">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="text" pattern="^[a-zA-Z.]+$" autofocus required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
							</div>
                            <input type="submit" name="login" value="LOG IN" class="btn btn-lg btn-success btn-block"/>
                        </fieldset>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>
<div id="wrapper">
	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: #C71585">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
                <a class="navbar-brand" href="#" style="color: white">County Projects Monitoring System</a>
		</div>
		<!-- /.navbar-header -->
	</nav>
    <div class="container">
        <div class="row">
        
        <!-- Start Welcome Message -->
        
        <div class="col-md-4 col-md-offset-8">
                <div class="login-panel panel panel-default" style ="border: 5px solid white; border-radius: 5px; opacity: 0.8;">
                    <div class="panel-heading" style="background: #C71585; padding: 2px; ">
                        <img src="assets/img/nakuruCountyLogo.jpg" class="img-responsive"/>
                    </div>
                    <div class="panel-body">
                        <strong>What can I do in the County Projects Management System?</strong><br/>
                        Once you enter the system, you will be able to:<br/>
                        <i class="fa fa-check" aria-hidden="true" style="color: blue"></i> View all the projects<br/>
                        <i class="fa fa-check" aria-hidden="true" style="color: green"></i> See project details<br/>
                        <i class="fa fa-check" aria-hidden="true" style="color: orange"></i> Generate Charts and Reports<br/>                      
                    </div>
                    <div class="panel-footer"><a href="pages/indexProjects.php" ><img src="assets/img/user.jpg" style="width:24px; height:24px" title="Proceed as a Guest" alt="">Proceed as a Guest</a></div>            
                    <div class="panel-footer"><a href="#" data-toggle="modal" data-target="#myModal"><img src="assets/img/admin.jpg" style="width:24px; height:24px" title="Sign in for Admin Access" alt=""> Sign in for Admin Access</a></div>   
                    </div>  
                </div>
            </div>
        </div>
    </div>
 <!-- End Welcome Message -->   

<script>
	$.backstretch([
		"img/agric.jpg",
		"img/emali.jpg",
		"img/makongo.jpg"
		], {
		fade: 750,
		duration: 4000
	});

</script>

</body>
</html>