<?php
session_start();

$host = 'localhost';
		$user = 'toshit';
		$password12 = 'Shriyajdk56^';
		$dbname = 'dblab8';
		$conn = mysqli_connect($host, $user, $password12, $dbname);


if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    
        $query = "DELETE FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            session_destroy();
            header('Location: login.php');
        } else {
            echo "Error: " . mysqli_error($conn);
        }
} else {
    header('Location: login.php');
}
?>


   
    

