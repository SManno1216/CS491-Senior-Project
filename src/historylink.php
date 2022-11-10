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
            <h1>History</h1>
        </div>
    </header>
    <!--- End Of Header--->

    <!-- begining of body-->
    <body>
        
        <p>Our History and Social Science tutors will help you to understand your
            classwork and improve your grades and confidence through 1:1
            tutoring.</p>
            
            <li>American History</li>
            <li>European History</li>
            <li>World History</li>
            <li>Government</li>
            <li>Geography</li>
            <li>Computer Science</li>
            
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