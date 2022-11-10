<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <title>Document</title>
</head>
<body>

    <!--- Header of Page --->

    <header id="banner" class="grid">
        <!-- navigation bar -->
        <div class="navbar">
            <!-- logo -->
            <a class="logo" href="index.php">Ivy Tutoring</a>
            <!-- navigation items -->
            <div class="nav-items">
                <a href="index.php">Home</a>
                <a href="about.php">About Us</a>
                <a href="contact.php">Contact Us</a>
                <a href="courses.php">Course Descriptions</a>
                <a href="#" id="nav-button">Make An Appointment</a>
            </div>
        </div>
         <!-- banner text -->
        <div class="banner-text">
            <h1>Course Descriptions</h1>
        </div>
    </header>
    <!--- End Of Header--->

    <!-- begining of body-->
    <body>
        
        <p>Beginning school is such a wonderful milestone. Let us
        help your child have the best possible start. Our tutors
        will provide a nurturing and hands-on learning experience
        that will give your child the tools needed to have a
        successful start to their academic career!
        All of our preschool tutors are certified early childhood
        teachers. Our tutors incorporate hands-on activities and
        games to create an interactive learning experience that
        will motivate and inspire your child all while giving them a
        solid foundation to begin formal schooling.</p>
        
        <button onclick="document.location='mathlink.php'">Mathematics</button>
        <button onclick="document.location='sciencelink.php'">Science</button>
        <button onclick="document.location='historylink.php'">History</button>
        <button onclick="document.location='readinglink.php'">Reading and Writing</button>
        
        <h3>Our tutors are available seven days a week to travel to your home for
            personalized one-on-one lessons. We work collaboratively with your
            childs teacher and provide you with a progress report after each
            session detailing progress that was made and areas that still need to
            be addressed.
        </h3>
    </body>

        <!--end of body-->

    <a href="index.php">GO BACK HOME</a>

    <!--- Start of Footer --->
    <footer class="footer">
        <!-- link container -->
        <div class="footer-container">
            <img src="images/logo.webp">
            <!-- COLUMN 1 LINKS -->
            <div class="footer-links">
                <h4>Get to Know Us</h4>
                <a href="about.php">About Us</a>
                <a href="contact.php">Contact Us</a>
                <a href="courses.php">Services</a>
                <a href="#">Make An Appointment</a>
                <a href="#">Reviews</a>
                <!-- <hr> -->
            </div>
            <!-- COLUMN 2 LINKS -->
            <div class="footer-links">
                <h4>Get to Know Us</h4>
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
                <a href="#">Reviews</a>
                <a href="#">About Us</a>
                <!-- <hr> -->
            </div>
            <!-- COLUMN 3 LINKS -->
            <div class="footer-links">
                <h4>Log In</h4>
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
                <a href="#">Reviews</a>
                <!-- <hr> -->
            </div>
            <!-- COLUMN 4 EMAIL FORM -->
            <div class="footer-email-form">
                <h4>Send Us An Email</h4>
                <input type="email" placeholder="Enter Your Email Address" id="footer-email">
                <input type="submit" value="Send" id="footer-email-btn">
                <!-- <hr> -->
            </div>
        </div>
        <!-- Copyright -->
        <div class="footer-copyright">
            &copy; Ivy Tutoring Service. All Rights Reserved
            <hr>
        </div>
    </footer>
    <!--- End of Footer --->

</body>
</html>