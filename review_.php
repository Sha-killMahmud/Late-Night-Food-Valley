<?php
session_start();

$errors = array(); 


$con = mysqli_connect('localhost', 'root', '', 'LATE_NIGHT_FOOD_VALLEY');


if (isset($_POST['Review'])) {
  
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $comment = mysqli_real_escape_string($con, $_POST['review']);

  $query1 = "insert into review(Review_ID,Email_,Comment) 
				  values('','$email', '$comment')";
				  
		mysqli_query($con, $query1);


		echo "<script type='text/javascript'>alert('Thanks for your review.');</script>";
	
  }
  

  
  
  
?>