<?php
session_start();

$errors = array(); 

$con = mysqli_connect('localhost', 'root', '', 'LATE_NIGHT_FOOD_VALLEY');


if (isset($_POST['modify'])) {
  
  $subject = mysqli_real_escape_string($con, $_POST['subject']);
  $recipe = mysqli_real_escape_string($con, $_POST['recipe']);
 
 
  $email2 = $_SESSION['email'];

  $user_check_query = "SELECT * FROM recipe WHERE Subject = '$subject' and Email_ = '$email2'";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    
	$query1	= "UPDATE recipe SET Recipe = '$recipe' WHERE Subject = '$subject' and Email_ = '$email2'";
				
  	mysqli_query($con, $query1);
	
	echo "<script type='text/javascript'>alert('Modify Recipe successfully.');</script>";
	
  }

  else{
			  
  	echo "<script type='text/javascript'>alert('Recipe not exist.');</script>";
  }
 // header('location: order.php');
}

?>
