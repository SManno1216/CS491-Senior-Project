<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/courses.css">
    <link rel="stylesheet" type="text/css" href="CSS/contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0c3d71edc6.js" crossorigin="anonymous"></script>
    <title>Ivy Tutoring</title>
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

    <!-- begining of body-->
    

<section class="section-6">
    <div class="course-body">

        <div class="course-descrip">
            <h1> Course Material</h1>
            <br>
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
        </div>
         
        <div class="aside">
            <h4>Our tutors are available seven days a week to travel to your home for
                personalized one-on-one lessons. We work collaboratively with your
                childs teacher and provide you with a progress report after each
                session detailing progress that was made and areas that still need to
                be addressed.
            </h4>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="images/calculator.png">
                <h3>Mathematics</h3>
                <button>Learn More</button>
                <div class="overlay">
                    <h3>Mathematics</h3>
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
                </div>
            </div>

            <div class="box">
                <img src="images/parchment.png">
                <h3>History</h3>
                <button>Learn More</button>
                <div class="overlay">
                    <h3>History</h3>
                    <p>Our History and Social Science tutors will help you to understand your
                    classwork and improve your grades and confidence through 1:1 tutoring.</p>
                    <li>American History</li>
                    <li>European History</li>
                    <li>World History</li>
                    <li>Government</li>
                    <li>Geography</li>
                    <li>Computer Science</li>
                </div>
            </div>

            <div class="box">
                <img src="images/chemistry.png">
                <h3>Science</h3>
                <button>Learn More</button>
                <div class="overlay">
                    <h3>Science</h3>
                    <p>Science can be difficult, but we can make it easier! Our science
                    tutors at Ivy Tutoring Services can help you gain a better 
                    understanding and improve your grades!</p>
                    <li>Middle School Science</li>
                    <li>Physical Science</li>
                    <li>Environmental Science</li>
                    <li>Biology</li>
                    <li>Chemistry</li>
                    <li>Physics</li>
                    <li>AP Science Classes</li>
                    <li>And More!</li>
                </div>
            </div>
    </div>
    <div class="box-container">
        <div class="box">
                <img src="images/note.png">
                <h3>Reading and Writing</h3>
                <button>Learn More</button>
                <div class="overlay">
                    <h3>Reading and Writing</h3>
                    <p>Ivy Tutoring Services provides personally tailored reading lessons from
                    our highly qualified and outstanding tutors. Reading is one of the most
                    important skills for a child to master. Success in every other subject
                    requires it. Writing is an essential communication tool that requires a
                    skilled thought process. Our tutors can work with you 1:1 to improve
                    writing skills and improve your grades. Our tutors can teach and improve:</p>
                    <li>Fluency</li>
                    <li>Comprehension</li>
                    <li>Vocabulary</li>
                    <li>Grammer</li>
                    <li>Spelling</li>
                    <li>Essays</li>
                    <li>Research Papers</li>
                    
                </div>
            </div>

            <div class="box">
                <img src="images/toy-blocks.png">
                <h3>Kindergarten and Preschool Tutoring</h3>
                <button>Learn More</button>
                <div class="overlay">
                    <h3>Kindergarten and Preschool</h3>
                    <p>Beginning school is such a wonderful milestone. Let us help your child have the 
                    best possible start. Our tutors will provide a nurturing and hands-on learning
                    experience that will give your child the tools needed to have a successful start
                     to their academic career!
                     All of our preschool tutors are certified early childhood teachers. Our tutors incorporate 
                     hands-on activities and games to create an interactive learning experience that will 
                     motivate and inspire your child all while giving them a solid foundation to begin formal schooling.
                     
                </div>
            </div>

            <div class="box">
                <img src="images/brainstorm.png">
                <h3>Orton Gillingham Method</h3>
                <button>Learn More</button>
                <div class="overlay">
                    <h3>Orton Gillingham</h3>
                    <p>Ivy Tutoring Service specializes in the Orton-Gillingham method, a multisensory approach 
                        to remediating dyslexia. If a student has difficulty with reading, spelling, and/or writing,
                         our certified tutors can help improve his/her decoding ability and reading fluency. The Orton Gillingham
                         methodology for teaching reading and spelling is a scientifically based, systematic, multi-sensory
                         program with many decades of research behind it. The "OG" method is considered <strong>the</strong> best 
                         methodogoly for teaching dyslexic children. Research shows that other struggling learners benefit 
                         greatly from OG instruction as well.
                         <br>
                         Children with dyslexia and other struggling readers/spellers typically require direct, specific instruction
                         in each of the components of the reading process in order to read and spell proficiently. They often
                         benefit from the intensity of instruction, and the one-on-one settings where learning is personalized.
                         Please call for more information about our Orton Gillingham program.</p>
                </div>
            </div>

        </div>
    </div>
            
</section>

        <!--end of body-->

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
