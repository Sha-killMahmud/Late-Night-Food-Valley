<!DOCTYPE html>
<html>
<head>
 <title>Customer LIST</title>

</head>
<body>
 <table border="10" cellpadding = "40">
 <tr>
 <th>Customer_ID</th>
  <th>First_name</th> 
  <th>Last_name</th>
  <th>Email</th>
  <th>Address</th>
  <th>Phone_Number</th>
 
 </tr>
 <?php
$con = mysqli_connect('localhost', 'root', '', 'LATE_NIGHT_FOOD_VALLEY');
  // Check connection
  if ($con->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT Customer_ID, First_name,Last_name,Email,Address,contact_number FROM customer";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
	
	?>
	<tr>
	<td> <?php echo $row["Customer_ID"];?></td>
	<td> <?php echo $row["First_name"];?></td>
	<td> <?php echo $row["Last_name"];?></td>
	<td> <?php echo $row["Email"];?></td>
	<td> <?php echo $row["Address"];?></td>
	<td> <?php echo $row["contact_number"];?></td>
	<tr>
	<?php
}
echo "</table>";
} else { echo "0 results"; }
$con->close();
?>
</table>
</body>
</html>