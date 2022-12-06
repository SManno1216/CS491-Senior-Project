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
                <div id="account-btn" class="fas fa-user"></div>
                <div id="menu-btn" class="fas fa-bars" onclick="toggleMenu()"></div>
            </div>
        </div>

        <div class="banner">
            <h1>Contact Us</h1>
            <br>
            <h3>How Can We Help?</h3>
        </div>
    </header>


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
                <h3>000-000-0000</h3>
                <h3>973-999-9999</h3>
            </div>
            <div class="icons">
                <h3>Email</h3>
                <i class="fas fa-envelope"></i>
                <h3>Melissa@gmail.com</h3>
                <h3>IvyTutoring@gmail.com</h3>
            </div>
            <div class="icons">
                <h3>Locations</h3>
                <i class="fas fa-map"></i>
                <h3>New Jersey</h3>
                <h3>New Jersey</h3>
            </div>
            <div class="icons">
                <h3>Phone</h3>
                <i class="fas fa-phone"></i>
                <h3>000-000-0000</h3>
                <h3>973-999-9999</h3>
            </div>
        </div>
        
        <div class="row">
            <div class="contact-image">
                <img src="images/tutorPic.jpeg">
            </div>

            <form action="">
                <h3>Send Us an Email</h3>
                <input type="text" placeholder="Name" name="name" class="card">
                <input type="email" placeholder="Email" name="email" class="card">
                <input type="text" placeholder="Phone" name="phone" class="card">
                <textarea name="" class="card" placeholder="Message" cols="30" rows="10"></textarea>
                <input type="submit" value="Send Message" class="btn">
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
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
                <a href="#">About Us</a>
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

    <script src="script.js"></script>
    

</body>
</html>