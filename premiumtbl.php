<html>
<head>
	<title>	
	</title>
</head>
<body>

	<?php 
		$servername = "localhost"; 
		$username = "root"; 
		$password = "";
		$dbname = "myDB1000"; 
		// Create connection 
		$conn = mysqli_connect($servername, $username, $password, $dbname); 
		// Check connection 
		if (!$conn) 
		{ 
			die("Connection failed: " . mysqli_connect_error()); 
		} 

		// sql to create table 
		$sql = "CREATE TABLE premiumInfo
		( 


			FName varchar(20),
            LName varchar(20),

            PhoneNo  varchar(50),
            Email varchar(50),
            Trainers varchar(20),
			Gender    varchar(20) ,       
            Age int,
            Addresss varchar(50),
			Datee date

    --         Firstname varchar(20),
    --   Lastname varchar(20),
    --   Age int


		)"; 

		if (mysqli_query($conn, $sql)) 
		{ 
			echo "Table premium package created successfully"; 
		} 
		else 
		{ 
			echo "Error creating table: " . mysqli_error($conn); 
		} 
		mysqli_close($conn); 
	?>

</body>
</html>