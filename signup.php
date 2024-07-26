<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $password = sha1($_POST['pass']);
    $password = filter_var($password, FILTER_SANITIZE_STRING);

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "<script>alert('User already exists!');</script>";
    } else {
        $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        echo "<script>
                alert('Account created successfully!');
                window.location.href = 'login.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script>
        function validateForm() {
            const email = document.forms["signupForm"]["email"].value;
            const password = document.forms["signupForm"]["pass"].value;
            const confirmPassword = document.forms["signupForm"]["confirm_password"].value;

            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            if (password.length < 6) {
                alert("Password must be at least 6 characters long.");
                return false;
            }

            if (password !== confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <div id="login_header">
        <div class="container">
            <nav>
                <a href="home.php" class="logo">EduceMaster.</a>
                <ul id="sidemenu">
                    <nav class="navbar">
                        <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
                        <a href="login.php"><i class="fa-solid fa-right-to-bracket"></i><span>Login</span></a>
                    </nav>
                </ul>
            </nav>
        </div>

        <div id="form-container">
            <div class="container">
                <form name="signupForm" action="signup.php" method="post" onsubmit="return validateForm()">
                    <h3>Sign Up Now</h3>
                    <p>Your Email <span>*</span></p>
                    <input type="email" name="email" placeholder="Enter your email" required maxlength="50" class="box">
                    <p>Your Password <span>*</span></p>
                    <input type="password" name="pass" placeholder="Enter your password" required maxlength="20" class="box">
                    <p>Confirm Password <span>*</span></p>
                    <input type="password" name="confirm_password" placeholder="Confirm your password" required maxlength="20" class="box">
                    <input type="submit" value="Sign Up Now" name="submit" class="btn">
                </form>
            </div>
        </div>
    </div>

    <footer class="footer">
        &copy; copyright @ 2024 by <span>Mahnoor Yasin</span> | all rights reserved!
    </footer>
</body>
</html>
