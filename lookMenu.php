
<html>
<head>
<title>Order</title>
<style type="text/css">
@import url(style.css);
   a:link {color: #ffffff}
   a:visited {color: #ffffff}
   a:hover {color: #ffffff}
   a:active {color: #ffffff}
  font{color:white}
img{width:300; height:200;}
table{border-color:white;height:90%;}
img{border-color:white}
body{no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;}
</style>
<script type="text/javascript">
	function subtractQty(qty){
		if(qty.value - 1 < 0)
			return;
	else
	qty.value--;
	}
	function chk()
	{
		var qty1=document.getElementById("qty1");
		var qty2=document.getElementById("qty2");
		var qty3=document.getElementById("qty3");
		var qty4=document.getElementById("qty4");
		var qty5=document.getElementById("qty5");
		var qty6=document.getElementById("qty6");
		var qty7=document.getElementById("qty7");
		var qty8=document.getElementById("qty8");
		var qty9=document.getElementById("qty9");
		if((qty1.value=='' && qty2.value=='' && qty3.value=='' && qty4.value=='' &&qty5.value=='' && qty6.value=='' && qty7.value=='' && qty8.value=='' &&qty9.value=='')||(qty1.value=='0' && qty2.value=='0' && qty3.value=='0' && qty4.value=='0' && qty5.value=='0' && qty6.value=='0' && qty7.value=='0' && qty8.value=='0' && qty9.value=='0' ))
		{
			alert("Please select atleast 1 item");
			return false;
		}
		return true;	
	}
</script>
</head>
<body background="bg1.jpg">
<FONT size="4" color="white">
<NAV align="right">
<A HREF="index.php">Home</A>&nbsp&nbsp&nbsp
<A HREF="help.php">Help</A>&nbsp&nbsp&nbsp
<A HREF="discount.php">Offers</A>&nbsp&nbsp&nbsp



</FONT></NAV>
<form action="order.php" name="orderform" method="post">
<table cellspacing="5" cellpadding="2" align="center">


<tr><td>
<img src="menu/gulab_jamun.jpg" width="300" height="200" border="5"><br/>
<font size="4">Gulab Jamun</font>

			
<font size="4">Tk. 30</font>

</td>

<td>
<img src="menu/indian_cuisine.jpg" width="300" height="200" border="2"><br/>
<font size="4">Samosa</font>

<font size="4">Tk. 20</font>
</td>
<td>
<img src="menu/plain_naan.jpg" width="300" height="200" border="2"><br/>
<font size="4">Plain Naan</font>

<font size="4">Tk. 30</font>
</td>
</tr>
<tr>
<td>
<img src="menu/pulav.jpg" width="300" height="200" border="2" ><br/>
<font size="4">Pulav</font>

<font size="4">Tk. 180</font>
</td><td>
<img src="menu/pizza.jpg" width="300" height="200" border="2"><br/>
<font size="4">Pizza</font>

			<font size="4">Tk. 350</font>
</td>
<td>
<img src="menu/1.jpg" width="300" height="200" border="2"><br/>
<font size="4">Burger</font>

<font size="4">Tk. 200</font>
</td>
</tr>
<tr>
<td>
<img src="menu/prawn_biryani.jpg" width="300" height="200" border="2"><br/>
<font size="4">Prawn Biryani</font>

<font size="4">Tk. 400</font>
</td><td>
<img src="menu/fish.jpg" width="300" height="200" border="2"><br/>
<font size="4">Fried Pomfret</font>

<font size="4">Tk. 360</font>
</td>
<td>
<img src="menu/mutton_dum_biryani.jpg" width="300" height="200" border="2"><br/>
<font size="4">Mutton Biryani</font>
			
<font size="4">Tk. 270</font>
</td>
</tr>
<div
   class="collapse navbar-collapse" id="navcol-1"><span class="navbar-text actions"> <a class="btn btn-light action-button" role="button" href="reg.php">Order now!!</a></span></div>
    </div>
</table></form>
</body>
</html>