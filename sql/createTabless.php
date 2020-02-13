<html>

<head>
</head>

<body>

<?php

// Create connection
$con = mysqli_connect('localhost', 'root', '');

// Check connection
if(!$con){
	
	die("Can not connect: " . mysqli_error($con));
}

mysqli_select_db($con, "LATE_NIGHT_FOOD_VALLEY");

// sql to create table


$sql = "CREATE TABLE Customer (
Customer_ID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
First_name varchar(250),
Last_name varchar(250),
Email varchar(250),
Address varchar(250),
password varchar(250),
contact_number bigint,
UNIQUE KEY(Email)
)";

if (mysqli_query($con, $sql)) {
    echo "Table Customer created successfully";
	echo '</br>';
} else echo "Error creating table: " . mysqli_error($con);

echo '</br>';
//
$sql2= "CREATE TABLE Order_slot (
orderID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
Customer_ID int,
Total_Price int,
Discount_price int,
Gulab_Jamun int,
Samosa int,
Plain_Naan int,
Pulav int,
Pizza int,
Burger int,
Prawn_Biryani int,
Fried_Pomfret int,
Mutton_Biryani int,
Temp_address varchar(200),
Foreign Key(Customer_ID) references Customer(Customer_ID)
)";

if (mysqli_query($con, $sql2)) {
    echo "Table Order_slot created successfully";
	echo '</br>';
} else echo "Error creating table: " . mysqli_error($con);

echo '</br>';
//

$sql3 = "CREATE TABLE Item (
Item_ID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
Name varchar(250),
Description varchar(250),
price int
)";

if (mysqli_query($con, $sql3)) {
    echo "Table Item created successfully";
	echo '</br>';
} else echo "Error creating table: " . mysqli_error($con);

echo '</br>';

$sql4 = "CREATE TABLE Recipe (
Recipe_ID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
Name varchar(250),
Email_ varchar(250),
Contact_number bigint,
Subject varchar(250),
Recipe varchar(250)
)";

if (mysqli_query($con, $sql4)) {
    echo "Table Recipe created successfully";
	echo '</br>';
} else echo "Error creating table: " . mysqli_error($con);

echo '</br>';

$sql5 = "CREATE TABLE Cook (
cooker_ID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
E_mail varchar(250),
UNIQUE KEY(E_mail)

)";

//Foreign Key(E_mail) references Recipe(Email_)

if (mysqli_query($con, $sql5)) {
    echo "Table Cook created successfully";
	echo '</br>';
} else echo "Error creating table: " . mysqli_error($con);

echo '</br>';

$sql6 = "CREATE TABLE admin (

User_name varchar(250),
password varchar(250)

)";

if (mysqli_query($con, $sql6)) {
    echo "Table Admin created successfully";
	echo '</br>';
} else echo "Error creating table: " . mysqli_error($con);

echo '</br>';


$sql7= "CREATE TABLE History (
order_ID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
Customer_ID int,
Total_Price int,
Discount_price int,
Gulab_Jamun int,
Samosa int,
Plain_Naan int,
Pulav int,
Pizza int,
Burger int,
Prawn_Biryani int,
Fried_Pomfret int,
Mutton_Biryani int,
Temp_address varchar(200),
Foreign Key(Customer_ID) references Customer(Customer_ID)
)";

if (mysqli_query($con, $sql7)) {
    echo "Table History created successfully";
	echo '</br>';
} else echo "Error creating table: " . mysqli_error($con);

echo '</br>';
  
$sql8 = "CREATE TABLE Rating (
Rate_ID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
Rating int
)";

if (mysqli_query($con, $sql8)) {
    echo "Table Rating created successfully";
	echo '</br>';
} else echo "Error creating table: " . mysqli_error($con);

echo '</br>';

$sql9 = "CREATE TABLE Review (
Review_ID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
Email_ varchar(250),
Comment varchar(250)
)";

if (mysqli_query($con, $sql9)) {
    echo "Table Review created successfully";
	echo '</br>';
} else echo "Error creating table: " . mysqli_error($con);

echo '</br>';
  
  
mysqli_close($con);

?>


</body>
</html>