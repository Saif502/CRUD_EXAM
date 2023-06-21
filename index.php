<?php
	include "dbcont.php";
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
           
        }
        
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
			margin-top: 60px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            margin-bottom: 20px;
            color: #333;
        }
        
        p {
            color: #666;
            margin-bottom: 30px;
        }
        
        .button-container {
            margin-top: 10px;
        }
        
        .button-container button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 12px 30px;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .button-container button:hover {
            background-color: blueviolet;
        }
        
        .button-container button + button {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Beautiful Website</h1>
        
        <p>Experience the best services and explore a world of possibilities.</p>
        
        <div class="button-container">
            
            <a href="registration.php"> <button>Register</button></a>
			<a href="login.php"><button>Login</button></a>
        </div>
    </div>
</body>
</html>




