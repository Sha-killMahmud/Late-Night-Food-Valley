
<?php 
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="#"><em>Welcome to Food Valley&nbsp;</em></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <span class="navbar-text actions">
						<a class="btn btn-light action-button" role="button" ><?php  echo $_SESSION['username']; ?></a>
						
                        <a class="btn btn-light action-button" role="button" href="itemOrder.php">Order</a>
						<a class="btn btn-light action-button" role="button" href="my_recipe.php">My recipe</a>
						<a class="btn btn-light action-button" role="button" href="my_order.php">Order_History</a>
                        <a class="btn btn-light action-button" role="button" href="index.php">Log Out</a>                     
                    </span>
                </div>
            </div>
        </nav>
    </div><img src="assets/img/333.jpg">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
