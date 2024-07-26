<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!------header section----->
    <div id="course_header">
        <div class="container">
            <nav>
                <a href="home.html" class="logo">EduceMaster.</a>
                <ul id="sidemenu">
                <nav class="navbar">
    <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
    <a href="about.php"><i class="fas fa-question"></i><span>About</span></a>
    <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
    
    <?php if (isset($_SESSION['user_id'])): ?>
        <a href="contact.php"><i class="fas fa-headset"></i><span>Contact us</span></a>
        <a href="logout.php"><i class="fas fa-right-from-bracket"></i><span>Logout</span></a>
    <?php else: ?>
        <a href="login.php"><i class="fas fa-right-to-bracket"></i><span>Login</span></a>
        <a href="signup.php"><i class="fas fa-user-plus"></i><span>Sign up</span></a>
    <?php endif; ?>
</nav>

                    
                </ul>
                
               
            </nav>
        </div>


    <!------courses section----->
    <div id="courses">
        <div class="container">
            <h1 class="heading">Our Courses</h1>
            <div class="courses-container">
                <div class="course">
                    <img src="images/thumb-2.png" alt="Course 1">
                    <h3>CSS</h3>
                    <p>Explore CSS and unlock the power of styling and design for web pages. From layout management to responsive design techniques, elevate your websites' visual appeal and user experience.</p>
                    <video controls>
                        <source src="videos/vid-1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="course">
                    <img src="images/thumb-3.png" alt="Course 2">
                    <h3>Java Script</h3>
                    <p>Learn JavaScript, the fundamental language of the web. Master the essentials of scripting and dynamic web page creation, enhancing user interaction and functionality.</p>
                    <video controls>
                        <source src="videos/vid-2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="course">
                    <img src="images/thumb-4.png" alt="Course 3">
                    <h3>Bootstrap</h3>
                    <p>Master Bootstrap, the front-end framework for responsive and mobile-first web development. Utilize its grid system, components, and utilities to streamline UI design and development workflow.</p>
                    <video controls>
                        <source src="videos/vid-3.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="course">
                    <img src="images/thumb-5.png" alt="Course 3">
                    <h3>jQuery</h3>
                    <p>Harness the capabilities of jQuery for efficient client-side scripting. Streamline HTML document traversal, event handling, and animation, making web development faster and more interactive.</p>
                    <video controls>
                        <source src="videos/vid-4.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="course">
                    <img src="images/thumb-6.png" alt="Course 3">
                    <h3>SaaS</h3>
                    <p>Understand SaaS architecture and deployment models. Learn to develop scalable, cloud-based applications accessible via web browsers, catering to modern software delivery needs.</p>
                    <video controls>
                        <source src="videos/vid-5.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="course">
                    <img src="images/thumb-7.png" alt="Course 3">
                    <h3>PHP</h3>
                    <p>Dive into PHP programming and server-side scripting. Discover how to build dynamic websites and web applications, process forms, and interact with databases like MySQL.</p>
                    <video controls>
                        <source src="videos/vid-6.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="course">
                    <img src="images/thumb-8.png" alt="Course 3">
                    <h3>MySQL</h3>
                    <p>Gain proficiency in MySQL database management. Learn SQL queries, database design, and optimization techniques essential for storing and retrieving data efficiently in web applications.</p>
                    <video controls>
                        <source src="videos/vid-7.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="course">
                    <img src="images/thumb-9.png" alt="Course 3">
                    <h3>GO</h3>
                    <p>Master Go (Golang), renowned for its efficiency and concurrency. Learn to build scalable, high-performance applications for modern software development.</p>
                    <video controls>
                        <source src="videos/vid-8.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>



<footer class="footer">
    &copy; copyright @ 2024 by <span>Mahnoor Yasin</span> | all rights reserved!
</footer>

</body>

</html>