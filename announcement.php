<?php
    include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
<html lang="en">
<head>
  <title> | By Code Info</title>
  <link rel="stylesheet" href="announcement.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>
  <div class="container">
    <nav>
      <div class="navbar">
        <div class="logo">
          <img src="logoo.jpg" alt="">
          <h1>CYRUS</h1>
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
          <i class="fas fa-chart-line"></i>
            <span class="nav-item">Career</span>
          </a>
          </li>
          <li><a href="#">
          <i class="fas fa-calendar"></i>
            <span class="nav-item">Mock Test</span>
          </a>
          </li>
          <li><a href="#">
          <i class="fas fa-address-card"></i>
            <span class="nav-item">About us</span>
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
        <p>Explore the universe!</p>
      </div>
      <?php
        @$announcement = $_POST['announcement'];
        @$jobtitle = $_POST['jobtitle'];
        @$company = $_POST['company'];
        @$aboutjob = $_POST['aboutjob'];
        @$salary = $_POST['salary'];

      $conn = new mysqli('localhost','root','','register');
      if($conn-> connect_error){
        die('COnnection failed : '.$conn->connect_error);

      }
      else{
        $stmt = $conn->prepare("insert into jobs (announcement,jobtitle,company,aboutjob,salary)
        values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $announcement,$jobtitle,$company,$aboutjob,$salary);
        $stmt->execute();
        echo "<script type = 'text/javascript'> alert('Submitted')</script>";
        $stmt->close();
        $conn ->close();
      }


      ?>
      <div>
        <h1> Announcement</h1>

        <br>
        <form action="announcement.php" method="POST">
        <class name="announ">
          <input type="text" name = "announcement" placeholder="Enter the announcement">
          <button>Submit</button>
        </class>

        <h1>  Add JOB DETAILS</h1>
        <class name="jobs">
          <input type="text" name = "jobtitle" placholder="Enter Job title">
          <br>
          <input type="text" name = "company" placholder="Enter Company name">
          <br>
          <input type="text" name = "aboutjob" placholder="Enter the job detau="> 
          <br>
        
          <input type="text" name = "salary" placholder="Enter salary">
          <br>
          <button>Submit</button>
        </class>
        </form>
        
      
      </div>
    </div>
    </section>
  </div>

</body>
</html></span>
</html>