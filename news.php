<?php


    $hockey = array( 0 => [ "img"=>"https://www.si.com/.image/c_limit%2Ccs_srgb%2Cq_auto:good%2Cw_700/MTc4NTA4NDM3MTIwODg2Mzgx/usatsi_15468687.webp", "link" => "https://www.si.com/hockey/podcast/the-hockey-news-podcast-who-wins-the-laine-dubois-trade-in-the-short-and-long-term"],
                     1 => [ "img" => "https://cdn.vox-cdn.com/thumbor/bidfY2QuDpJnwXuspds_UHS9kiw=/0x0:3984x2976/920x613/filters:focal(2228x1041:2864x1677):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/68716134/1298172265.0.jpg" ,"link" => "https://www.secondcityhockey.com/2021/1/25/22248110/chicago-blackhawks-news-updates-2021-nhl-regular-season-january-25-recaps-scores-highlights"],
                     2 => [ "img" => "https://thehockeywriters.com/ezoimgfmt/s3951.pcdn.co/wp-content/uploads/2015/09/Brendan-Gallagher-Canadiens-Feb-2018-975x480.jpg?ezimgfmt=ng%3Awebp%2Fngcb16", "link" => "https://www.sportsnet.ca/nhl/jets-trading-laine-roslovic-blue-jackets-dubois-blockbuster/"]);

    $taekwando = array(
                  0 => ["img"=>"https://img.olympicchannel.com/images/image/private/t_16-9_1920/f_auto/v1538355600/primary/rerz7idjxa5vgdwoqosf", "link" => "https://www.olympicchannel.com/en/stories/features/detail/olympic-taekwondo-at-tokyo-2020-top-five-things-to-know/"],
                  1 => ["img"=>"https://www.martialtribes.com/wp-content/uploads/2016/05/150123328-1-1.png", "link" => "https://www.insidethegames.biz/articles/1103183/world-taekwondo-technical-commission"],
                  2 => ["img"=>"https://cbsnews2.cbsistatic.com/hub/i/r/2011/05/18/32189374-1c51-11e3-9918-005056850598/thumbnail/1200x630/a8085a96034fcb4cd720081104cec2c2/taekwondofinal3.jpg", "link" => "https://www.insidethegames.biz/articles/1103130/khalil-australian-taekwondo-plans"]);

    $tennis = array(
                  0 => ["img" => "https://apicms.thestar.com.my/uploads/images/2021/01/26/1022213.JPG", "link" => "https://www.thestar.com.my/sport/tennis/2021/01/26/tennis-safety-first-but-officials-look-to-get-badosa-training-equipment"],
                  1 => ["img" => "https://www.gannett-cdn.com/-mm-/421ea65e01b192561ce99d096ae7be7d6243ff79/c=0-209-3600-2243/local/-/media/2016/01/25/USATODAY/USATODAY/635893239999985666-C08-LAUNDRY-25-78972226.JPG" ,"link"=> "https://www.straitstimes.com/sport/tennis/tennis-badosa-to-get-training-equipment-after-worst-experience-complaints"],
                  2 => ["img" => "https://sporttechie-prod.s3.amazonaws.com/2019/09/rafael-nadal-us-open.png" ,"link" => "https://www.straitstimes.com/sport/tennis/tennis-more-can-be-done-to-support-younger-players-says-sports-lawyer-luca-ferrari"]);

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <title>Gymso Fitness News Page</title>

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



    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-gymso-style-news.css">
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



            <a class="navbar-brand" href="#">News</a>



        </div>




    </nav>

    <!-- The Main Page -->
    <section class="hero" id="home">

        <div class="container">
            <div class="row">
                <div class="comeOn">

                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Welcome to news page</h1>

                    <!-- <h2 class="text-white" data-aos="fade-up" data-aos-delay="600">Let's reach those milestones!</h2> -->


                </div>
            </div>
        </div>
    </section>

    <!-- Dietetics -->

    <!-- Training Routine -->
    <section class="class section" id="class">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center mb-5">
                    <h2 data-aos="fade-up" data-aos-delay="200">Hockey</h2>
                </div>

                <?php

                foreach($hockey as $hockeyCard){

                  echo '<div class="col-lg-4 col-md-6 col-sm-12 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <img width="350" height="235" src="'.$hockeyCard["img"].'" />

                        <div class="class-info">
                            <h3 class="mb-1"><a href="'.$hockeyCard["link"].'">Link to news</a></h3>
                        </div>
                    </div>
                </div>';
                }
                ?>
            </div>

        </div>
    </section>

    <section class="class section">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center mb-5">
                    <h2 data-aos="fade-up" data-aos-delay="200">Taekwando</h2>
                </div>

                <?php


                foreach($taekwando as $taekwandoCard){

                  echo '<div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <img width="350" height="235" src="'.$taekwandoCard["img"].'" />

                        <div class="class-info">
                            <h3 class="mb-1"><a href="'.$taekwandoCard["link"].'">Link to news</a></h3>
                        </div>
                    </div>
                </div>';
                }


                ?>
            </div>

        </div>
    </section>

    <section class="class section">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center mb-5">
                    <h2 data-aos="fade-up" data-aos-delay="200">Tennis</h2>
                </div>

                <?php


                foreach($tennis as $tennisCard){

                  echo '<div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <img width="350" height="235" src="'.$tennisCard["img"].'" />

                        <div class="class-info">
                            <h3 class="mb-1"><a href="'.$tennisCard["link"].'">Link to news</a></h3>
                        </div>
                    </div>
                </div>';
                }


                ?>
            </div>

        </div>
    </section>
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
