<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sports-db";
$tablename = "users";

$conn = new mysqli($servername, $username, $password);
$conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
$conn->select_db($dbname);

$conn->query("CREATE TABLE IF NOT EXISTS users (
                ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                `name` VARCHAR(255) not null,
                age INT(11) not null,                
                email VARCHAR(255) not null,
                `password` VARCHAR(255) not null,
                `weight` float,
                IdealWeight float,
                CurrentWeight float,
                height float,
                BMI float,
                regimen INT(11),
                preferences VARCHAR(255),
                gender VARCHAR(255),
                UNIQUE (Email)
            )");
            

if(isset($_POST["register"])){

    //change height to meters
    $heightMeters = $_POST['height']/100;

    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $weight=$_POST['weight'];
    $height=$_POST['height'];
    //BMI Calculation
    $BMI = $_POST['weight']/($heightMeters*$heightMeters);
    $regimen=$_POST['regimen'];
    $gender=$_POST['gender'];
    $preferences=$_POST['preferences'];
    $password=$conn->real_escape_string($_POST['password']);
    $confirmPassword=$conn->real_escape_string($_POST['confirm_password']);

    // Compares passwords
    if($password === $confirmPassword){
        $password=md5($password);
        $insert_sql = "INSERT INTO users (`name`, `age`, `email`, `password`, `weight`, `IdealWeight`,`CurrentWeight`,`height`, `BMI`,`regimen`, `preferences`, `gender`)
                    VALUES ('$name', '$age', '$email','$password','$weight','0','0','$height','$BMI', '$regimen','$preferences', '$gender')";
        if($conn->query($insert_sql)===true){
        echo '<script type="text/javascript">';
        echo ' alert("Your account has been registered. You may login now.")';  //not showing an alert box.
        echo '</script>';    
        }
        else{
            echo $conn->error;
        }
    }
    else{
        echo '<script type="text/javascript">';
        echo ' alert("Passwords do not match")';  //showing an alert box.
        echo '</script>';    
    }
}



if(isset($_POST["submit"])){

    $sql = "SELECT email,`password` FROM users";

    
}


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Log In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/job.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body class="d-lg-flex justify-content-center justify-content-lg-center">
    <div class="container" style="margin-top: 12.5%;">
        <div class="row row-cols-1 justify-content-center align-items-center justify-content-md-center justify-content-lg-center justify-content-xl-center" style="width: 100%;">
            <div class="col-md-12 col-lg-9 offset-lg-0">
                <h2 class="text-center">Login</h2>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="verification.php">
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col"><label>Username</label><input name="username" class="form-control" type="text"></div>
                                </div>
                                <div class="form-row" style="margin-bottom: 15px;">
                                    <div class="col"><label>Password</label><input name="password" class="form-control" type="password"></div>
                                </div>
                                <div class="form-row justify-content-center align-items-center">
                                    <div class="col-lg-4"><button class="btn btn-primary btn-block" name="submit" type="submit">Login</button></div>
                                </div>
                                <div class="form-row justify-content-center align-items-center">
                                    <div class="col-lg-4 text-center"><a href="registration.php">Don't have an account? Click here to register</a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>