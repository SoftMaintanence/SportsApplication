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
                `password` VARCHAR(100) not null,
                `weight` VARCHAR(255) NOT NULL,
                height float,
                BMI float,
                regimen INT(11),
                preferences VARCHAR(255),
                gender VARCHAR(255),
                UNIQUE (email)
            )");
            

if(isset($_POST["register"])){

    // Sanitize $_POST array (Remove unwanted characters)
    $POST=filter_var_array($_POST,FILTER_SANITIZE_STRING);

    //change height to meters
    $heightMeters = $POST['height']/100;

    $name=$POST['name'];
    $age=$POST['age'];
    $email=$POST['email'];
    $weight=$POST['weight'];
    $height=$POST['height'];

    //BMI Calculation
    $BMI = $POST['weight']/($heightMeters*$heightMeters);
    $regimen=$POST['regimen'];
    $gender=$POST['gender'];
    $preferences=$POST['preferences'];
    $password=$conn->real_escape_string($POST['password']);
    $confirmPassword=$conn->real_escape_string($POST['confirm_password']);

    // Compares passwords
    if($password === $confirmPassword){
        $password=password_hash($password,PASSWORD_DEFAULT);
        $insert_sql = "INSERT INTO users (`name`, `age`, `email`, `password`, `weight`, `height`, `BMI`,`regimen`, `preferences`, `gender`)
                                VALUES ('$name', '$age', '$email','$password','$weight', '$height', '$BMI', '$regimen','$preferences', '$gender')";
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



if(isset($_POST["login"])){

    // Sanitize $_POST array (Remove unwanted characters)
    $POST = filter_var_array($_POST , FILTER_SANITIZE_STRING);

    $email=$POST["email"];
    $password=$POST["password"];


    $sql = "SELECT email,`password` FROM users WHERE email='$email'";

    $result = mysqli_query($conn, $sql);

    $resultRows = mysqli_fetch_assoc($result);

    // Checks if password matches the hash
    if(password_verify($password,$resultRows["password"])){

        // Can register a $_SESSION variable here to make sure the user has logged in 

        header("Location:verification.php");

        // To show that there is a password match in database. Pls remove once all settle
        print_r($resultRows);

    



    }
    else{
        echo '<script> alert("Invalid Login, please try again.") </script>';
    }
    
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
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col"><label>Email</label><input placeholder="Email Address" name="email" class="form-control" type="text"></div>
                                </div>
                                <div class="form-row" style="margin-bottom: 15px;">
                                    <div class="col"><label>Password</label><input placeholder="Password" name="password" class="form-control" type="password"></div>
                                </div>
                                <div class="form-row justify-content-center align-items-center">
                                    <div class="col-lg-4"><button class="btn btn-primary btn-block" name="login" type="submit">Login</button></div>
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
