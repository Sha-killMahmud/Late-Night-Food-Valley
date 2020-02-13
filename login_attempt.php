<?php 
    session_start();
?>
<?php
    if(isset($_POST['email']) && isset($_POST['password'])){
		//$password = md5($password)
    $one = $_POST['email'];
	$two = $_POST['password'];

	//include('user_data_after_login.php');

	$user = 'root';
	$pass = '';
	$db = 'late_night_food_valley';
	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('unable to connect');

	$qry = "SELECT * FROM `customer`";	
   
	$res = $db_connect->query($qry) or die('bad query for login attempt!!!'); 
	
    $ok=false; //to check if  login failed
    
	while($row = $res->fetch_assoc()) {
        //echo $row["email"]." ".$row["password"]."<br>";
		$password = md5($two);
		
        if($row["Email"]==$one && $row["password"]==$password)
        {
            
            $username= $row["First_name"];
			$emaill = $row["Email"];
            //===========================
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = $username;
				$_SESSION['email'] = $emaill;
            //===========================
            $ok=true;
            //echo $username;
            break;
        }
    }
    $db_connect->close();   
        
            if($ok==false)
            {
                echo "<script> alert('Invalid email/password');</script>";
				header('Location:logIn.php');
            }
            else
            {    
                echo "
                <script> alert('Successfully Logged in'); </script>
                ";
                header('Location:order.php');


            }
    }
    else
        echo "you didn't fill up the form properly";

?>