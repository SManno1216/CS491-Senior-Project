<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/about.css">
    <link rel="stylesheet" type="text/css" href="CSS/contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0c3d71edc6.js" crossorigin="anonymous"></script>
    <title>About Us</title>
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
            <h1>Welcome To Ivy Tutoring!</h1>
            <br>
            <h3>In-Home and Online Tutoring in New Jersey</h3>
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

    <section class="about-melissa-section">
        <div class="about-melissa">
            <div class="melissa-image">
                <img src="images/portrait.jpg">
            </div>
            <div class="melissa-bio">
                <h1>About Melissa</h1>
                <p>
                    I have always had a passion to educate young minds and help them blossom into well-rounded, 
                    responsible and successful individuals. Throughout my 29 years of teaching, I have had wonderful
                     opportunities to teach diverse groups of students, including those with learning differences, those 
                     who performed at grade level and those who were gifted. As a result, I have become proficient at designing 
                     creative and stimulating lesson plans, which accommodate multiple intelligences, bring a hands-on approach 
                     to learning and keep students interested and focused.My greatest desire is to inspire and motivate students. 
                     I actively engage each student by incorporating a variety of manipulatives, enjoyable activities and cooperative 
                     learning projects. I tailor lesson plans to meet their diverse interests, as well as demonstrate direct connections
                     between the classroom and everyday life. The lessons I provide students support strong literacy skills and I try to 
                     ensure each student become a proficient reader, writer, speaker and a lifelong learner. Having been an 
                     Education Major at St. Thomas Aquinas College in Sparkill NY, I am a certified elementary education teacher 
                     in NJ and NY. I hold a M.A. in Educational Leadership and Supervision from St. Peter's University and I have 
                     successfully completed the Orton Gillingham Program at Fairleigh Dickinson University. I am constantly looking 
                     for new approaches to reach all students and develop each one into a strong reader.
                </p>
                <br>
                <h1>Education</h1>
                <div class="list">
                    <ul>
                        <li>Orton Gillingham Teacher Levels 1, 2, 3 & 4</li>
                        <li>Fairleigh Dickenson University, Teaneck NJ; May 2017</li>
                        <li>Master of Art in Educational Supervision/Leadership St. Peter's University Jersey City, NJ; May 1998.</li>
                        <li>Bachelor of Science in Elementary Education St. Thomas Aquinas College, Sparkill, NY; May 1992</li>
                        <li>Certification: New York and New Jersey Certified Elementary Education Teacher Orton Gillingham Teacher IMSLEC Certified</li>
                    </ul>
                </div>
            </div>
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