<html>

<head>
</head>

<body>

<?php

// Create connection
$con = mysqli_connect('localhost', 'root', '');

// Check connection
if(!$con){
	
	die("Can not connect: " . mysqli_error($con));
}

// Create database
$sql = "CREATE DATABASE LATE_NIGHT_FOOD_VALLEY";
if (mysqli_query($con, $sql)) {
    echo "Database created successfully";
} else echo "Error creating database: " . mysqli_error($con);


mysqli_close($con);

?>


</body>
</html>