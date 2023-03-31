<?php
ini_set('display_errors',1);
error_reporting(-1);
session_start();



$email = $_SESSION['email'];

$host = 'localhost';
		$user = 'toshit';
		$password12 = 'Shriyajdk56^';
		$dbname = 'dblab8';
		$conn = mysqli_connect($host, $user, $password12, $dbname);

		if (!$conn) {
			die('Connection failed: ' . mysqli_connect_error());
		}

    $first_name =  $_POST['first_name'];
    $last_name =  $_POST['last_name'];
    $password =  $_POST['password'];
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);
    $query = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', password = '$password_hashed' WHERE email= '$email'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: /assignment/login.php');
        
    } else {
        echo "Error: " . mysqli_error($conn);
    }
?>


