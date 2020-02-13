<?php
session_start();

$errors = array(); 

// connect to the database
$con = mysqli_connect('localhost', 'root', '', 'LATE_NIGHT_FOOD_VALLEY');


if (isset($_POST['Submit'])) {
  
  $email2 = mysqli_real_escape_string($con, $_POST['Email']);
  
  
  if (empty($email2)) { array_push($errors, "Email is required"); }


  $user_check_query5 = "SELECT E_mail FROM cook WHERE E_mail='$email2' LIMIT 1";
  $result5 = mysqli_query($con, $user_check_query5);
  $user = mysqli_fetch_assoc($result5);
  
  if ($user) { // if user exists

    echo "<script type='text/javascript'>alert('Your Request is already pending.');</script>";
  }

  else{
  	

  	$query3 = "insert into cook(cooker_ID, E_mail) 
	          values('', '$email2')";
  	mysqli_query($con, $query3);
	
  	
	$_SESSION['email'] = $email2;
  	
	echo "<script type='text/javascript'>alert('Thanks for Request. We will contact you soon.');</script>";
	
  }
  
}

?>