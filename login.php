<?php
session_start();

include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
    @$adminid = $_POST['adminid'];
    @$rollno = $_POST['rollno'];
    @$password = $_POST['password'];
    @$adminpass = $_POST['adminpass'];


    if (!empty($rollno) && !empty($password))
    {
        $query = "select * from forms where rollno = '$rollno' limit 1";
        $result = mysqli_query($con, $query);

        if($result){
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] == $password)
                {
                    header("location: index.php");
                    die;

                }
            }
        }
        echo "<script type = 'text/javascript'> alert('Wrong Username or Password')</script>";
    }

    if (!empty($adminid) && !empty($adminpass))
    {
        $query = "select * from admins where adminid = '$adminid' limit 1";
        $result = mysqli_query($con, $query);

        if($result){
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['adminpass'] == $adminpass)
                {
                    header("location: announcement.php");
                    die;

                }
            }
        }
        echo "<script type = 'text/javascript'> alert('Wrong Username or Password')</script>";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="#" type="image/x-icon">
    <title>CYRUS</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="POST">
                <h1>Login Admin</h1><br>
                <input type="text" name="adminid" placeholder="Enter your ID">
                <input type="password" name="adminpass" placeholder="Password">
                <button>Login</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form method="POST">
                <h1>CYRUS</h1><br><br>
                <h3>LOGIN User</h3><br>
                <input type="text" name="rollno" placeholder="Roll Number">
                <input type="password" name="password" placeholder="Password">
                <p>For ID and Password please contact your placements Dean</p>
                <button>Login</button>
            </form>
        </div>
        
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome to CYRUS</h1>
                    <p>Are you new here to create an account contact: abcdef@gmail.com</p>
                    <button class="hidden" id="login">Cick to back</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>For Admins!!</h1>
                    <p>Admins click her to login</p>
                    <button class="hidden" id="register">Click Here</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>