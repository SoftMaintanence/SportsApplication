<!DOCTYPE html>
<html lang="en">

<head>

    <title>Gymso Fitness HTML Template</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    

    <script>

    // Script to open and close sidebar
     function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
            }

            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
            }
    
    </script>

<?php

include "IdealRecommendations.php";
include "connectDB.php";

//Update Ideal Weight and Current Weight
if(isset($_POST['submit'])){ //check if form was submitted
    $ideal = $_POST['ideal']; 
    $current = $_POST['current'];
    $start = $_POST['start'];



    if($ideal && $current && $start ){
    $sql = "UPDATE users SET CurrentWeight='$current', IdealWeight='$ideal' , weight='$start' WHERE name='$user_check'";

    $conn->query($sql) === TRUE;
     

    }
    else if($ideal){
        $sql = "UPDATE users SET IdealWeight='$ideal' WHERE name='$user_check'";

        $conn->query($sql) === TRUE;
    }
    else if($current){
        $sql = "UPDATE users SET CurrentWeight='$current' WHERE name='$user_check'";

        $conn->query($sql) === TRUE;
    }

    header("Refresh:0");
  }  
?>


    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-gymso-style.css">
    <!--
Tooplate 2119 Gymso Fitness
https://www.tooplate.com/view/2119-gymso-fitness
-->
</head>

<style>
    .w3-bar-block .w3-bar-item {
        padding: 20px
    }

</style>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50" >

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">

        
    <nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left"
     style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button">Close Menu</a>
    <a href="index.html" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
    <a href="calender.html" onclick="w3_close()" class="w3-bar-item w3-button">Events</a>
    <a href="news.html" onclick="w3_close()" class="w3-bar-item w3-button">News</a>
    <a href="personal.html" onclick="w3_close()" class="w3-bar-item w3-button">Personalised Recommendation</a>
    </nav>

    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()"><img src="images/logo.png" alt="☰" width="30" height="30"></div>

        <div class="container">

            <a class="navbar-brand" href="">Personalised</a>

        </div>


    </nav>


    <!-- The Main Page -->
    <section class="hero" id="home">

        <div class="container">
            <div class="row">
                <div class="comeOn">

                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Come On!</h1>

                    <h2 class="text-white" data-aos="fade-up" data-aos-delay="600">Let's reach those milestones!</h2>

                    <h3 class="text-white" data-aos="fade-up" data-aos-delay="600">Starting Weight : <?php echo $Regweight; ?> KG</h3>

                    <h3 class="text-white" data-aos="fade-up" data-aos-delay="600">Current Weight : <?php echo $currentweight; ?> KG</h3>

                    <h3 class="text-white" data-aos="fade-up" data-aos-delay="600">Ideal Weight : <?php echo $ideals; ?> KG</h3>

                    <div class="progress" style= "height: 32px;">
                    <div class="progress-bar progress-bar-success" role="progressbar"
                    aria-valuenow="<?php echo $percentage ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $percentage ?>%">
                    <?php echo $percentage ?>%
                     </div>

                    <div class="InputUser" data-aos="fade-up" data-aos-delay="600">
                        <h2 class="text-white" data-aos="fade-up" data-aos-delay="600">Let's update your weight!</h2>
                        <form action=" " method="post">
                        <!-- Starting Weight -->
                        <label for="fname" class="text-white">New Starting Weight</label>
                        <input type="number" id="start" name="start" style="max-width: 35px;">
                        <label for="fname" class="text-white"> KG</label>
                         &nbsp;
                        <!-- Ideal Weight -->
                        <label for="fname" class="text-white">New Ideal Weight</label>
                        <input type="number" id="ideal" name="ideal" style="max-width: 35px;">
                        <label for="fname" class="text-white"> KG</label>
                         &nbsp;
                        <!-- Cuurent Weight -->
                        <label for="fname" class="text-white">New Current Weight</label>
                        <input type="number" id="current" name="current" style="max-width: 35px;">
                        <label for="fname" class="text-white"> KG</label>
                        <br></br>
                        <button type="submit" name="submit"  class="btn btn-success" value="submit" onclick="show();" >Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Diet Plan -->
    <section class="schedule section" id="schedule">
        <div class="container">

            <div class="col-lg-12 col-12 text-center mb-5">
                <h6 data-aos="fade-up">Healthy Meals to a Healthier You</h6>

                <h2 class="text-white" data-aos="fade-up" data-aos-delay="200">Diet Plan</h2>
            </div>

            <div class="cols" data-aos="fade-up" data-aos-delay="300">
                <div class="col">
                    <div class="containerCards">
                        <div class="front" style="background-image: url('./images/breakfast.jpg')">
                            <div class="inner">
                                <p class="text-white">Breakfast</p>
                                <span>Starting your day the right way</span>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                                <p><a href="<?php echo $break[0]; ?>"><?php echo $Title[0]; ?></a><br>
                                <a href="<?php echo $break[1]; ?>"><?php echo $Title[1]; ?></a><br>
                                <a href="<?php echo $break[2]; ?>"><?php echo $Title[2]; ?></a><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="containerCards">
                        <div class="front" style="background-image: url('./images/lunch.jpg')">
                            <div class="inner">
                                <p class="text-white">Lunch</p>
                                <span>Don't starve yourself.Eat to Live</span>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                            <p><a href="<?php echo $lunch[0]; ?>"><?php echo $Title[3]; ?></a><br>
                                <a href="<?php echo $lunch[1]; ?>"><?php echo $Title[4]; ?></a><br>
                                <a href="<?php echo $lunch[2]; ?>"><?php echo $Title[5]; ?></a><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="containerCards">
                        <div class="front" style="background-image: url('./images/celery.jpg')">
                            <div class="inner">
                                <p class="text-white">Dinner</p>
                                <span>Dinner ideas that will keep you full through the night</span>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                            <p><a href="<?php echo $dinner[0]; ?>"><?php echo $Title[6]; ?></a><br>
                                <a href="<?php echo $dinner[1]; ?>"><?php echo $Title[7]; ?></a><br>
                                <a href="<?php echo $dinner[2]; ?>"><?php echo $Title[8]; ?></a><br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Training Routine -->
    <section class="class section" id="class">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center mb-5">
                    <h6 data-aos="fade-up">Get The Perfect Body Tailored For You</h6>

                    <h2 data-aos="fade-up" data-aos-delay="200">Training Routines</h2>
                </div>

                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <iframe width="350" height="235" src=<?php echo $link1;?>> </iframe>

                        <div class="class-info">
                            <h3 class="mb-1">Beginner</h3>

                            <span><strong>Trained by</strong> <?php echo $Trainer1;?></span>

                            <p class="mt-3"><?php echo $message1;?></p>
                        </div>
                    </div>
                </div>

                <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                    <div class="class-thumb">
                    <iframe width="350" height="235" src=<?php echo $link2;?>> </iframe>

                        <div class="class-info">
                            <h3 class="mb-1">Intermediate</h3>

                            <span><strong>Trained by</strong> <?php echo $Trainer2;?></span>

                            <p class="mt-3"><?php echo $message2;?></p>
                        </div>
                    </div>
                </div>

                <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                    <div class="class-thumb">
                    <iframe width="350" height="235" src="<?php echo $link3;?>"> </iframe>

                        <div class="class-info">
                            <h3 class="mb-1">Advanced</h3>

                            <span><strong>Trained by</strong> <?php echo $Trainer3;?></span>

                            <p class="mt-3"><?php echo $message3;?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<!-- footer put before script -->

<footer class="site-footer" style="color:#000099; text-align: center;"  >
          <p>Software Maintenance, All Rights Reserved (C)</p>
</footer>

    <!-- SCRIPTS -->
    <script src="js/jquery-3.2.1.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--jquery file-->
    <script src="js/bootstrap.js" charset="utf-8"></script>
    <!--bootstrap js file-->
    <script src="js/leaflet.js" charset="utf-8"></script>
    <!--mapping js file-->
    <script src="js/data.js" charset="utf-8"></script>
    <script src="js/map.js" charset="utf-8"></script>
    <script src="js/scripts.js" charset="utf-8"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>