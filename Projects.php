<html>
    <head>
    <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
        <header>
            <nav class="navbar">
                <a href="#" class="logo">My Website</a>
                <ul>
                    <li><a href="Index.php" class="hover">Home</a></li>
                    <li><a href="About.php" class="hover">About</a></li>
                    <li class="active"><a href="Projects.php" class="hover">Project</a></li>
                </ul>
            </nav>
        </header>

        <?php
        include 'bars-animation.php' 
        ?>
        
        <div class="Project">
            <h1>Projects</h1>
            
            <div class="card">
                <h3>Cashier Application C#</h3>
                <a href="https://github.com/IanNanalig/CashierApplication.git">
                    <img src="07LabExer1.png" alt="C# Cashier Application">
                </a>
                <p>One of the activities here in STI</p>
            </div>

            <div class="card">
                <h3>Java Login Logout system</h3>
                <a href="https://github.com/IanNanalig/L-S-SYSTEM.git">
                    <img src="Loginoutput.png" alt="Java Login Logout system">
                </a>
                <p>A simple Login and Log out Java system with onedrive like use where I can store data and open it inside the program.</p>
            </div>

            <div class="card">
                <h3>Copy of a Website</h3>
                <a href="#">
                    <img src="Copy.png" alt="Copy Website">
                </a>
                <p>We created a copy of a website that was given to us by an activity</p>
            </div>
        </div>

    </body>
</html>