<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];

	$errors = array();

	if (empty($first_name)) {
		$errors[] = 'First name is required.';
	}

	if (empty($last_name)) {
		$errors[] = 'Last name is required.';
	}

	if (empty($email)) {
		$errors[] = 'Email is required.';
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors[] = 'Invalid email format.';
	}

	if (empty($password)) {
		$errors[] = 'Password is required.';
	} elseif (strlen($password) < 8) {
		$errors[] = 'Password must be at least 8 characters.';
	}

	if (empty($confirm_password)) {
		$errors[] = 'Confirm password is required.';
	} elseif ($password != $confirm_password) {
		$errors[] = 'Passwords do not match.';
	}

	if (empty($errors)) {
		$host = 'localhost';
		$user = 'toshit';
		$password12 = 'Shriyajdk56^';
		$dbname = 'dblab8';
		$conn = mysqli_connect($host, $user, $password12, $dbname);

		if (!$conn) {
			die('Connection failed: ' . mysqli_connect_error());
		}

		$first_name = mysqli_real_escape_string($conn, $first_name);
		$last_name = mysqli_real_escape_string($conn, $last_name);
		$email = mysqli_real_escape_string($conn, $email);
		$password = mysqli_real_escape_string($conn, $password);

		
		$password_hashed = password_hash($password, PASSWORD_DEFAULT);

		$sql = "INSERT INTO users (first_name, last_name, email,password) VALUES ('$first_name', '$last_name', '$email', '$password_hashed')";
		if (mysqli_query($conn, $sql)) {
			echo 'You have been registered.';
			header("Location:http://localhost/assignment/login.php");
		} 
		else {
			echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
		}

		mysqli_close($conn);
	} else {
		foreach ($errors as $error) {
			echo $error . '<br>';
		}
	}
}


?>
