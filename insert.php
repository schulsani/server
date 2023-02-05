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
		$raum = $_REQUEST['field1'];
		$unfall = $_REQUEST['field2'];

		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO college (raum, unfall) VALUES ('$raum',
			'$unfall')";
		
		
		if(mysqli_query($conn, $sql)){


			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
	
		
		// Close connection
		mysqli_close($conn);
		$conn = mysqli_connect("localhost", "admin", "admin", "schulsani");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)


		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO alarm (alarm) VALUES ('on')";
		
		
		if(mysqli_query($conn, $sql)){


			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
	
		
		// Close connection
		mysqli_close($conn);
		$conn = mysqli_connect("localhost", "admin", "admin", "schulsani");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)


		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO status (status) VALUES ('Wartet auf Bestätigung ...')";
		
		
		if(mysqli_query($conn, $sql)){


			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
	
		
		// Close connection
		mysqli_close($conn);

         
        header('Location: /finish.php');
// or die();
        exit();

        



?>

