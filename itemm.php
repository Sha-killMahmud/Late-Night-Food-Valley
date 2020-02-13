<?php
session_start();

$errors = array(); 

$con = mysqli_connect('localhost', 'root', '', 'LATE_NIGHT_FOOD_VALLEY');


if (isset($_POST['insert'])) {
  
  $itemname = mysqli_real_escape_string($con, $_POST['name']);
  $description = mysqli_real_escape_string($con, $_POST['description']);
  $price = mysqli_real_escape_string($con, $_POST['price']);

  $user_check_query = "SELECT * FROM item WHERE Name='$itemname'";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['Name'] == $itemname) {
      array_push($errors, "Username already exists");
    }
  }

  if (count($errors) == 0) {
			  
	$query	= "insert into item(Item_ID , Name ,Description ,price ) 
				values('', '$itemname', '$description', '$price')";
				
  	mysqli_query($con, $query);
	
  	echo "<script type='text/javascript'>alert('Item inserted successfully.');</script>";
  }
  
}

?>