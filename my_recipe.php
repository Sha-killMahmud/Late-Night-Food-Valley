<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
 <title>My Recipes</title>
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
   background-color: #CD5C5C;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
 <table border="5" cellpadding = "15">
 <tr>
  <th>Email</th>
  <th>Subject</th>
  <th>Recipe</th>
 
 </tr>
 <?php
$con = mysqli_connect('localhost', 'root', '', 'LATE_NIGHT_FOOD_VALLEY');
  // Check connection
  if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
  } 
  $email_v = $_SESSION['email'];
  
  $sql = "SELECT Email_, Subject, Recipe FROM recipe where Email_ = '$email_v'";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
	
	?>
	<tr>
	<td> <?php echo $row["Email_"];?></td>
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

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
 <br>
  <a type="button" href="modify_r.php" class="btn btn-danger btn-block">Modify Recipe</a>
  <br>
</div>

</body>
</html>