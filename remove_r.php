<?php 
include('remove_recipe.php') ;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Recipe</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

    <div class="register-photo">
        <div class="form-container">
            <form action="remove_r.php" method="POST">
			<a href="recipe_show.php" class="btn btn-primary btn" role="button">Recipe List</a>
                <h2 class="text-center"><strong>Remove Recipe</strong></h2>
				
                <div class="form-group"><input class="form-control" type="text" name="email" placeholder="Email" required=""></div>  
				<div class="form-group"><input class="form-control" type="text" name="subject" placeholder="Subject" required=""></div>				
			  
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="remove"  >Remove</button></div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>