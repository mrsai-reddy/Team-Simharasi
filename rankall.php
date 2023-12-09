<?php
    include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<span style="font-family: verdana, geneva, sans-serif;">
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="career.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    </head>

    <body>
        <div class="container">
            <nav>
                <div class="navbar">
                    <div class="logo">
                    <h1>CYRUS</h1>
                        <img src="1.jpg" alt="">
                        
                    </div>
                    <ul>
                        <li><a href="index.php">
                                <i class="fas fa-user"></i>
                                <span class="nav-item">Home</span>
                            </a>
                        </li>
                        <li><a href="#">
                                <i class="fas fa-bullhorn"></i>
                                <span class="nav-item">Announcement</span>
                            </a>
                        </li>
                        <li><a href="rankall.php">
                                <i class="fas fa-tasks"></i>
                                <span class="nav-item">Leaderboard</span>
                            </a>
                        </li>
                        <li><a href="career.php">
                        <i class="fa-brands fa-connectdevelop"></i>
                                <span class="nav-item">Career</span>
                            </a>
                        </li>
                        <li><a href="#">
                                <i class="fas fa-calendar"></i>
                                <span class="nav-item">Schedule</span>
                            </a>
                        </li>
                        <li><a href="#">
                                <i class="fas fa-address-card"></i>
                                <span class="nav-item">about us</span>
                            </a>
                        </li>
                        <li><a href="login.php" class="logout">
                                <i class="fas fa-sign-out-alt"></i>
                                <span class="nav-item">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div>

            </div>
            <section class="main">
                <div class="main-top">
                    <p>Rise like a phoenix!</p>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <h2>Current Student Ranks</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque sapiente reiciendis nisi id
                        consectetur repudiandae iure ea ipsum dolore veniam.
                    </p><br>
                    <button class="btn btn-primary" type="button">Button</button>
                    <h2>Our Alumini Ranks</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque sapiente reiciendis nisi id
                        consectetur repudiandae iure ea ipsum dolore veniam.
                    </p><br>
                    
                    <button class="btn btn-primary" type="button"><a href="rankingsalumini.php">Button</a>
                    </button>
                </div>
        </div>
        </section>
        </div>

    </body>

    </html>
</span>

</html>