
<!DOCTYPE html>
<html>
<body>

<?php
session_start();

$errors = array(); 

// connect to the database
$con = mysqli_connect('localhost', 'root', '', 'LATE_NIGHT_FOOD_VALLEY');

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$sql = "SELECT Name, subject, recipe FROM recipe";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "Thank you for your recipe ..";
        echo "<br>  Customer Name:".$row["Name"]."      ".   "  Recipe Name: ". $row["subject"]. "  Recipe : " . $row["recipe"] . "<br>";
    }
} else {
    echo "0 results";
}

$con->close();
?> 

</body>
</html>