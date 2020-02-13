<!DOCTYPE html>
<html>
<head>
 <title>Customer LIST</title>

</head>
<body>
 <table border="5" cellpadding = "10">
 <tr>
  <th>orderID</th> 
  <th>Customer_ID</th> 
  <th>Total_Price</th>
  <th>Discount_price</th>
  <th>Gulab_Jamun</th>
  <th>Samosa</th>
  <th>Plain_Naan</th> 
  <th>Pulav</th> 
  <th>Pizza</th>
  <th>Burger</th>
  <th>Prawn_Biryani</th>
  <th>Fried_Pomfret</th> 
  <th>Mutton_Biryani</th> 
  <th>Temp_address</th>
 
 </tr>
 <?php
$con = mysqli_connect('localhost', 'root', '', 'LATE_NIGHT_FOOD_VALLEY');
  // Check connection
  if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
  } 
  $sql = "SELECT * FROM order_slot";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
	
	?>
	<tr>
	<td> <?php echo $row["orderID"];?></td>
	<td> <?php echo $row["Customer_ID"];?></td>
	<td> <?php echo $row["Total_Price"];?></td>
	<td> <?php echo $row["Discount_price"];?></td>
	<td> <?php echo $row["Gulab_Jamun"];?></td>
	<td> <?php echo $row["Samosa"];?></td>
	<td> <?php echo $row["Plain_Naan"];?></td>
	<td> <?php echo $row["Pulav"];?></td>
	<td> <?php echo $row["Pizza"];?></td>
	<td> <?php echo $row["Burger"];?></td>
	<td> <?php echo $row["Prawn_Biryani"];?></td>
	<td> <?php echo $row["Fried_Pomfret"];?></td>
	<td> <?php echo $row["Mutton_Biryani"];?></td>
	<td> <?php echo $row["Temp_address"];?></td>
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