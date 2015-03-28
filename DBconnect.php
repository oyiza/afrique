<!DOCTYPE html>

<html>
	<head>
	</head>
	<body>
		<?php
		    $servername="lovett.usask.ca";
		    $username="cmpt350_pie654";
		    $password="h5dvo6j7zt";
			$dbname="cmpt350_pie654";
			
		    $conn = new mysqli($servername, $username, $password, $dbname);

		    if($conn->connect_error)
				die("Connection failed: ".$conn->connect_error);
		    else
				echo "Connected successfully</br>";
			
			$sql = "";
			
			//if($conn->query($sql) == TRUE)
				//echo "Table AddressBook created succefully";
			//else
				//echo "Error creating table: ".$conn->error;
			
		 ?> 
	</body>
</html>