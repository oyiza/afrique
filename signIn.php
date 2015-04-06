<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In - Afrique</title>
	
	<!-- Style.css -->
	 <link rel="stylesheet" type="text/css" href="css/style.css">
	 
	  <!-- bootstrap-social -->
	  <link rel="stylesheet" type="text/css" href="css/bootstrap-social.css">
	 
	  <!-- Latest compiled and minified CSS -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	  
	  <!-- Font Awesome CDN -->
	  <link rel="fontAwesome" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  </head>
  <body>
  <!-- SPACER -->
  <div class="container">
	<br/>
  </div>
  
	<!-- Header -->
	<div class="container">
		<div class="brand" id="logo">
			<p>Afrique</p>	
		</div>
		
		<!-- MENU BAR -->
		<div>
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				  <!-- Brand and toggle get grouped for better mobile display -->
				  <div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
					  </button>
					  <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
					  <a class="navbar-brand" href="home.php">Afrique</a>
				  </div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a href="home.php">Home</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="bookap.php">Book Appointment</a></li> 
					<li><a href="contactus.php">Contact Us</a></li> 
					<li class="active"><a href="#"><strong>Sign In</strong></a></li>
				  </ul>
				</div>
				<!-- /.navbar-collapse -->
			  </div>
			</nav>	
		</div>
		
	</div> <!-- end of header -->
	
	<!-- Main Content -->
	<!-- Sign In form -->
	<div class="container-fluid">
		 <div class="container">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title form-head">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Sign In
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body">
							<div class="col-xs-3 social-buttons">
								<a class="btn btn-block btn-social btn-twitter">
									<i class="fa fa-twitter"></i> Sign in with Twitter
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Sign Up form -->
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo">
						<h4 class="panel-title form-head">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Sign Up
							</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						<div class="panel-body">
							<form role="form">
								<div class="row">
									<div class="col-xs-3"></div>
									<div class="form-group col-xs-6">
										<label>First Name</label>
										<input type="text" class="form-control" placeholder="firstname">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-3"></div>
									<div class="form-group col-xs-6">
										<label>Last Name</label>
										<input type="text" class="form-control" placeholder="lastname">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-3"></div>
									<div class="form-group col-xs-6">
										<label>Phone Number</label>
										<input type="number" class="form-control" placeholder="phone number">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-3"></div>
									<div class="form-group col-xs-6">
										<label>Hairstyle</label>
										<input type="text" class="form-control" placeholder="">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-3"></div>
									<div class="form-group col-xs-6">
										<label>Number of clients</label>
										<input type="number" class="form-control" placeholder="">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-3"></div>
									<div class="form-group col-xs-6">
										<label>Are you buying any products?</label>
										<input type="text" class="form-control" placeholder="">
									</div>
								</div>
								<div class="form-group col-lg-12">
									<button type="submit" class="btn btn-default">Submit</button>
								</div>
								<div class="row">
									
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		 </div>
	</div>
	
	<!-- Footer -->
	  <footer>
        <div class="container">
			  <div class="row">
				  <div class="col-lg-12 text-center">
					  <p>Copyright &copy; Afrique 2015</p>
				  </div>
			  </div>
        </div>
	  </footer>
	
	
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
  </body>
</html>