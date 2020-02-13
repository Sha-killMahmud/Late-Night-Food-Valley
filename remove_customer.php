<?php
session_start();

$errors = array(); 

$con = mysqli_connect('localhost', 'root', '', 'LATE_NIGHT_FOOD_VALLEY');


if (isset($_POST['remove'])) {
  
  $email = mysqli_real_escape_string($con, $_POST['email']);

  $user_check_query = "SELECT * FROM customer WHERE Email='$email'";
  $result1 = mysqli_query($con, $user_check_query);
  $user1 = mysqli_fetch_assoc($result1);
  
  if ($user1) { // if user exists
    
	$query1	= "DELETE FROM customer WHERE Email = '$email'";
				
  	mysqli_query($con, $query1);
	
	echo "<script type='text/javascript'>alert('Customer removed successfully.');</script>";
  }

  else{
			  
  	echo "<script type='text/javascript'>alert('Customer not exist.');</script>";
  }
  
}

?>
