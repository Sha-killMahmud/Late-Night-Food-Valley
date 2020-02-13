<?php
session_start();

$errors = array(); 


$con = mysqli_connect('localhost', 'root', '', 'LATE_NIGHT_FOOD_VALLEY');


if (isset($_POST['Rating'])) {
  
  $rating = mysqli_real_escape_string($con, $_POST['num']);

  $query1 = "insert into rating(Rate_ID , Rating) 
				  values('','$rating')";
				  
		mysqli_query($con, $query1);


		echo "<script type='text/javascript'>alert('Thanks for your rating.');</script>";
	
  }
  

?>