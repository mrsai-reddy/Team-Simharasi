
<!DOCTYPE html>
<html lang="en">
<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
<html lang="en">
<head>
  <title>CYRUS</title>
  <link rel="stylesheet" href="soft1.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
</head>
<body>
  <div class="container">
    <nav>
      <div class="navbar">
        <div class="logo">
          <img src="1.jpg" alt="">
          <h1>CYRUS</h1>
        </div>
        <ul>
          <li><a href="index.php">
            <i class="fas fa-user"></i>
            <span class="nav-item">Home</span>
          </a>
          </li>
          <li><a href="announcement.php">
          <i class="fas fa-bullhorn"></i>
            <span class="nav-item">Announcement</span>
          </a>
          </li>
          <li><a href="rankall.php">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Leaderboard</span>
          </a>
          </li>
          <li><a href="carrer.php">
          <i class="fa-brands fa-connectdevelop"></i>
            <span class="nav-item">Career</span>
          </a>
          </li>
          <li><a href="schedule.php">
          <i class="fas fa-calendar"></i>
            <span class="nav-item">Schedule</span>
          </a>
          </li>
          <li><a href="About us.html">
          <i class="fas fa-address-card"></i>
            <span class="nav-item">about us</span>
          </a>
          </li>
          <li><a href="login.php" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Logout</span>
          </a>
          </li>
          <div>
            
          </div>
        </ul>
      </div>
    </nav>

    <section class="main">
      <div class="main-top">
        <p>Explore the universe!</p>
      </div>
      <table class="table table-striped">
      <tr>
          <th>Rank</th>
          <th>Name</th>
          <th>Experience</th>
          <th>Current Working in</th>
          <?php
          $conn = mysqli_connect("localhost","root","","register");   
          if ($conn->connect_error) {
            die("connection failed". $conn->connect_error);
          }  
          
          $sql = "SELECT id, fullname, experience, currentworking from alumini";
          $result = $conn-> query($sql);
          if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
            echo "<tr><td>".$row["id"] . "</td><td>".$row["fullname"] . "</td><td>".$row["experience"] . "</td><td>".$row["currentworking"] . "</td><td>";

            }
            echo"</table>";
          }
          else{
            echo "0";
          }
          ?>

        </tr>
  ...
</table>
      
    </div>
    </section>
  </div>

</body>
</html></span>

</html>