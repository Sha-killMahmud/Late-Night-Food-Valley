<?php
session_start();

$errors = array(); 

// connect to the database
$con = mysqli_connect('localhost', 'root', '', 'LATE_NIGHT_FOOD_VALLEY');

// REGISTER USER
if (isset($_POST['Submit'])) {
  // receive all input values from the form
  $rating = mysqli_real_escape_string($con, $_POST['rating']);
  $name = mysqli_real_escape_string($con, $_POST['Name']);
  $email2 = mysqli_real_escape_string($con, $_POST['Email']);
  $review = mysqli_real_escape_string($con, $_POST['Message']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Username is required"); }
  if (empty($email1)) { array_push($errors, "Email is required"); }
  if (empty($number1)) { array_push($errors, "Number is required"); }
  if (empty($subject)) { array_push($errors, "Subject is required"); }
  if (empty($recipe)) { array_push($errors, "Recipe is required"); }


  $user_check_query = "SELECT * FROM review WHERE Email='$email2'";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
  //update
    echo "<script type='text/javascript'>alert('already exists that recipe');</script>";
  }
 
else{
		$query1 = "insert into review(Review_ID, Name, Email, Rating, comment) 
				  values('','$name', '$email2', '$rating', '$review')";
				  
		mysqli_query($con, $query1);
		
		//$_SESSION['username'] = $name;
		//$_SESSION['email'] = $email2;

		echo "<script type='text/javascript'>alert('Recipe posted successfully. Thanks for your review.');</script>";
		//header('location: recipe.php');
	
  }
  
}

?>