<!DOCTYPE html>
<html>
<title>SportsCommunity Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Logo</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i></button>
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
    <img src="images/avatar3.jpg" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
  </a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Dietics</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Weight Progress</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Events</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="images/avatar3.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> 173cm, 63kg</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Penang, Malaysia</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> November 17 1997</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Hockey club</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Neighbourhood hockey match</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="images/pilates.png" style="width:100%" class="w3-margin-bottom">
           </div>
         </div>
          </div>
        </div>      
      </div>
      <br>
      
      <!-- Interests --> 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Interests</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">Sports</span>
            <span class="w3-tag w3-small w3-theme-d4">Hockey</span>
            <span class="w3-tag w3-small w3-theme-d3">Pilates</span>
            <span class="w3-tag w3-small w3-theme-d2">Cardio</span>
            <span class="w3-tag w3-small w3-theme-d1">Jogging</span>
            <span class="w3-tag w3-small w3-theme">Clean Eating</span>
            <span class="w3-tag w3-small w3-theme-l1">Vegan</span>
          </p>
        </div>
      </div>
      <br>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
<?php

// $Doc = new Firestore('posts');
// $results[] = $Docs->getAllDocuments();



// if (isset($_POST['submit'])) {
//     require_once './GFireStore.php';

//     // Posts
//     $postName = $_POST["postName"];
//     $postTime = $_POST["postTime"];

//     $Posts = new Firestore('posts');

//     $Posts->createDocument(
//         $postName,
//         [
//             "postName" => $postName,
//             "postTime" => $postTime,
//         ]
//     );
?>
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">What's on your mind today?</h6>
              <p contenteditable="true" for="postName" class="w3-border w3-padding">I feel good</p>
              <button type="submit" value="submit" name="submit" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button> 
            </div>
          </div>
        </div>
      </div>
<?php
   //}
?>
      
      <?php

        include('GFirestore.php');
        $Doc = new firestore('posts');
        $results[] = $Doc->getAllDocuments();

        $i = 0;
        foreach ($results[0] as $row) {
          $i++;


      ?>

      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="images/avatar3.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity"><?php echo $row['postTime']; ?></span>
        <h4>Chelsea Lam</h4><br>
        <hr class="w3-clear">
        <p><?php echo $row['postName']; ?></p>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
      </div>
      
      <?php
         }
      ?>
   
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Upcoming Events:</p>
          <img src="images/hockey.jpg" alt="Forest" style="width:100%;">
          <p><strong>Neighbourhood hockey match</strong></p>
          <p>Friday 14:30</p>
          <p><a href="https://mhc.org.my/"><button class="w3-button w3-block w3-theme-l4">Info</button></a></p>
        </div>
      </div>
      <br>
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
<div class="container-fluid" id="diva">

<h2>Join The Moment.Together,We Are Better</h2>

<form class="form" action="http://github.us16.list-manage.com/subscribe/post?u=38946229138e86ab31ea923ec&amp;id=bf29ded2ed" method="post">
  <div class="form-group">
    <input type="email" name="EMAIL" value="" placeholder="example@email.com">
    <button type="submit" name="subscribe" class=" btn btn-info ">Join</button>
  </div>


  
  
</form>

 <div class="row" align= center>

  <div class="socialIcons">
  
    <a href="https://www.facebook.com/Sports-Swift-296202374123622"><img src="png/facebook.png" alt=""height=50 ></a>
    <a href="https://www.instagram.com/sport.swift/"><img src="png/instagram.png" alt="" height=50 ></a>
    <a href="https://twitter.com/sportswift2017"><img src="png/twitter.png" alt="" height=50></a>
    
  </div>

</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html> 