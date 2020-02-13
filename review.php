<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Accessible rating example</title>
  <link rel="stylesheet" type="text/css" href="starability-minified/starability-all.min.css"/>
</head>

<body>
  <h1>Overall rating</h1>
  <h2>Our Service</h2>
  <form>
    <!-- Change starability-basic to different class to see animations. -->
    <fieldset class="starability-basic">
      <legend></legend>
      <input type="radio" id="no-rate" class="input-no-rate" name="rating" value="0" checked aria-label="No rating." />

      <input type="radio" id="rate1" name="rating" value="1" />
      <label for="rate1">1 star.</label>

      <input type="radio" id="rate2" name="rating" value="2" />
      <label for="rate2">2 stars.</label>

      <input type="radio" id="rate3" name="rating" value="3" />
      <label for="rate3">3 stars.</label>

      <input type="radio" id="rate4" name="rating" value="4" />
      <label for="rate4">4 stars.</label>

      <input type="radio" id="rate5" name="rating" value="5" />
      <label for="rate5">5 stars.</label>

      <span class="starability-focus-ring"></span>
    </fieldset>
  </form>
   <div class="w3layouts_mail_grid_right">
			  <div class="w3-head-all mb-3 w3-head-col">
		          <h3>Enter Your Review</h3>
		       </div>
               <form action="" method="post">
			   <div class="row contact-grids">
                  <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
                     <input type="text" name="Name" placeholder="Name" required="">
                  </div>
                  <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
                     <input type="email" name="Email" placeholder="Email" required="">
                  </div>
                  
                  <div class="clearfix"> </div>
                  <textarea name="Message" placeholder="Review..." required=""></textarea>
                  <input type="submit" name="Submit" value="Submit">
                  <input type="reset" value="Clear">
                </div>
				 </form>
            </div>
         </div>
      </div>

  
</body>
</html>
