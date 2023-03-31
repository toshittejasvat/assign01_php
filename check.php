<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	

		$host = 'localhost';
		$user = 'toshit';
		$password12 = 'Shriyajdk56^';
		$dbname = 'dblab8';
		$conn = mysqli_connect($host, $user, $password12, $dbname);

		if (!$conn) {
			die('Connection failed: ' . mysqli_connect_error());
		}

		$email = mysqli_real_escape_string($conn, $email);
		$password = mysqli_real_escape_string($conn, $password);


    
		$sql = "Select * from users where email='$email'";
		$result= mysqli_query($conn,$sql);
		$result= mysqli_fetch_assoc($result);
        $password_hashed=$result['password'];
		
        if(password_verify($password,$password_hashed)){
            $_SESSION['email']=$result['email'];
            $_SESSION['name']=$result['first_name'].' '.$result['last_name'];
            header("Location:http://localhost/assignment/welcome.php");
            
		} 
        else {
            echo "password is incorrect";
        }
        


		// Close connection
		mysqli_close($conn);
	}


?>
