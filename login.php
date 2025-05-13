<?php session_start(); // Start session at the beginning ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmex - Login</title>
    
    <style>
        body {
            background-color: #f8f9fa;
        }
        
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-box {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
            height:350px;
        }

        .login-logo img {
            width: 120px;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            margin-top:20px;
        }

        .login-btn {
            background: #e91e63;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
            width: 20%;
            margin-top:40px;
            margin-left:-40px;
        }

        .login-btn:hover {
            background: #d81b60;
        }

        .forgot-password,
        .signup-link {
            font-size: 14px;
            display: block;
            margin-top: 10px;
            color: #003A66;
            text-decoration: none;
        }

        .forgot-password:hover,
        .signup-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>



<div class="login-container">
    <div class="login-box">
        <div class="login-logo">
            <img src="images/logo.jpeg" alt="Cosmex Logo">
        </div>
        <h3>Login to Your Account</h3>
        <form method="post">
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <button type="submit" name="login-btn" class="login-btn">Login</button>
        </form>
    </div>
</div>

<?php 


if(isset($_POST["login-btn"])){
    $email = $_POST["email"];
    $password = $_POST["password"]; // Use correct variable name

    if($email == "admin@gmail.com" && $password == "admin"){
        $_SESSION["email"] = $email; // Store session
        header('location:admin/index.php'); // Redirect to admin panel
        exit(); // Stop further execution
    } else {
        echo "<script>alert('Invalid Email or Password');</script>";
    }
}
?>

<?php require_once "linkjs.php"; ?>

</body>
</html>
