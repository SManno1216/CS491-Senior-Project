<?php
    include('mail.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0c3d71edc6.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="images/logo5.png">
                <a href="index.php">Ivy Tutoring</a>
            </div>
    
            <div class="nav-items" id="nav-container">
                <div id="close-menu" class="fas fa-times" onclick="toggleMenu()"></div>
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
                <a href="courses.php">Courses</a>
            </div>
    
            <div class="nav-icons">
            <div data-modal-target="#modal" id="account-btn" class="fas fa-user"></div>
                <div id="menu-btn" class="fas fa-bars" onclick="toggleMenu()"></div>
            </div>
        </div>

        <div class="banner">
            <h1>Contact Us</h1>
            <br>
            <h3>How Can We Help?</h3>
        </div>
    </header>

    <div class="modal" id="modal">
        <span data-close-button class="close">&times;</span>
        <div class="login-container">
            <form action="">
                <h1>Tutor Login</h1>
                <input type="email" placeholder="Email" name="email" class="card">
                <input type="password" placeholder="Password" name="password" class="card">
                <input type="submit" name="submit" value="Login">
            </form>
        </div>
    </div>
    <div id="login-overlay"></div>

    <section class="contact">

        <h1 class="heading">Get in Touch!</h1>

        <div class="contact-body">
            <!-- <h1 class="heading">Contact Ivy Tutoring Now!</h1> -->
            <p>Getting started with Ivy Tutoring Services is easy!  
                It all starts with a phone call to our office to discuss 
                your child's needs with our director, Melissa. Melissa works 
                with each student and family to customize a plan that's specific 
                to the academic goals of that student.
            </p>
            <br>
            <p>
                We have a comprehensive, collaborative approach and we work 
                together with you and your child to identify the 
                right strategies and the perfect tutor.  We look forward to talking 
                to you to answer any questions you may have about our tutors and our tutoring services.  
                Give us a call or send us a note through the form below.  We look forward to working with you and your family!
            </p>
        </div>
        
        <div class="icons-container">
            <div class="icons">
                <h3>Phone</h3>
                <i class="fas fa-phone"></i>
                <h3>201-970-4814</h3>
            </div>
            <div class="icons">
                <h3>Email</h3>
                <i class="fas fa-envelope"></i>
                <!-- <h3>Email</h3> -->
                <p>Mfrank@ivytutoringservice.com</p>
            </div>
            <div class="icons">
                <h3>Locations</h3>
                <i class="fas fa-map"></i>
                <h3>North Jersey</h3>
            </div>
            <div class="icons">
                <h3>Hours of Operation</h3>
                <i class="fas fa-clock"></i>
                <h3>7 Days a Week</h3>
            </div>
        </div>
        
        <div class="row">
            <div class="contact-image">
                <img src="images/contact-img.png">
            </div>

            <form method="post">
                <h3>Send Us an Email</h3>
                <input type="text" placeholder="Name" name="name" class="card">
                <input type="email" placeholder="Email" name="email" class="card">
                <input type="text" placeholder="Phone" name="phone" class="card">
                <textarea name="Message" class="card" placeholder="Message" cols="30" rows="10"></textarea>
                <input type="submit" name="submit" value="Send Message" class="btn">
                <?php if(!empty($status)){ ?>
                    <div class="success"> <?php echo $status; ?></div>
                <?php } ?>
            </form>
        </div>

    </section>

    <!--- Start of Footer --->
    <footer class="footer">
        <!-- link container -->
        <div class="footer-container">
            <img src="images/logo5.png">
            <!-- COLUMN 1 LINKS -->
            <div class="footer-links">
                <h4>Get to Know Us</h4>
                <a href="about.php">About Us</a>
                <a href="contact.php">Contact Us</a>
                <a href="courses.php">Courses</a>
                <!-- <hr> -->
            </div>
            <!-- COLUMN 2 LINKS -->
            <div class="footer-links">
                <h4>Get to Know Us</h4>
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
                <a href="#">Reviews</a>
                <!-- <hr> -->
            </div>
            <!-- COLUMN 3 LINKS -->
            <div class="footer-links">
                <h4>Get to Know Us</h4>
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
                <a href="#">Reviews</a>
                <!-- <hr> -->
            </div>
            <!-- COLUMN 4 EMAIL FORM -->
            <div class="footer-email-form">
                <h4>Subscribe to Our Newsletter</h4>
                <input type="email" placeholder="Enter Your Email Address" id="footer-email">
                <input type="submit" value="Send" id="footer-email-btn">
            </div>
        </div>
        <!-- Copyright -->
        <div class="footer-copyright">
            &copy; Ivy Tutoring Service. All Rights Reserved
            <hr>
        </div>
    </footer>
    <!--- End of Footer --->

    <script src="script.js">
        // Get the modal
        var modal = document.getElementById("MyModal");

        // Get the button that opens the modal
        var btn = document.getElementById("account-btn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
        modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }
    </script>
    

</body>
</html>