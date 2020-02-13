<?php 
    session_start();
?>
<?php
    if(isset($_POST['user']) && isset($_POST['password'])){
		
    $one = $_POST['user'];
	$two = $_POST['password'];

	//include('user_data_after_login.php');

	$user = 'root';
	$pass = '';
	$db = 'late_night_food_valley';
	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('unable to connect');

	$qry = "SELECT * FROM `admin`";	
   
	$res = $db_connect->query($qry) or die('bad query for login attempt!!!'); 
	
    $ok=false; //to check if  login failed
    
	while($row = $res->fetch_assoc()) {
		
        if($row["User_name"]==$one && $row["password"]==$two)
        {
            
            $username= $row["User_name"];

            //===========================
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = $username;
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
				header('Location:adminlogIn.php');
            }
            else
            {    
                echo "
                <script> alert('Successfully Logged in'); </script>
                ";
                header('Location:admin.php');


            }
    }
    else
        echo "you didn't fill up the form properly";

?>