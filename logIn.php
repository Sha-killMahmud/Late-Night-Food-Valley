<?php include('server.php') ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="height:992px;">
    <div class="login-dark" style="background-image:url(&quot;assets/img/ban6.jpg&quot;);">
        <form action="login_attempt.php" method="POST">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
			
             <div class="form-group"><input class="form-control" type="email" name="email"  required placeholder="Email" ></div>

            <div class="form-group"><input class="form-control" type="password" name="password" required placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-light action-button" role="button" href="order.php" name="log_in" >Log In</button></div><a href="#" class="forgot">Forgot your email or password?</a></form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>