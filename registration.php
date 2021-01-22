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
                age VARCHAR(255) not null,                
                email VARCHAR(255) not null,
                `password` VARCHAR(50) not null,
                `weight` VARCHAR(255) NOT NULL,
                height VARCHAR(50),
                regimen VARCHAR(50),
                preferences VARCHAR(255),
                gender VARCHAR(255),
                UNIQUE (Email)
            )");
            


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/job.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="container" style="margin-bottom: 10%;margin-top: 10%;">
        <h1 class="text-center">Registration</h1>
        <div class="card shadow">
            <div class="card-body">
                <form method="POST" action="./login.php">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col"><label>Name</label><input name="name" class="form-control" type="text"></div>
                        </div>
                        <div class="form-row">
                            <div class="col"><label>Gender</label>
                            <select class="form-control" name="gender">
                                <option selected></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        </div>
                        <div class="form-row" style="margin-top: 15px;">
                            <div class="col"><label>Age</label><input name="age" class="form-control" type="number"></div>
                        </div>
                        <div class="form-row" style="margin-top: 15px;">
                            <div class="col"><label>Email</label><input name="email" class="form-control" type="email"></div>
                        </div>
                        <div class="form-row" style="margin-top: 15px;">
                            <div class="col"><label>Password</label><input class="form-control" type="password" minlength="6" required name="password"></div>
                        </div>
                        <div class="form-row" style="margin-top: 15px;">
                            <div class="col"><label>Confirm Password</label><input class="form-control" type="password" name="confirm_password"
                                    minlength="6" required=""></div>
                        </div>
                        <div class="form-row" style="margin-top: 15px;">
                            <div class="col"><label>Weight (in kg)</label><input min="1" class="form-control" name="weight" type="number">
                            </div>
                        </div>
                        <div class="form-row" style="margin-top: 15px;">
                            <div class="col"><label>Height (in cm)</label><input min="1" class="form-control" name="height" type="number"></div>
                        </div>
                        <div class="form-row" style="margin-top: 15px;">
                            <div class="col">
                                <label>Regimen</label>
                                <select class="form-control" name="regimen">
                                    <option selected>Select your regimen</option>
                                    <option value="0">Muscle Training</option>
                                    <option value="1">Weight Loss</option>
                                    <option value="2">Weight Gain</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row" style="margin-top: 15px;">
                            <div class="col"><label>Preferences</label><input class="form-control" name="preferences" type="text"></div>
                        </div>
                        <div class="form-row justify-content-center align-items-center" style="margin-top: 15px;">
                            <div class="col"></div>
                            <div class="col"><button name="register" class="btn btn-primary btn-block" type="submit">Register</button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>