<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $password = sha1($_POST['password']);
    $password = filter_var($password, FILTER_SANITIZE_STRING);

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        setcookie('user_id', $row['user_id'], time() + 60*60*24*30, '/');
        header('Location: home.php'); // Redirect to home page
    } else {
        echo "Invalid email or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Header section -->
    <div id="login_header">
        <div class="container">
            <nav>
                <a href="home.html" class="logo">EduceMaster.</a>
                <ul id="sidemenu">
                    <nav class="navbar">
                        <a href="home.html"><i class="fas fa-home"></i><span>Home</span></a>
                        <a href="about.html"><i class="fas fa-question"></i><span>About</span></a>
                        <a href="courses.html"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
                        <a href="login.html"><i class="fa-solid fa-right-to-bracket"></i><span>Login</span></a>
                        <a href="signup.html"><i class="fa-solid fa-user-plus"></i><span>Sign up</span></a>
                        <a href="contact.html"><i class="fas fa-headset"></i><span>Contact us</span></a>
                    </nav>
                    
                </ul>
               
            </nav>
        </div>


        <div id="form-container">
            <div class="container">
                <form action="login.php" method="post" enctype="multipart/form-data">
                    <h3>Login Now</h3>
                    <p>Your Email <span>*</span></p>
                    <input type="email" name="email" placeholder="Enter your email" required maxlength="50" class="box">
                    <p>Your Password <span>*</span></p>
                    <input type="password" name="pass" placeholder="Enter your password" required maxlength="20" class="box">
                    <input type="submit" value="Login Now" name="submit" class="btn">
                </form>
            </div>
        </div>

    </div>




    <!-- Footer section -->
    <footer class="footer">
        &copy; copyright @ 2024 by <span>Mahnoor Yasin</span> | all rights reserved!
    </footer>

</body>

</html>
