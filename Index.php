<html>
    <head>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
        <header>
            <nav class="navbar">
                <a href="#" class="logo">My Website</a>
                <ul>
                    <li class="active"><a href="Index.php" class="hover">Home</a></li>
                    <li><a href="About.php" class="hover">About</a></li>
                    <li><a href="Projects.php" class="hover">Projects</a></li>
                </ul>
            </nav>
        </header>

        <?php
        include 'bars-animation.php' 
        ?>

        <section class="Home">
            <div class="Home-Desc">
                <h1>Maximillian Nanalig</h1>
                <h2>An aspiring
                    <span style="--i:1;">Full-Stack Developer</span>
                </h2>
                <p>
                    Currently studying for a degree in Bachelor of Science in Computer Science <br>
                    andcurrently i'm planning on learning more programming languages.
                </p>
                
            <div class="btn-sci">
                <a href="#" class="btn"> Download CV</a>
                <div class="sci">
                    <a href="https://github.com/IanNanalig"><i class='bx bxl-github' ></i></a>
                    <a href="https://www.linkedin.com/in/maximillian-nanalig-4085aa95/"><i class='bx bxl-linkedin' ></i></a>
                    <a href="https://www.facebook.com/Ian.Nanalig"><i class='bx bxl-facebook' ></i></a>
                    <a href="#"><i class='bx bxl-youtube' ></i></a>
                </div>
            </div>
        </div>

        <div class="home-img">
                <div class="img-box">
                    <div class="img-item">
                        <img src="Pic4.png" alt="Picture">
                    </div>
                </div>
        </div>   
        </section>
      
    </body>
</html>