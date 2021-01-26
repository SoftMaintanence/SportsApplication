<?php

include "connectDB.php";

//Connect to sportsdb table
$sql = "SELECT name, age, regimen, BMI, weight, IdealWeight, CurrentWeight FROM users WHERE name = '$user_check'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data 
    while($row = mysqli_fetch_assoc($result)) {

$conn->close();

//Variables from DB
$BMI = $row["BMI"];
$regimenType = $row["regimen"];
$Age = $row["age"];
$ideals = $row["IdealWeight"];
$Regweight = $row["weight"];
$currentweight = $row["CurrentWeight"];
//percentage of progress
$goal = $row["weight"]-$row["IdealWeight"];
$loss = $row["weight"]-$currentweight;
$percentage = round(($loss/$goal)*100);

//status variables
$BMIstatus = 0;
$regimenstatus = 0;
$agestatus = 0;

//links to youtube exercise videos
$link1 = "";
$link2 = "";
$link3 = "";

//message for links
$message1 = "";
$message2 = "";
$message3 = "";

//Trainer names
$Trainer1 = "";
$Trainer2 = "";
$Trainer3 = "";

//recipes
//Recipe title
$Title = array();

//breakfast
$break = array();

//lunch
$lunch = array();

//dinner
$dinner = array();


//Check BMI
function checkBMI($BMI){

//Variables for BMI calculation (Max value for each BMI)
$normal = 24.9;
$underwreight = 18.5;
$overweight = 29.9;

//condition checking 

if($BMI<$overweight){
    
    return $BMIstatus = 0;
}

if($BMI>$overweight and $BMI<=$normal){
    
    return $BMIstatus = 1;
}

if($BMI>$normal and $BMI<=$overweight){
    
    return $BMIstatus = 2;
}

if($BMI>$overweight){
    
    return $BMIstatus = 3;
}

}


function checkAge($Age){

//variables for age group
$adults = 18;
$middle = 30;
$elders = 50;


if($Age<$adults){
    
    return $agestatus = 0;
}

if($Age>$adults and $Age<$middle){
   
    return $agestatus = 1;
}

if($Age>$adults and $Age<$elders){
  
    return $agestatus = 2;
}

if($Age>$elders){

    return $agestatus = 3;
}

}


//Check Regimen
function checkRegimenType($regimenType){

    if($regimenType==0){
        return $regimenstatus = 0;
    }
    
    if($regimenType==1){
        return $regimenstatus = 1;
    }
    
    if($regimenType==2){
        return $regimenstatus = 2;
    }  

}

//display youtube links according to regimen type 

//adults and muscle training 
if(checkRegimenType($regimenType) == 0 and checkAge($Age) == 1 || checkAge($Age) == 2){

    $link1 = "https://www.youtube.com/embed/lA-diBuGy6I";
    $link2 = "https://www.youtube.com/embed/UoC_O3HzsH0";
    $link3 = "https://www.youtube.com/embed/95846CBGU0M";

    $message1 = "You don't need a gym if you want to build muscle and have your physique be more defined.";
    $message2 = "Get ready for one of the best Home Workouts of your LIFE! Let's do this! A full body workout that you can do whenever and wherever you like... even before bed!";
    $message3 = "You need to push to near failure for every single set you perform in this full body home workout routine";

    $Trainer1 = "Roberta's Gym";
    $Trainer2 = "Fraser Wilson";
    $Trainer3 = "Jeremy Ethier";

    //Recipes

    //breakfast
    $break = array("https://www.eatingwell.com/recipe/267169/avocado-egg-toast/",
                  "https://www.myprotein.com/thezone/recipe/healthy-breakfast-burrito/"
                  ,"https://www.eatingwell.com/recipe/261628/peanut-butter-banana-cinnamon-toast/");

    $lunch = array("https://www.myprotein.com/thezone/recipe/spicy-chicken-with-couscous-macro-balanced-meals/",
                  "https://www.myprotein.com/thezone/recipe/sweet-potato-hash-recipe/"
                  ,"https://www.myprotein.com/thezone/recipe/low-carb-teriyaki-beef/");        
                  
    $dinner = array("https://www.myprotein.com/thezone/recipe/healthy-pasta-recipes-sausage-pasta/",
                  "https://www.eatingbirdfood.com/spicy-shrimp-and-asparagus-over-zucchini-noodle-pasta/"
                  ,"https://plantbasedrdblog.com/2020/01/peanut-crunch-salad/");    

    $Title = array("Avocado Egg Toast","Breakfast Burritos","Peanut Butter Cinnamon Toast",
                   "Spicy Chicken With Couscous","Sweet Potato Hash","Teriyaki Beef Zoodles",
                    "Lean Creamy Pasta","Asparagus zucchini noodle pasta","Peanut Crunch Salad"); 

}
//adults and fat loosening
else if(checkRegimenType($regimenType) == 1 and checkAge($Age) == 1 || checkAge($Age) == 2){

    $link1 = "https://www.youtube.com/embed/gC_L9qAHVJ8";
    $link2 = "https://www.youtube.com/embed/Dj0bk8TFWdY";
    $link3 = "https://www.youtube.com/embed/d9ICqoo8ze8";

    $message1 = "This workout is part of Real Start and Real Start Plus - a workout plan made for real people with real people";
    $message2 = "This full body fat loss in 14 days no jumping free home workout guide will help you lose fat/weight from home";
    $message3 = "Cardio workout can be done with no equipment so you can burn fat and improve your health from anywhere!";

    $Trainer1 = "Body Project";
    $Trainer2 = "Lilly Sabri";
    $Trainer3 = "Heather Robertson";

    //Recipes

    //breakfast
    $break = array("https://www.eatingwell.com/recipe/267169/avocado-egg-toast/",
                  "https://www.eatingwell.com/recipe/268085/blueberry-banana-overnight-oats/"
                  ,"https://www.eatingwell.com/recipe/261628/peanut-butter-banana-cinnamon-toast/");

    $lunch = array("https://www.wellplated.com/egg-roll-in-a-bowl/",
                  "https://www.teaforturmeric.com/instant-pot-pakistani-chana-dal/"
                  ,"https://www.foodfaithfitness.com/whole30-chicken-salad/#wprm-recipe-container-54021");        
                  
    $dinner = array("https://iheartumami.com/paleo-chinese-chicken-lettuce-wraps/",
                  "https://www.eatingbirdfood.com/spicy-shrimp-and-asparagus-over-zucchini-noodle-pasta/"
                  ,"https://plantbasedrdblog.com/2020/01/peanut-crunch-salad/");    

    $Title = array("Avocado Egg Toast","Banana Oats","Peanut Butter Cinnamon Toast",
                   "Egg Roll Bowl","Pakistani Chana Dal","Whole Chicken Salad",
                    "Asian Chicken Lettuce Wraps","Asparagus zucchini noodle pasta","Peanut Crunch Salad");              

}
//adults and Weight Gain
else if(checkRegimenType($regimenType) == 2 and checkAge($Age) == 1 || checkAge($Age) == 2){

    $link1 = "https://www.youtube.com/embed/Au8nrZLGBEU";
    $link2 = "https://www.youtube.com/embed/fLLScgWQcHc";
    $link3 = "https://www.youtube.com/embed/zlyqr9bNs1E";

    $message1 = "Hi everyone! So for today’s video I will be sharing to you my weight gain exercise I hope it helps to gain weight and exercise";
    $message2 = "Cardio workout can be done with no equipment so you can burn fat and improve your health from anywhere!";
    $message3 = "Exercises that are in weight loss videos are featured in a whole video about how to gain weight in a fun and effective way";

    $Trainer1 = "Erika Reyes";
    $Trainer2 = "Louis";
    $Trainer3 = "Koboko Fitness";

     //Recipes

    //breakfast
    $break = array("https://www.eatingwell.com/recipe/254618/raspberry-peach-mango-smoothie-bowl/",
                  "https://www.eatingwell.com/recipe/268085/blueberry-banana-overnight-oats/"
                  ,"https://www.eatingwell.com/recipe/249791/maple-nut-granola/");

    $lunch = array("https://www.eatingwell.com/recipe/252415/vegetable-tuna-pasta-salad/",
                  "https://www.teaforturmeric.com/instant-pot-pakistani-chana-dal/"
                  ,"https://www.eatingwell.com/recipe/252442/creamy-avocado-white-bean-wrap/");        
                  
    $dinner = array("https://iheartumami.com/paleo-chinese-chicken-lettuce-wraps/",
                  "https://www.eatingbirdfood.com/spicy-shrimp-and-asparagus-over-zucchini-noodle-pasta/"
                  ,"https://www.eatingwell.com/recipe/262955/philly-cheese-steak-sloppy-joes/");    

    $Title = array("Raspberry Peach Smoothie","Banana Oats","Maple Nut Granola",
                   "Vegetable Tuna Pasta Salad","Pakistani Chana Dal","Creamy Avocado & White Bean Wrap",
                    "Asian Chicken Lettuce Wraps","Asparagus zucchini noodle pasta","Philly Cheese Steak Sloppy Joes");



}
//Elders 
else if(checkRegimenType($regimenType) == 0 || checkRegimenType($regimenType) == 1 and checkAge($Age) == 3){

    $link1 = "https://www.youtube.com/embed/8CE4ijWlQ18";
    $link2 = "https://www.youtube.com/embed/Ev6yE55kYGw";
    $link3 = "https://www.youtube.com/embed/A2wp8Ipxn9s";

    $message1 = "20 Min Exercise for Seniors, Elderly, & Older People - Seated Chair Exercise Senior Workout Routines instructions";
    $message2 = "Designed specifically for adults over age 50, this workout can be done at home, at work, at the gym—almost anywhere!";
    $message3 = "This short home workout is designed for seniors or for anyone looking for something a bit lighter.Take care when exercises";

    $Trainer1 = "HASfit";
    $Trainer2 = "National Institute On Aging";
    $Trainer3 = "The Body Coach TV";


     //Recipes

    //breakfast
    $break = array("https://www.eatingwell.com/recipe/267169/avocado-egg-toast/",
                  "https://www.eatingwell.com/recipe/268085/blueberry-banana-overnight-oats/"
                  ,"https://www.eatingwell.com/recipe/261628/peanut-butter-banana-cinnamon-toast/");

    $lunch = array("https://www.wellplated.com/egg-roll-in-a-bowl/",
                  "https://www.teaforturmeric.com/instant-pot-pakistani-chana-dal/"
                  ,"https://www.foodfaithfitness.com/whole30-chicken-salad/#wprm-recipe-container-54021");        
                  
    $dinner = array("https://iheartumami.com/paleo-chinese-chicken-lettuce-wraps/",
                  "https://www.eatingbirdfood.com/spicy-shrimp-and-asparagus-over-zucchini-noodle-pasta/"
                  ,"https://plantbasedrdblog.com/2020/01/peanut-crunch-salad/");    

    $Title = array("Avocado Egg Toast","Banana Oats","Peanut Butter Cinnamon Toast",
                   "Egg Roll Bowl","Pakistani Chana Dal","Whole Chicken Salad",
                    "Asian Chicken Lettuce Wraps","Asparagus zucchini noodle pasta","Peanut Crunch Salad");



}


}
} 

?>