<?php include('itemm.php') ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Item</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

    <div class="register-photo">
        <div class="form-container">
            <form action="add_Item.php" method="POST">
                <h2 class="text-center"><strong>Add Item</strong></h2>
                <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Item Name" required=""></div>  
                <div class="form-group"><input class="form-control" type="text" name="description" placeholder="Description" required="" ></div>  
                <div class="form-group"><input class="form-control" type="text" name="price" placeholder="Price" required=""></div>				

				  
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="insert"  >Insert</button></div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>