<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - Afrique</title>
	
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
					<li class="active"><a href="#">Contact Us</a></li> 
					<li><a href="signIn.php"><strong>Sign In</strong></a></li>
				  </ul>
				</div>
				<!-- /.navbar-collapse -->
			  </div>
			</nav>	
		</div>
		
	</div> <!-- end of header -->
	
	<!-- Main Content -->
	<div class="container">

		<div class="text-center form center-div" id="booking">
			<br/>
			<h2 class="intro-text text-center form-head"><strong>Booking Form</strong></h2>
		<form class="form-horizontal" role="form" method="post" action="home.php">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Name</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
				</div>
				<div class="col-sm-2"></div>
				<br/>
			</div>
			<div class="form-group">
				<label for="email" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-8">
					<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
				</div>
				<div class="col-sm-2"></div>
			</div>
			<div class="form-group">
				<label for="message" class="col-sm-2 control-label">Message</label>
				<div class="col-sm-8">
					<textarea class="form-control" rows="4" name="message"></textarea>
				</div>
				<div class="col-sm-2"></div>
			</div>
			<div class="form-group">
				<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
				</div>
				<div class="col-sm-2"></div>
			</div>
			<div class="form-group">
				<div class="col-sm-8 col-sm-offset-2">
					<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
				</div>
				<div class="col-sm-2"></div>
			</div>
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<!-- Will be used to display an alert to the user-->
				</div>
			</div>
		</form>
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