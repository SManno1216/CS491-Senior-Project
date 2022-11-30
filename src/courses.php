<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/courses.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0c3d71edc6.js" crossorigin="anonymous"></script>
    <title>Ivy Tutoring</title>
</head>

<body>

    <!--- Header of Page --->
    <header>
        <!-- navigation bar -->
        <div class="navbar">
            <!-- logo -->
            
            <div class="logo">
                <img src="images/logo5.png">
                <a href="index.html">Ivy Tutoring</a>
            </div>

            <!-- navigation items -->
            <div class="nav-items" id="nav-container">
                <div class="nav-close">
                    <h3 onclick="toggleMenu()">&#10539;</h3>
                </div>
                <a href="index.php">Home</a>
                <a href="about.php">About Us</a>
                <a href="#">Contact Us</a>
                <a href="courses.php">Course Material</a>
                <a><i class="fa-solid fa-user fa-xl" onclick="toggleMenu()"></i></a>
                <!-- <button>Apply Now</button> -->
            </div>
            <div class="menu">
                <h3 onclick="toggleMenu()">&#9776;</h3>
            </div>
        </div>    

    </header>
    <!--- End Of Header--->

    <!-- begining of body-->
    <div class="section-4">
        <div class="course-body">
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
         <src img="">
             <div class="closure">
                 <h4>Our tutors are available seven days a week to travel to your home for
                 personalized one-on-one lessons. We work collaboratively with your
                 childs teacher and provide you with a progress report after each
                 session detailing progress that was made and areas that still need to
                 be addressed.</h4>
            </div>                
            <button class="accordion">Mathematics</button>
            <div class="panel">
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
                <br>
                <li>Elementary Math</li>
                <li>Middle School Math</li>
                <li>Pre-Algebra</li>
                <li>Algebra 1</li>
                <li>Trigonometry</li>
                <li>Pre-Calculus</li>
                <li>Calculus</li>
            </div>

            <button class="accordion">History</button>
            <div class="panel">
                <p>Our History and Social Science tutors will help you to understand your
                    classwork and improve your grades and confidence through 1:1 tutoring.</p>
                    <br>
                    <li>American History</li>
                    <li>European History</li>
                    <li>World History</li>
                    <li>Government</li>
                    <li>Geography</li>
                    <li>Computer Science</li>
            </div>

            <button class="accordion">Science</button>
            <div class="panel">
                Science can be difficult, but we can make it easier! Our science
                tutors at Ivy Tutoring Services can help you gain a better 
                understanding and improve your grades!
                <br>
                <li>Middle School Science</li>
                <li>Physical Science</li>
                <li>Environmental Science</li>
                <li>Biology</li>
                <li>Chemistry</li>
                <li>Physics</li>
                <li>AP Science Classes</li>
                <li>And More!</li>
            </div>
            <button class="accordion">Reading and Writing</button>
            <div class="panel">
                <p>Ivy Tutoring Services provides personally tailored reading lessons from
                our highly qualified and outstanding tutors. Reading is one of the most
                important skills for a child to master. Success in every other subject
                requires it. Writing is an essential communication tool that requires a
                skilled thought process. Our tutors can work with you 1:1 to improve
                writing skills and improve your grades. Our tutors can teach and improve:</p>
                <br>
                <li>Fluency</li>
                <li>Comprehension</li>
                <li>Vocabulary</li>
                <li>Grammer</li>
                <li>Spelling</li>
                <li>Essays</li>
                <li>Research Papers</li>
            </div>
        </div>

            <script>
            var acc = document.getElementsByClassName("accordion");
            var i;
            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.display === "block") {
                        panel.style.display = "none";
                    } 
                    else {
                        panel.style.display = "block";
                    }
                });
            }
            </script>
    </div>

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