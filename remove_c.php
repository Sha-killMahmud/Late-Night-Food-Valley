<?php 
include('remove_customer.php') ;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Customer</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

    <div class="register-photo">
        <div class="form-container">
            <form action="remove_c.php" method="POST">
			<a href="show_c.php" class="btn btn-primary btn" role="button">Customer List</a>
                <h2 class="text-center"><strong>Remove Customer</strong></h2>
				
				
				
                <div class="form-group"><input class="form-control" type="text" name="email" placeholder="Email" required=""></div>  			
			  
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="remove"  >Remove</button></div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>