<?php 
    session_start();
?>

<?php 

$user_info = $_SESSION['email'];
$name = $_SESSION['username'];


if (isset($_POST['submit'])){
		
	
if(!empty($_SESSION['email'])) {
		
		$qty1 = $_POST['qty1'];
		$qty2 = $_POST['qty2'];
		$qty3 = $_POST['qty3'];
		$qty4 = $_POST['qty4'];
		$qty5 = $_POST['qty5'];
		$qty6 = $_POST['qty6'];
		$qty7 = $_POST['qty7'];
		$qty8 = $_POST['qty8'];
		$qty9 = $_POST['qty9'];
		$tempaddr = $_POST['temp_address'];
		
		if(empty($qty1)){
			$qty1 = 0;
		}
		if(empty($qty2)){
			$qty2 = 0;
		}
		if(empty($qty3)){
			$qty3 = 0;
		}
		if(empty($qty4)){
			$qty4 = 0;
		}
		if(empty($qty5)){
			$qty5 = 0;
		}
		if(empty($qty6)){
			$qty6 = 0;
		}
		if(empty($qty7)){
			$qty7 = 0;
		}
		if(empty($qty8)){
			$qty8 = 0;
		}
		if(empty($qty9)){
			$qty9 = 0;
		}		
		if(empty($tempaddr)){
			$tempaddr ='';
		}
		
		$user = 'root';
	    $pass = '';
		$db = 'late_night_food_valley';
	    $db_connect = new mysqli('localhost',$user,$pass,$db) or die('unable to connect');
		
		
		$price1="select price from item where Name='Gulab Jamun'";
		$r1 = $db_connect->query($price1) or die('bad query for login attempt!!!');
		$item1=NULL;
		if($r1->num_rows > 0){
			while($row = $r1->fetch_assoc()){
				$item1 = $row['price'];
			}
		}
		
		$price3="select price from item where Name='Plain Naan'";
		$r3 = $db_connect->query($price3) or die('bad query for login attempt!!!');
		$item3=NULL;
		if($r3->num_rows > 0){
			while($row = $r3->fetch_assoc()){
				$item3 = $row['price'];
			}
		}
		
		$price4="select price from item where Name='Polao'";
		$r4 = $db_connect->query($price4) or die('bad query for login attempt!!!');
		$item4=NULL;
		if($r4->num_rows > 0){
			while($row = $r4->fetch_assoc()){
				$item4 = $row['price'];
			}
		}
		
		$price5="select price from item where Name='Pizza'";
		$r5 = $db_connect->query($price5) or die('bad query for login attempt!!!');
		$item5=NULL;
		if($r5->num_rows > 0){
			while($row = $r5->fetch_assoc()){
				$item5 = $row['price'];
			}
		}
		$price6="select price from item where Name='Burger'";
		$r6 = $db_connect->query($price6) or die('bad query for login attempt!!!');
		$item2=NULL;
		if($r6->num_rows > 0){
			while($row = $r6->fetch_assoc()){
				$item6 = $row['price'];
			}
		}
		

		$price7="select price from item where Name='Prawn Biryani'";
		$r7 = $db_connect->query($price7) or die('bad query for login attempt!!!');
		$item7=NULL;
		if($r7->num_rows > 0){
			while($row = $r7->fetch_assoc()){
				$item7 = $row['price'];
			}
		}
		
		$price8="select price from item where Name='Fried Pomfret'";
		$r8 = $db_connect->query($price8) or die('bad query for login attempt!!!');
		$item8=NULL;
		if($r8->num_rows > 0){
			while($row = $r8->fetch_assoc()){
				$item8 = $row['price'];
			}
		}
		$price9="select price from item where Name='Mutton Biryani '";
		$r9 = $db_connect->query($price9) or die('bad query for login attempt!!!');
		$item9=NULL;
		if($r9->num_rows > 0){
			while($row = $r9->fetch_assoc()){
				$item9 = $row['price'];
			}
		}
		$price2="select price from item where Name='Samosa'";
		$r2 = $db_connect->query($price2) or die('bad query for login attempt!!!');
		$item2=NULL;
		if($r2->num_rows > 0){
			while($row = $r2->fetch_assoc()){
				$item2 = $row['price'];
			}
		}
		//echo $item2;	//echo $item9;

		//echo $newres1;
		//$sum1= ();
		
		$sum = $item1*$qty1+$item2*$qty2+$item3*$qty3+$item4*$qty4+$item5*$qty5+$item6*$qty6+$item7*$qty7+$item8*$qty8+$item9*$qty9;
		
		
		if(($qty5 > 2) & ($qty6 > 2)){
			
			$dis1 = $item5*$qty5;
			$dis2 = $dis1*.25;
			$d = $dis1 - $dis2;
			$dis3 = $item6*$qty6;
			$dis4 = $dis3*.15;
			$d1 = $dis3 - $dis4;
			$d3 = $dis2 + $dis4;
			
			//$sum = 30*$qty1+20*$qty2+30*$qty3+180*$qty4+ $d +$d1+400*$qty7+360*$qty8+270*$qty9;
			$sum = $item1*$qty1+$item2*$qty2+$item3*$qty3+$item4*$qty4+$d+$d1+$item7*$qty7+$item8*$qty8+$item9*$qty9;

            $msg = "Order placed successfully. Please make a payment of Tk ".$sum." by cash on successful delivery where discount ".$d3."";
			
		}
		
       else if($qty5 >2){
		   
			$dis1 = $item5*$qty5;
			$dis2 = $dis1*.25;
			$d = $dis1 - $dis2;
			
			//$sum = 30*$qty1+20*$qty2+30*$qty3+180*$qty4+ $d +200*$qty6+400*$qty7+360*$qty8+270*$qty9;
			$sum = $item1*$qty1+$item2*$qty2+$item3*$qty3+$item4*$qty4+$d+$item6*$qty6+$item7*$qty7+$item8*$qty8+$item9*$qty9;

			$msg = "Order placed successfully. Please make a payment of Tk ".$sum." by cash on successful delivery where discount ".$dis2."";

		}
		else if($qty6 >2){
			
			$dis1= $item6*$qty6;
			$dis2= $dis1*.15;
			$d= $dis1 - $dis2;
			//$sum = 30*$qty1+20*$qty2+30*$qty3+180*$qty4+350*$qty5+$d+400*$qty7+360*$qty8+270*$qty9;
			$sum = $item1*$qty1+$item2*$qty2+$item3*$qty3+$item4*$qty4+$item5*$qty5+$d+$item7*$qty7+$item8*$qty8+$item9*$qty9;

			$msg = "Order placed successfully Please make a payment of Tk ".$sum." by cash on successful delivery where discount ".$dis2."";

		}
		else{
			
		   $dis2=null;
		   $msg = "Order placed successfully Please make a payment of Tk ".$sum." by cash on successful delivery ";
		}
		
		
		
		$qry2 = "Select Customer_ID from customer where ( First_name = '$name' ) and ( Email = '$user_info' )";
		
		$result2 = $db_connect->query($qry2) or die('bad query for login attempt!!!');
		
		$newres=NULL;
		if($result2->num_rows > 0){
			while($row = $result2->fetch_assoc()){
				$newres = $row['Customer_ID'];
				
			}
		}
		
		
		
        $sql2="INSERT INTO order_slot(orderID, Customer_ID, Total_Price, Discount_price, Gulab_Jamun, Samosa, Plain_Naan, 
		          Pulav, Pizza, Burger, Prawn_Biryani, Fried_Pomfret, Mutton_Biryani, Temp_address)
				VALUES('', '$newres', '$sum', '$dis2', '$qty1', '$qty2', '$qty3', '$qty4', '$qty5', '$qty6', '$qty7', '$qty8', '$qty9', '$tempaddr');";
		
		$sql4="INSERT INTO history(order_ID, Customer_ID, Total_Price, Discount_price, Gulab_Jamun, Samosa, Plain_Naan, 
		          Pulav, Pizza, Burger, Prawn_Biryani, Fried_Pomfret, Mutton_Biryani, Temp_address)
				VALUES('', '$newres', '$sum', '$dis2', '$qty1', '$qty2', '$qty3', '$qty4', '$qty5', '$qty6', '$qty7', '$qty8', '$qty9', '$tempaddr');";
		if($db_connect->query($sql4)){}
		
		if($db_connect->query($sql2))
		{  
			echo '<script type="text/javascript"> alert("'.$msg.'")</script>';
		}
		else
		{  
			echo "<script type='text/javascript'>alert('Could not place order');</script>";
		} 
		
		
	}
	else
		echo "<script type='text/javascript'>alert('Please login');</script>";
}
?>
<html>

<head>
    <title>Order</title>
    <style type="text/css">
        @import url(style.css);

        a:link {
            color: #ffffff
        }

        a:visited {
            color: #ffffff
        }

        a:hover {
            color: #ffffff
        }

        a:active {
            color: #ffffff
        }

        font {
            color: white
        }

        img {
            width: 300;
            height: 200;
        }

        table {
            border-color: white;
            height: 90%;
        }

        img {
            border-color: white
        }

        body {
            no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

    </style>
    <script type="text/javascript">
        function subtractQty(qty) {
            if (qty.value - 1 < 0)
                return;
            else
                qty.value--;
        }

        function chk() {
            var qty1 = document.getElementById("qty1");
            var qty2 = document.getElementById("qty2");
            var qty3 = document.getElementById("qty3");
            var qty4 = document.getElementById("qty4");
            var qty5 = document.getElementById("qty5");
            var qty6 = document.getElementById("qty6");
            var qty7 = document.getElementById("qty7");
            var qty8 = document.getElementById("qty8");
            var qty9 = document.getElementById("qty9");
            if ((qty1.value == '' && qty2.value == '' && qty3.value == '' && qty4.value == '' && qty5.value == '' && qty6.value == '' && qty7.value == '' && qty8.value == '' && qty9.value == '') || (qty1.value == '0' && qty2.value == '0' && qty3.value == '0' && qty4.value == '0' && qty5.value == '0' && qty6.value == '0' && qty7.value == '0' && qty8.value == '0' && qty9.value == '0')) {
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
			<A HREF="index.php">Log Out</A>&nbsp&nbsp&nbsp



    </FONT>
    </NAV>
    <form action="itemOrder.php" name="orderform" method="post">
        <table cellspacing="5" cellpadding="2" align="center">
            <tr>
                <td></td>
                <td> <input type="text" name="temp_address" placeholder=" Temporary Address" notrequired=""></td>

                <caption>
                    <font size="5"><U>If you want to give your temporary addresss..</U></font>
                </caption>

            <tr>
                <td>
                    <img src="menu/gulab_jamun.jpg" width="300" height="200" border="5"><br />
                    <font size="4">Gulab Jamun</font>
                    &nbsp;&nbsp;<input type='text' name='qty1' id='qty1' size="1" maxlength="2" class="qty" style="width: 25px;" />
                    <input type='button' name='add' onclick='javascript: document.getElementById("qty1").value++;' value='+' />
                    <input type='button' name='subtract' onclick='javascript: subtractQty(qty1);' value='-' />
                    <font size="4">Tk. 30</font>

                </td>

                <td>
                    <img src="menu/indian_cuisine.jpg" width="300" height="200" border="2"><br />
                    <font size="4">Samosa</font>
                    &nbsp;&nbsp;<input type='text' name='qty2' id='qty2' size="1" maxlength="2" class="qty" style="width: 25px;" />
                    <input type='button' name='add' onclick='javascript: document.getElementById("qty2").value++;' value='+' />
                    <input type='button' name='subtract' onclick='javascript: subtractQty(qty2);' value='-' />
                    <font size="4">Tk. 20</font>
                </td>
                <td>
                    <img src="menu/plain_naan.jpg" width="300" height="200" border="2"><br />
                    <font size="4">Plain Naan</font>
                    &nbsp;&nbsp;<input type='text' name='qty3' id='qty3' size="1" maxlength="2" class="qty" style="width: 25px;" />
                    <input type='button' name='add' onclick='javascript: document.getElementById("qty3").value++;' value='+' />
                    <input type='button' name='subtract' onclick='javascript: subtractQty(qty3);' value='-' />
                    <font size="4">Tk. 30</font>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="menu/pulav.jpg" width="300" height="200" border="2"><br />
                    <font size="4">Pulav</font>
                    &nbsp;&nbsp;<input type='text' name='qty4' id='qty4' size="1" maxlength="2" class="qty" style="width: 25px;" />
                    <input type='button' name='add' onclick='javascript: document.getElementById("qty4").value++;' value='+' />
                    <input type='button' name='subtract' onclick='javascript: subtractQty(qty4);' value='-' />
                    <font size="4">Tk. 180</font>
                </td>
                <td>
                    <img src="menu/pizza.jpg" width="300" height="200" border="2"><br />
                    <font size="4">Pizza</font>
                    &nbsp;&nbsp;<input type='text' name='qty5' id='qty5' size="1" maxlength="2" class="qty" style="width: 25px;" />
                    <input type='button' name='add' onclick='javascript: document.getElementById("qty5").value++;' value='+' />
                    <input type='button' name='subtract' onclick='javascript: subtractQty(qty5);' value='-' />
                    <font size="4">Tk. 350</font>
                </td>
                <td>
                    <img src="menu/1.jpg" width="300" height="200" border="2"><br />
                    <font size="4">Burger</font>
                    &nbsp;&nbsp;<input type='text' name='qty6' id='qty6' size="1" maxlength="2" class="qty" style="width: 25px;" />
                    <input type='button' name='add' onclick='javascript: document.getElementById("qty6").value++;' value='+' />
                    <input type='button' name='subtract' onclick='javascript: subtractQty(qty6);' value='-' />
                    <font size="4">Tk. 200</font>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="menu/prawn_biryani.jpg" width="300" height="200" border="2"><br />
                    <font size="4">Prawn Biryani</font>
                    &nbsp;&nbsp;<input type='text' name='qty7' id='qty7' size="1" maxlength="2" class="qty" style="width: 25px;" />
                    <input type='button' name='add' onclick='javascript: document.getElementById("qty7").value++;' value='+' />
                    <input type='button' name='subtract' onclick='javascript: subtractQty(qty7);' value='-' />
                    <font size="4">Tk. 400</font>
                </td>
                <td>
                    <img src="menu/fish.jpg" width="300" height="200" border="2"><br />
                    <font size="4">Fried Pomfret</font>
                    &nbsp;&nbsp;<input type='text' name='qty8' id='qty8' size="1" maxlength="2" class="qty" style="width: 25px;" />
                    <input type='button' name='add' onclick='javascript: document.getElementById("qty8").value++;' value='+' />
                    <input type='button' name='subtract' onclick='javascript: subtractQty(qty8);' value='-' />
                    <font size="4">Tk. 360</font>
                </td>
                <td>
                    <img src="menu/mutton_dum_biryani.jpg" width="300" height="200" border="2"><br />
                    <font size="4">Mutton Biryani</font>
                    &nbsp;&nbsp;<input type='text' name='qty9' id='qty9' size="1" maxlength="2" class="qty" style="width: 25px;" />
                    <input type='button' name='add' onclick='javascript: document.getElementById("qty9").value++;' value='+' />
                    <input type='button' name='subtract' onclick='javascript: subtractQty(qty9);' value='-' />
                    <font size="4">Tk. 270</font>
                </td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td colspan="3"><input type="submit" name="submit" value="Order now!!!" class="button" onclick="return chk()"></input></td>
            </tr>

        </table>
    </form>
</body>

</html>
