<html>
    <head>
    <link rel="stylesheet" href="css/styles.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css"/>
    </head>
    <body>
        <header>
            <nav class="navbar">
                <a href="#" class="logo">My Website</a>
                <ul>
                    <li><a href="Index.php" class="hover">Home</a></li>
                    <li class="active"><a href="About.php" class="hover">About</a></li>
                    <li><a href="Projects.php" class="hover">Projects</a></li>
                </ul>
            </nav>
        </header>
        
        <?php
        include 'bars-animation.php' 
        ?>

        <section class="About">
            <div class="About-Desc">
                <div class="card">
                <h1>Education</h1>
                <ul class="edu-timeline">
                    <li><div class="dot">
                        <span><img src="pic1.2.png" alt="Picture"></span>
                        </div>
                        <div class="card">
                            <a href="#" class="title">Sti Ortigas-Cainta</a>
                            <ul class="details">
                                <li>Senior Highschool - Graduated in 2022</li>
                                <li>Mobile App and Web Development</li>
                                <li>1st year to Current</li>
                                <li>Bachelor of Science in Computer Science</li>
                            </ul>
                        </div>
                    </li>
                </ul>
                </div>
            </div>
            <div class="Skills">
                <div class="card">
                <h1>My Skills</h1>
                <div class="card-1">
                    <a href="#"><i class='bx bxl-java'></i></a>
                    <a href="#"><i class='bx bxl-javascript'></i></a>
                    <a href="#"><i class='bx bxl-html5'></i></a>
                    <a href="#"><i class='bx bxl-css3'></i></a>
                    <a href="#"><i class='bx bxl-php'></i></a>
                    <a href="#"><i class="devicon-csharp-plain"></i></a>
                </div>

                <h2>Socials</h2>
                <div class="sci">
                    <a href="#"><i class='bx bxl-github' ></i></a>
                    <a href="#"><i class='bx bxl-linkedin' ></i></a>
                    <a href="#"><i class='bx bxl-facebook' ></i></a>
                    <a href="#"><i class='bx bxl-youtube' ></i></a>
                    <a href="#"><i class='bx bxl-gmail'></i></a>
                </div>


                <section class="contact" id="contact">
                    <div class="contact-card">
                        <h2>Contact Me</h2>
                            <form action="#" method="post" class="contact-form" novalidate>
                                <div class="field">
                                    <label for="name">Name:</label>
                                    <input id="name" name="name" type="text" required />
                                </div>
                                
                                <div class="field">
                                    <label for="email">Email:</label>
                                    <input id="email" name="email" type="email" required />
                                </div>

                                <div class="field">
                                    <label for="message">Message:</label>
                                    <textarea id="message" name="message" rows="5" required></textarea>
                                </div>
                                
                                <button class="btn" type="submit">Send</button>
                            </form>
                    </div>
                </section>
                
                </div>
            </div>
        </section>
        
    </body>
</html>