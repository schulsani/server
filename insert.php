<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "admin", "admin", "schulsani");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$raum= $_REQUEST['field1'];
		$unfall= $_REQUEST['field2'];

		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO college VALUES ('$raum',
			'$unfall')";
		if(mysqli_query($conn, $sql)){
			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
   <head>
    <link rel="stylesheet" href="home.css">
    </text>Daten wurden gesendet </text>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
   </head>
</html>
