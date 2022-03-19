<!DOCTYPE html>
<html>

<head>
	<title>
	</title>
	<link rel="stylesheet" type="text/css" href="stylepage.css">
</head>

<body>
	<h1>Student Marks Info Database</h1>

	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	$conn = mysqli_connect($servername, $username, $password);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "CREATE DATABASE IF NOT EXISTS Assignment3;";
	if (mysqli_query($conn, $sql)) {
		echo "<b> Database created successfully </b>" . "<br>";
	} else {
		echo "Error creating database: " . mysqli_error($conn);
	}
	mysqli_close($conn);




	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Assignment3";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}


	$sql = "CREATE TABLE student
		( 
			sname varchar(15), 
			id varchar(15), 
			qmarks int,
			amarks int,
			fmarks int,
			
		)";

	if (mysqli_query($conn, $sql)) {
		echo "<b>Successfully table created </b>" . "<br>";
	} else {
	
	}



	$sql = "INSERT INTO student (sname,id,qmarks,amarks,fmarks) VALUES ('$_POST[sname]', '$_POST[sId]', '$_POST[Quizmarks]', '$_POST[Attmarks]', '$_POST[fmarks]')";
	if (mysqli_query($conn, $sql)) {
		echo " <b>Successfully stored new data </b>" . "<br>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}



	$sql = "SELECT * FROM student";
	$result = mysqli_query($conn, $sql);
	echo "<table border='5'>";
	echo "<tr>";
	echo "<th>Student name</th><th>Student ID</th><th>Quiz Marks</th> <th>Attendance marks</th><th>SemesterFinal Marks</th>";
	echo "</tr>";

	if (mysqli_num_rows($result) > 0) {

		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>" . $row['sname'] . "</td>";
			echo "<td>" . $row['id'] . "</td>";
			echo "<td>" . $row['qmarks'] . "</td>";
			echo "<td>" . $row['amarks'] . "</td>";
			echo "<td>" . $row['fmarks'] . "</td>";

			echo "</tr>";
		}
	} else {
		echo "0 results";
	}
	echo "</table>";
	mysqli_close($conn);

	?>
</body>

</html>