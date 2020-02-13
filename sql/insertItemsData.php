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

// sql to insert data


$sql = "insert into item(Item_ID , Name ,Description ,price ) 
values(1, 'Gulab Jamun', 'Course: Dessert; Main ingredients: Khoa, saffron', 30),
(2, 'Samosa', 'Course: snack; Main ingredients: Maida, potatoes, onions, peas, lentils, spices, chili peppers (especially green chili), paneer, meat (lamb, beef, or chicken)', 20),
(3, 'Plain Naan', 'Main ingredients: Whole Wheat flour Active dry yeast Salt', 30),
(4, 'Polao', 'Course: Main dish; Main ingredients: Rice, meat , vegetables or egg, dahi (yogurt)', 180),
(5, 'Pizza', 'Main ingredients: Dough, sauce (usually tomato sauce), cheese', 350),
(6, 'Burger', 'Course: Main course; Main ingredients: Ground meat, bread', 300),
(7, 'Prawn Biryani', 'Course: Main dish; Main ingredients: Rice, Indian spices, meat , vegetables or egg, dahi (yogurt)
optional ingredients: dried fruits, potatoes', 400),
(8, 'Fried Pomfret', 'The stuffed spicy combination paste/masala is a mixture of green/verde (cilantro/green chillies) or red/vermelho (dried red chillies)', 360),
(9, 'Mutton Biryani ', ' One such biryani is the kachay gosht ki biryani, where the mutton is marinated and cooked along with the rice', 270)";


if (mysqli_query($con, $sql)) {
    echo "Data inserted successfully";
	echo '</br>';
} else echo "Error inserting data: " . mysqli_error($con);


echo '</br>';

$sql2 = "insert into admin(User_name, password ) 
values('aaa', '789')";


if (mysqli_query($con, $sql2)) {
    echo "Admins information inserted successfully";
	echo '</br>';
} else echo "Error inserting data: " . mysqli_error($con);


echo '</br>';


?>


</body>
</html>