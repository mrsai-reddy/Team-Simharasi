<?php
    include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="career.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>
  <div class="container">
    <nav>
      <div class="navbar">
        <div class="logo">
          <h1>CYRUS</h1>
          <img src="1.jpg" alt="index.php">
        </div>
        <ul>
          <li><a href="#">
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
          <i class="fas fa-chart-line"></i>
            <span class="nav-item">Carrer</span>
          </a>
          </li>
          <li><a href="mocktest.php">
          <i class="fas fa-calendar"></i>
            <span class="nav-item">Mock Test</span>
          </a>
          </li>
          <li><a href="announcement.php">
          <i class="fas fa-bullhorn"></i>
            <span class="nav-item">Commmunity</span>
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

    <section class="main">
      <div class="main-top">
        <p>Rise like a phoenix!</p>
      </div>
      <div class="main-body">
        <h1>Recent Jobs</h1>
      
      <div class="search_bar">
        <input type="search" placeholder="Search job here...">
        <select name="" id="">
          <option>Category</option>
          <option>Web Design</option>
          <option>App Design</option>
          <option>App Development</option>
        </select>
        <select class="filter">
          <option>Filter</option>
        </select>
      </div>

      </div>


      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <i class="fab fa-google-drive"></i>
          </div>
          <div class="text">
            <h2>UI/UX Designer</h2>
            <span>Google Drive - Junior Post</span>
          </div>
        </div>
        <div class="job_salary">
          <h4>2.0L-11.5L /yr</h4>
          <span>1 days ago</span>
        </div>
      </div>
      
      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <i class="fab fa-google"></i>
          </div>
          <div class="text">
            <h2>JavaScript Developer</h2>
            <span>Google - freshers Post</span>
          </div>
        </div>
        <div class="job_salary">
          <h4>2.5L - 8.0L /yr</h4>
          <span>2 days ago</span>
        </div>
        
      </div>

      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <i class="fab fa-facebook"></i>
          </div>
          <div class="text">
            <h2>Product Developer</h2>
            <span>Facbook - fresher Post</span>
          </div>
        </div>
        <div class="job_salary">
          <h4>10.0L - 15.0L /yr</h4>
          <span>2 days ago</span>
        </div>
      </div>

      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <i class="fab fa-git-alt"></i>
          </div>
          <div class="text">
            <h2>Programmer</h2>
            <span>Github - Juni Post</span>
          </div>
        </div>
        <div class="job_salary">
          <h4>15.0L - 25.0L /yr</h4>
          <span>3 days ago</span>
        </div>
      </div>

      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <i class="fab fa-youtube"></i>
          </div>
          <div class="text">
            <h2>React.js Expert</h2>
            <span>Youtube - VIP</span>
          </div>
        </div>
        <div class="job_salary">
          <h4>5.0L to 8.0L /yr</h4>
          <span>4 days ago</span>
        </div>
      </div>
    </div>
    </section>
  </div>

</body>
</html></span>

</html>