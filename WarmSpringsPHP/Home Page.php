<?php
    //Starts a session
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link rel = "stylesheet" href="stylesV2.css">
        
    </head>

    <body>
        <!--The class tab should be on every page-->
        <div class="Tab">
            <button><a href="Home Page.php"><img src="images/WarmSpringsLogo.png" width="60" height="60" style="border-radius: 15px;"></a></button>
            <button><a href="Hotels.php">Locations</a></button>
            <button><a href="Experiences.php">Experiences</a></button>
            <button><a href="Deals.php">Deals</a></button>
            <button><a href="AboutUs.php">About Us</a></button>
            <?php
                //Checking if the session variable exists, which means a user is logged in
                //Navigation bar changes to show profile and log out if a user is logged in
                if (isset($_SESSION["userId"])) {
                    echo "<button><a href='includes/logout.inc.php'>Log Out</a></button>";
                }
                else{
                   echo "<button><a href='Login.php'>Login</a></button>"; 
                }
            ?>
            
        </div>
        
        <!--The following code is only for the home page-->

        <!--Home page video-->
        <div class = "Home Video">
            <video autoplay loop muted>
            <source src = "images/OceanVideo.mp4" type = video/mp4>
                <div class="center">Your next vacation destination</div>
            </video>


        </div>
        
        <!--Showcasing experiences within Hawaii-->
        <div class="header">
            <h2>Hawaiian Experiences</h2>
        </div>
        
        
        <div class="Experiences">
            <figure>
                <img src="images/Snorkeling.jpg" width="400" height="300">
                <figcaption><a href= "Experiences.php">Snorkeling</a></figcaption>
            </figure>
            <figure>
                <img src="images/dolphin.jpg" width="400" height="300">
                <figcaption><a href= "Experiences.php">Dolphin Quest</a></figcaption>
            </figure>
            <figure>
                <img src="images/hawaii2.jpg" width="400" height="300">
                <figcaption><a href= "Experiences.php">Island of Hawaii Five Ways</a></figcaption>
            </figure>
        </div>
        
        <div class="header">
            <h2>Deals</h2>
        </div>
        
        <!--Showcasing the deals for the hotel-->
        <div class="Deals">
            <figure>
                <img src="images/couple.jpg"width="550" height="300">
                <figcaption><a href= "Deals.php">Getaway for 2</a></figcaption>
            </figure>
            <figure>
                <img src="images/Family.jpg" width="500" height="300">
                <figcaption><a href= "Deals.php">Family Fun</a></figcaption>
            </figure>
        </div>

    
        
    </body>