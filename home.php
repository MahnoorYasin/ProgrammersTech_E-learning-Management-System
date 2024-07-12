<?php
include 'connect.php';

if (!isset($_COOKIE['user_id'])) {
    header('Location: login.php');
    exit();
}

// Fetch user details or perform actions as needed
// Example: Fetch user details from the database
$stmt = $conn->prepare("SELECT * FROM users WHERE user_id = :user_id");
$stmt->bindParam(':user_id', $_COOKIE['user_id']);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="header">
    <div class="container">
        <nav>
            <a href="home.html" class="logo">EduceMaster.</a>
            <nav class="navbar">
                    <a href="home.html"><i class="fas fa-home"></i><span>Home</span></a>
                    <a href="about.html"><i class="fas fa-question"></i><span>About</span></a>
                    <a href="courses.html"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
                    <a href="login.php"><i class="fa-solid fa-right-to-bracket"></i><span>Login</span></a>
                    <a href="signup.php"><i class="fa-solid fa-user-plus"></i></i><span>Sign up</span></a>
                    <a href="contact.html"><i class="fas fa-headset"></i><span>Contact us</span></a>
                 </nav>
        </nav>

        <div class="header_text">
            <h1>Welcome To <span>EduceMaster</span></h1>
            <p>EduceMaster is your premier destination for top-notch e-learning experiences.<br>Dive into our extensive selection of expertly crafted courses, tailored to empower<br>you with the skills you need to excel and elevate your career. Become part of our<br>vibrant community of passionate learners and embark on a transformative educational<br>journey today!</p>
        </div>
    </div>
</div>

<footer class="footer">
    &copy; copyright @ 2024 by <span>Mahnoor Yasin</span> | all rights reserved!
</footer>

</body>
</html>
