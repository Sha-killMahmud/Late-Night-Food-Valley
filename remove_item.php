<?php
session_start();

$errors = array(); 

$con = mysqli_connect('localhost', 'root', '', 'LATE_NIGHT_FOOD_VALLEY');


if (isset($_POST['remove'])) {
  
  $itemname = mysqli_real_escape_string($con, $_POST['name']);

  $user_check_query = "SELECT * FROM item WHERE Name='$itemname'";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    
	$query1	= "DELETE FROM item WHERE Name = '$itemname'";
				
  	mysqli_query($con, $query1);
	
	echo "<script type='text/javascript'>alert('Item removed successfully.');</script>";
  }

  else{
			  
  	echo "<script type='text/javascript'>alert('Item not exist.');</script>";
  }
  
}

?>
