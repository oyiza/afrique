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
	<!-- Header -->
	<div class="container">
		<div class="brand" id="logo">
			<p>Afrique</p>	
		</div>
	
	<!-- Main Content -->
	<?php
		$servername="lovett.usask.ca";
		$username = "cmpt350_pie654";
		$dbname = "cmpt350_pie654";
		$password = "h5dvo6j7zt";
		
		$conn = new mysqli($servername,$username,$password,$dbname);
		
		if($conn->connect_error){
			die("Connection failed: ".$conn->connect_error);
		}else{
			
		}
		
		$sql = "INSERT INTO `Customers` ( firstname, lastname, email, password, phone )
		VALUES
		(' ".$_POST['fname']." ', ' ".$_POST['lname']." ', ' ".$_POST['email']." ', ' ".$_POST['pwd']." ', ' ".$_POST['number']." ' )";
		
		if (!mysqli_query($conn,$sql)) {
			die('Error: ' . mysqli_error($conn));
		}
		echo "Successful sign up";
		mysqli_close($conn);
		
		/*if($conn->query($sql) == TRUE)
		echo "<div class='alert alert-success' role='alert'><h1>Sign up successful!</h1></br> You are being redirected
		<a href='home.php'alert-link'>Home.</a>
		</div>";
		else
		echo "<div class='alert alert-danger' role='alert'>Error could not sign up
		</div><a href='home.php'alert-link>Go Home.</a>";*/
		
		header( 'refresh:3; url=home.php' );
	?>
	
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