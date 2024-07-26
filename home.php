<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
                <a href="home.php" class="logo">EduceMaster.</a>
                <ul id="sidemenu">
                    <nav class="navbar">
                        <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
                        <?php if (isset($_SESSION['user_id'])): ?>
                            <a href="about.php"><i class="fas fa-question"></i><span>About</span></a>
                            <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
                            <a href="contact.php"><i class="fas fa-headset"></i><span>Contact us</span></a>
                            <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a>
                        <?php else: ?>
                            <a href="login.php"><i class="fa-solid fa-right-to-bracket"></i><span>Login</span></a>
                            <a href="signup.php"><i class="fa-solid fa-user-plus"></i><span>Sign up</span></a>
                        <?php endif; ?>
                    </nav>
                </ul>
            </nav>
            <div class="header_text">
            <h1>Welcome To <span>EduceMaster</span></h1>
            <p>EduceMaster is your premier destination for top-notch e-learning experiences. <br>Dive into our extensive selection of expertly crafted courses, tailored to empower<br> you with the skills you need to excel and elevate your career. Become part of our <br>vibrant community of passionate learners and embark on a transformative educational<br> journey today!</p>
           
        </div>
        </div>
    </div>

    <footer class="footer">
        &copy; copyright @ 2024 by <span>Mahnoor Yasin</span> | all rights reserved!
    </footer>

    <script src="script.js"></script>
</body>
</html>
