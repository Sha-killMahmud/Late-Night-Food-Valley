<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rate</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <h1>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Review &amp; Rating</h1>
    <form action ="rate.php" method="post">
        <h2 class="text-center"><strong>Rate Our Service (1 To 5)</strong></h2>
        <div class="form-group"><input class="form-control" type="number_format" name="num" placeholder="Rating 1 to 5" style="width:200px;"></div>
        <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color:rgb(220,20,60);width:100px;" name="Rating" >Rating</button></div>
    </form>
    <form action="review_.php" method="post">
        <h2 class="text-center"><strong>Enter your review</strong></h2>
        <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" style="height:40px;"><input class="form-control" type="text" name="review" placeholder="Enter Review" style="height:80px;"></div>
        <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color:rgb(220,20,60);width:100px;" name="Review" >Review</button></div>
    </form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>