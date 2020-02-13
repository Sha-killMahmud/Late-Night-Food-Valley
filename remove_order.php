<?php
session_start();

$errors = array(); 

$con = mysqli_connect('localhost', 'root', '', 'LATE_NIGHT_FOOD_VALLEY');


if (isset($_POST['remove'])) {
  
  $order_id = mysqli_real_escape_string($con, $_POST['order_id']);

  $user_check_query = "SELECT * FROM order_slot WHERE orderID ='$order_id'";
  $result1 = mysqli_query($con, $user_check_query);
  $user1 = mysqli_fetch_assoc($result1);
  
  if ($user1) { // if user exists
    
	$query1	= "DELETE FROM order_slot WHERE orderID = '$order_id'";
				
  	mysqli_query($con, $query1);
	
	echo "<script type='text/javascript'>alert('Order removed successfully.');</script>";
  }

  else{
			  
  	echo "<script type='text/javascript'>alert('Order not exist.');</script>";
  }
  
}

?>
