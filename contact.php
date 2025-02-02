<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!------header section----->

    <div id="contact_header">
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
        <div id="contact">
            <div class="container">
                <div class="row">
                    <div class="contact-left">
                        <h1 class="sub-title">Contact Us</h1>
                        <p><i class="fas fa-paper-plane"></i>mahnooryasin660@gmail.com</p>
                        <p><i class="fas fa-phone-square-alt"></i> 111-222-3333</p>
                        <div class="social-icon">
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-twitter-square"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/mahnoor-yasin-037311301/"><i
                                    class="fab fa-linkedin"></i></a>
                        </div>

                    </div>
                    <div class="contact-form">
                        <form name="submit-to-google-sheet">
                            <input type="text" name="Name" placeholder="Your Name" required>
                            <input type="email" name="Email" placeholder="Your email" required>
                            <textarea name="Messege" rows="8" placeholder="Your Message" required></textarea>
                            <button type="submit" class="btn btn2">Submit</button>

                        </form>
                        <span id="msg"></span>

                    </div>
                </div>
            </div>

        </div>


        <script>
            const scriptURL = 'https://script.google.com/macros/s/AKfycbwkQ0ZuZSTG8_WgddceBtA70K6WUY5IkWRr5qef5DtPcNA3Kfkp_iFFnrBUO_H9tYJwNw/exec'
            const form = document.forms['submit-to-google-sheet']

            form.addEventListener('submit', e => {
                e.preventDefault();
                fetch(scriptURL, { method: 'POST', body: new FormData(form) })
                    .then(response => {
                        msg.innerHTML = "Message sent successfully"
                        setTimeout(function () {
                            msg.innerHTML = ""
                        }, 5000
                        )
                        form.reset()
                    })
                    .catch(error => console.error('Error!', error.message));
            })
        </script>



<footer class="footer">

    &copy; copyright @ 2024 by <span>Mahnoor Yasin</span> | all rights reserved!

</footer>

</body>

</html>