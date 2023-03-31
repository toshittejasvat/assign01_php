<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            font-size: 48px;
            margin-top: 50px;
            margin-bottom: 30px;
        }

        p {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #555;
        }

        input {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 50px;
            transition: background-color 0.3s ease;
        }

        input:hover {
            background-color: #3e8e41;
        }

        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        .button-container input:not(:last-child) {
            margin-right: 30px;
        }

        @media screen and (max-width: 768px) {
            h1 {
                font-size: 36px;
            }

            p {
                font-size: 20px;
            }

            input {
                font-size: 16px;
            }

            .button-container {
                flex-wrap: wrap;
            }

            .button-container button {
                margin-right: 0px;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <h1>Welcome</h1>
    
    <?php
    session_start();

    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $name = $_SESSION['name'];
        
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        
       
    } else {
        header('Location: /assignment/login.php'); 
    }
    ?>
    <div class="button-container">
    <form action="update.php" method="post">
        <input type="submit" value="Update">
    </form>
    <form action="logout.php" method="post">
        <input type="submit" value="Logout">
    </form>
    <form action="delete.php" method="post" onsubmit="return confirm('CONFIRM TO DEL');">
        <input type="submit" value="Delete" >
    </form>
    </div>
</body>
</html>
