<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Afrique</title>
	
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
			<!--<img src="http://swift.bridgeitsolutions.ca/wp-content/uploads/2015/03/afriquelogo.png" alt="logo">-->
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
					<li class="active"><a href="#">Home</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="bookap.php">Book Appointment</a></li> 
					<li><a href="contactus.php">Contact Us</a></li> 
					<li><a href="signIn.php"><strong>Sign In</strong></a></li>
				  </ul>
				</div>
				<!-- /.navbar-collapse -->
			  </div>
			</nav>	
		</div>
		
	</div> <!-- end of header -->
	
	<!-- Carousel -->
	
	 <div class="container">
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			  <li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			  <div class="item active">
				<img src="img/model1.png" alt="model1" width="460" height="345">
			  </div>

			  <div class="item">
				<img src="img/model2.png" alt="model2" width="460" height="345">
			  </div>
			
			  <div class="item">
				<img src="img/model3.png" alt="model3" width="460" height="345">
			  </div>

			  <div class="item">
				<img src="img/model4.png" alt="model4" width="460" height="345">
			  </div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div>
		</div>

	
	<!-- CAROUSEL ENDING -->
	
	<!-- Main Content -->
	<div class="container">
		 <h2 class="brand-before text-center"><strong>Welcome to Afrique!</strong></h2>
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
	
	  <!-- Script to Activate the Carousel (Change as needed: smaller interval = faster speed)-->
	  <script>
		  $('.carousel').carousel({
			  interval: 5000 //changes the speed
		  })
	  </script>
	
  </body>
</html>