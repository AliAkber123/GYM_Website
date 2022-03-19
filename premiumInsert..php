<!DOCTYPE html>
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
		if(!$conn) 
		{ 
			die("Connection failed: " . mysqli_connect_error()); 
		} 



		 $sql = "INSERT INTO premiumInfo (FName,	LName,	PhoneNo,	Email,	Trainers,	Gender,	Age,	Addresss,Datee	) VALUES ('$_POST[fn54321]', '$_POST[ln12345]', '$_POST[pn67890]','$_POST[em09876]','$_POST[Tnr55555]','$_POST[Gdr44444]','$_POST[ge12345]','$_POST[adrs12345]','$_POST[date112233]')";
		if (mysqli_query($conn, $sql)) 
		{ 
			echo "You successfully registered to our Premium Package </br> ";
			$s1=strtotime("+12 months");
			$s2=date("d-m-y",$s1);
			echo "Expire date=$s2 </br>"; 
			echo "Best wishes for your new journey";
			 
		} 
		else 
		{ 
			echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
		} 

		mysqli_close($conn); 
         


	?>
</body>
</html>