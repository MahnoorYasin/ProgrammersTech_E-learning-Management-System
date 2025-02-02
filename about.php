<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

<!------header section----->

<div id="about_header">
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

<!------about section----->
<div class="about_text">
    <h1>About Us</h1>
    <p>Welcome to EduceMaster, where education and excellence converge. Our mission is to deliver superior e-learning experiences that empower individuals to reach their highest potential. EduceMaster offers an extensive range of courses, each meticulously curated by industry experts to cater to various interests and skill levels.</p>
    <h2>Why EduceMaster Stands Out</h2>
    <h3>
        <span>Expert Instructors:</span> Our courses are developed and delivered by seasoned professionals, ensuring you gain practical, real-world insights.<br>
    <span>Comprehensive Curriculum:</span> From foundational skills to advanced specializations, our diverse course offerings meet the needs of learners at all stages of their careers.<br>
    <span>Interactive Learning:</span> Engage with dynamic course materials, including videos, quizzes, and hands-on projects, designed to make learning both effective and enjoyable.<br>
    <span>Flexible Access:</span> Enjoy 24/7 access to all course content, allowing you to learn at your own pace and fit your education into your busy schedule.<br>
    <span>Community Engagement:</span> Become part of a vibrant community of learners and educators, where you can network, share knowledge, and receive ongoing support.<br>
    <br>
    At EduceMaster, we are committed to making high-quality education accessible, engaging, and tailored to help you achieve success. Join us today and embark on a journey to master new skills and advance your career with confidence.
    </h3>
   
</div>


    </div>
</div>

<div id="testimonial">
    <h1 class="heading">Testimonials</h1>
    <div class="box-container">
        <div class="box">
            <p>EduceMaster has been a game-changer for my learning journey. The courses are well-structured and the instructors are top-notch. I highly recommend this platform to anyone looking to enhance their skills.</p>
            <div class="student">
                <img src="images/pic-2.jpg" alt="">
                <div>
                    <h3>John Doe</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <p>I love the variety of courses available on EduceMaster. The content is engaging and easy to follow. Plus, the community support is fantastic. I've learned so much already!</p>
            <div class="student">
                <img src="images/pic-3.jpg" alt="">
                <div>
                    <h3>Jane Smith</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <p>The user interface of EduceMaster is very intuitive and user-friendly. It makes navigating through the courses and resources a breeze. Kudos to the team for creating such a great platform!</p>
            <div class="student">
                <img src="images/pic-4.jpg" alt="">
                <div>
                    <h3>John Doe</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <p>EduceMaster offers an impressive range of courses that cater to all levels of learners. The video tutorials and supplementary materials are extremely helpful. It's definitely worth the investment</p>
            <div class="student">
                <img src="images/pic-5.jpg" alt="">
                <div>
                    <h3>Emily Johnson</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <p>I've tried many e-learning platforms, but EduceMaster stands out for its high-quality content and excellent customer support. The instructors are knowledgeable and responsive to queries.</p>
            <div class="student">
                <img src="images/pic-6.jpg" alt="">
                <div>
                    <h3>Michael Brown</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <p>EduceMaster has exceeded my expectations. The courses are comprehensive and the interactive elements keep me engaged. I've recommended this platform to my friends and colleagues.</p>
            <div class="student">
                <img src="images/pic-7.jpg" alt="">
                <div>
                    <h3>Sarah White</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="faq">
    <h1 class="heading">Frequently Asked Questions</h1>
    <div class="faq-container">
        <div class="faq-item">
            <h3 class="faq-question">What is EduceMaster?</h3>
            <p class="faq-answer">EduceMaster is an online learning platform that offers a wide range of courses to help you enhance your skills.</p>
        </div>
        <div class="faq-item">
            <h3 class="faq-question">How do I sign up for a course?</h3>
            <p class="faq-answer">You can sign up for a course by creating an account and then enrolling in the course of your choice.</p>
        </div>
        <div class="faq-item">
            <h3 class="faq-question">Are the courses free?</h3>
            <p class="faq-answer">Some courses are free, while others require a fee. Please check the course details for more information.</p>
        </div>
        <div class="faq-item">
            <h3 class="faq-question">Can I get a certificate after completing a course?</h3>
            <p class="faq-answer">Yes, you can get a certificate after successfully completing a course.</p>
        </div>
        <div class="faq-item">
            <h3 class="faq-question">What payment methods are accepted?</h3>
            <p class="faq-answer">We accept various payment methods, including credit/debit cards and PayPal.</p>
        </div>
        <div class="faq-item">
            <h3 class="faq-question">How can I contact customer support?</h3>
            <p class="faq-answer">You can contact customer support through our contact page or by emailing support@educemaster.com.</p>
        </div>
    </div>
</div>



<!-- Include the JavaScript file -->
<script src="faq.js"></script>


<footer class="footer">

    &copy; copyright @ 2024 by <span>Mahnoor Yasin</span> | all rights reserved!
     
</footer>




    
</body>
</html>