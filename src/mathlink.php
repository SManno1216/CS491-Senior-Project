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
                <a href="" id="nav-button">Make An Appointment</a>
            </div>
        </div>
         <!-- banner text -->
        <div class="banner-text">
            <h1>Mathematics</h1>
        </div>
    </header>
    <!--- End Of Header--->

    <!-- begining of body-->
    <body>
        
        <p>At Ivy Tutoring Services we tutor all levels of math from Elementary
            Math to AP Calculus. Math can be a very difficult and frustrating
            subject for many students. Our math tutors are knowledgeable and
            experienced teachers and tutors who patiently work to simplify
            complex math problems and build confidence in their students. Our
            math tutors use hands on activities, manipulatives and technology to
            engage their students interest while helping them to build a solid
            mathematical foundation. They break down the concepts piece by
            piece and explain the material in ways that mesh with your childs
            learning style.</p>
            
            <li>Elementary Math</li>
            <li>Middle School Math</li>
            <li>Pre-Algebra</li>
            <li>Algebra 1</li>
            <li>Trigonometry</li>
            <li>Pre-Calculus</li>
            <li>Calculus</li>
            
            <button><a href="courses.php">Go Back</a></button>
            <button onclick="document.location='mathlink.php'">Mathematics</button>
            <button onclick="document.location='sciencelink.php'">Science</button>
            <button onclick="document.location='historylink.php'">History</button>
            <button onclick="document.location='readinglink.php'">Reading and Writing</button>
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