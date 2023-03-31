<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f0f0f0;
		}
		h1 {
			text-align: center;
			margin-top: 30px;
			margin-bottom: 50px;
			color: #333;
		}
		form {
			max-width: 500px;
			margin: auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			border-radius: 5px;
		}
		label {
			display: inline-block;
			width: 120px;
			font-weight: bold;
			margin-bottom: 10px;
		}
		input[type="text"],
		input[type="email"],
		input[type="password"] {
			padding: 10px;
			font-size: 16px;
			border-radius: 5px;
			border: 1px solid #ccc;
			width: 100%;
			box-sizing: border-box;
			margin-bottom: 20px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			padding: 10px 20px;
			font-size: 16px;
			border-radius: 5px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<h1>User Login </h1>
	<form action="check.php" method="post">
		

		

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>

		
		<input type="submit" value="Login"><br>
		<a href="/assignment/main.php">If you don't have account </a>
	</form>
</body>
</html>
