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
            <h1>Welcome To Ivy Tutoring!</h1>
            <br>
            <h3>In-Home and Online Tutoring in New Jersey</h3>
        </div>
    </header>

    <section class="about-section">

        <div class="row">
            <div class="about-col">
                <h3>New Jersey's Premiere Tutoring Service</h3>
                <p>
                    If you're looking for a private, in-home or online tutoring service 
                    in Bergen County NJ, Rockland County NY or pretty much anywhere, we're 
                    glad you found us! Ivy Tutoring Service should be your first choice for 
                    quality in home or online tutoring. We provide tutoring services for 
                    students of all ages, Pre-K through adult. We strive to excite our students 
                    about the learning process, foster curiosity, and build essential skills for 
                    academic success.  We can help frustrated and overwhelmed students (and their parents) 
                    pave the way to lifelong learning and success or provide stimulating Enrichment Programs
                     in all academic studies to pave the way for continuous self-improvement for students who need a challenge. 

                </p>
                <br>
                <p>
                    Tutoring is more than just reteaching: it is an opportunity to transform students' beliefs about 
                    themselves and turn them into strong, motivated, lifelong learners. If you're looking for a private, 
                    in-home or online tutoring service in Bergen County NJ,
                     Rockland County NY or pretty much anywhere, we're glad you found us! Ivy Tutoring Service 
                     should be your first choice for quality in home or online tutoring. We provide tutoring services for 
                     students of all ages, Pre-K through adult. We strive to excite our students about the learning process, 
                     foster curiosity, and build essential skills for academic success.  We can help frustrated and overwhelmed 
                     students (and their parents) pave the way to lifelong learning and success or provide stimulating Enrichment 
                     Programs in all academic studies to pave the way for continuous self-improvement for students who need a challenge.
                </p>
                <br>
                <p>
                    What sets Ivy Tutoring apart is the personal attention that we give to each student to provide an individualized 
                    study program that caters to each student's strengths. This means that each and every student is provided with an 
                    exclusive, one-of-a-kind experience that is tailored to his/her needs. 
                </p>
            </div>

            <form action="">
                <h3>Contact Us</h3>
                <h4>How Can We Help?</h4>
                <input type="text" placeholder="Name" name="name" class="card">
                <input type="email" placeholder="Email" name="email" class="card">
                <input type="text" placeholder="Phone" name="phone" class="card">
                <textarea name="" class="card" placeholder="Message" cols="30" rows="10"></textarea>
                <input type="submit" value="Send Message" class="btn">
            </form>
        </div>

    </section>

    <!-- /************ START OF ABOUT SECTION *************/
    /******************************************/ -->

    <section class="about-section-2">

        <h1 class="heading">Ivy Tutoring Can Help You</h1>

        <div class="box-container">
            <div class="box">
                <img src="images/light.png">
                <h3>Orton Gilligan Method</h3>
                <button>Learn More</button>
                <div class="overlay">
                    <h3>Orton Gilligan Method</h3>
                    <p>
                        We specialize in the Orton-Gillingham method, 
                        a multisensory approach to remediating dyslexia. If a student has 
                        difficulty with reading, spelling, and/or writing, our certified 
                        tutors can help improve his/her decoding ability and reading fluency.
                    </p>
                    <button>Learn More</button>
                </div>
            </div>

            <div class="box">
                <img src="images/teacher.png">
                <h3>Certified Tutors</h3>
                <button>Learn More</button>
                <div class="overlay">
                    <h3>Orton Gilligan Method</h3>
                    <p>
                        Ivy Tutoring Service specializes in the Orton-Gillingham method, 
                        a multisensory approach to remediating dyslexia. If a student has 
                        difficulty with reading, spelling, and/or writing, our certified 
                        tutors can help improve his/her decoding ability and reading fluency.
                    </p>
                    <button>Learn More</button>
                </div>
            </div>

            <div class="box">
                <img src="images/piece.png">
                <h3>The Perfect Fit</h3>
                <button>Learn More</button>
                <div class="overlay">
                    <h3>Orton Gilligan Method</h3>
                    <p>
                        Ivy Tutoring Service specializes in the Orton-Gillingham method, 
                        a multisensory approach to remediating dyslexia. If a student has 
                        difficulty with reading, spelling, and/or writing, our certified 
                        tutors can help improve his/her decoding ability and reading fluency.
                    </p>
                    <button>Learn More</button>
                </div>
            </div>

            <div class="box">
                <img src="images/piggy-bank.png">
                <h3>Affordable Programs</h3>
                <button>Learn More</button>
                <div class="overlay">
                    <h3>Affordable Tutoring Programs</h3>
                    <p>
                        Our programs are affordable for every budget,
                        and we offer flexible payment options to meet your needs.
                    </p>
                    <button>Learn More</button>
                </div>
            </div>
        </div>

    </section>

     <!-- /************ START OF OUR PROCESS SECTION *************/
    /******************************************/ -->

    <section class="process">
        <div class="process-container">
            <div class="process-left">
                <img src="images/tutorPic.jpeg">
            </div>
            <div class="process-right">
                <h1>Our Process</h1>
                <p>
                Ivy Tutoring Service (ITS), 
                LLC is committed to providing a learning environment 
                where students can attain the skills needed to become independent and 
                successful learners. ITS is proud of the commitment to its students. 
                As an educational services provider, ITS sets a positive example for 
                continued growth and learning by keeping up with changes to educational standards. 
                ITS continues to improve its services and staff to provide the best quality tutoring 
                services for students and their families.
                </p>
                <div class="process-card-container">
                    <div class="card">
                        <img src="images/phone.png">
                        <p>We start with an in-depth consultation to discuss your child's needs</p>
                    </div>
                    <div class="card">
                        <img src="images/idea.png" >
                        <p>Then we create a tutoring plan and find you the perfect Tutor</p>
                    </div>
                    <div class="card">
                        <img src="images/home.png" >
                        <p>Tutoring sessions take place in your home or online, around your schedule.</p>
                    </div>
                    <div class="card">
                        <img src="images/email.png" >
                        <p>We send a progress report after each session and check in regularly.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /************ START OF CONTACT US SECTION *************/
    /******************************************/ -->

    <!-- <section class="contact">

    </section> -->

    <!-- /************ START OF SUBJECTS SECTION *************/
    /******************************************/ -->

    <section class="subjects">

        <h1 class="heading">We Tutor All Academic Subjects</h1>
        <ul>
            <li><a href="">Elementary</a></li>
            <li><a href="">Middle School</a></li>
            <li><a href="">High School</a></li>
            <li><a href="">College</a></li>
            <li><a href="">Test Prep</a></li>
        </ul>

        <div class="box-container">
            <div class="box">
                <img src="images/books.png">
                <h3>Reading</h3>
                <button>Learn More</button>
            </div>

            <div class="box">
                <img src="images/writing.png">
                <h3>Writing</h3>
                <button>Learn More</button>
            </div>

            <div class="box">
                <img src="images/history.png">
                <h3>History</h3>
                <button>Learn More</button>
            </div>

            <div class="box">
                <img src="images/maths.png">
                <h3>Math</h3>
                <button>Learn More</button>
            </div>

            <div class="box">
                <img src="images/science.png">
                <h3>Science</h3>
                <button>Learn More</button>
            </div>

            <div class="box">
                <img src="images/science.png">
                <h3>Science</h3>
                <button>Learn More</button>
            </div>

            <div class="box">
                <img src="images/science.png">
                <h3>Science</h3>
                <button>Learn More</button>
            </div>

            <div class="box">
                <img src="images/science.png">
                <h3>Science</h3>
                <button>Learn More</button>
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