<!DOCTYPE html>
<html>
<head>
 <title>Recipe LIST</title>
<style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #;
   font-family: calibri;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
 <table border="5" cellpadding = "15">
 <tr>
  <th>Name</th> 
  <th>Email</th>
  <th>Phone_number</th>
  <th>subject</th>
  <th>Recipe</th>
 
 </tr>
 <?php
$con = mysqli_connect('localhost', 'root', '', 'LATE_NIGHT_FOOD_VALLEY');
  // Check connection
  if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
  } 
  $sql = "SELECT Name, Email_, Contact_number, Subject, Recipe FROM recipe";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
	
	?>
	<tr>
	<td> <?php echo $row["Name"];?></td>
	<td> <?php echo $row["Email_"];?></td>
	<td> <?php echo $row["Contact_number"];?></td>
	<td> <?php echo $row["Subject"];?></td>
	<td> <?php echo $row["Recipe"];?></td>
	
	
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