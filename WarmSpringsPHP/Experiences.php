<?php
    //Starts a session
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Experiences</title>
        <style>
            a {
                color: navy;
            }
            
        </style>
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
            
            <!--Showing different activities to do in Oahu-->
            <div class = "oahu">
                <h2 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Oahu</h2>
            </div>
            
            <div class = "loc1">
                <figure>
                    <img src="images/oahu.jpg">
                </figure>
            </div>

            <div class = "exp1">
                <figure>
                    <img src="images/dolphin.jpg" width="400" height="300">
                    <figcaption><a href= "https://www.gohawaii.com/listing/dolphin-quest-oahu/103" target="_blank">Dolphin Quest</a></figcaption>
                </figure>
                <span class="caption">Make your dream come true with Dophin Quest and go 
                    on a journey swimming and interacting with dolphins! On this journey, you
                     will get to learn about these majestic creatues and have lots of 
                     opportunities to have fun with them.</span>
                <figure>
                    <img src="images/parasailing.jpg" width="400" height="300">
                    <figcaption><a href= "https://www.gohawaii.com/experiences/adventure/parasailing" target = "_blank">Parasailing in Waikiki</a></figcaption>
                </figure>
 
                    <span class="caption">Experience what it is like to glide in the air through 
                        the clear waters of Oahu with a parasail. You'll enjoy beautiful 
                        scenery suspended 1,000 feet in the air which is the perfect way to enjoy any sunset.</span>

            </div>
            
            <!--Showing different activities to do in Maui-->
            <div class = "header">
                <h2>Maui</h2>
            </div>

            <div class = "loc2">
                <figure>
                    <img src="images/maui.jpg" width=100% height="350">
                </figure>
            </div>

            <div class = "exp2">
                <figure>
                    <img src="images/Snorkeling.jpg" width="400" height="300">
                    <figcaption><a href= "https://www.gohawaii.com/listing/four-winds-ii-snorkeling-adventures/987" target="_blank">Four Winds II Snorkeling</a></figcaption>
                </figure>
                <span class="caption">Experience snorkeling from the Molokini Crater in Maui. 
                    This adventure takes you to one of the most popular snorkeling destinations
                     with lots of encounters with marine wildlife.</span>
                <figure>
                    <img src="images/whale.jpg" width="400" height="300">
                    <figcaption><a href= "https://www.gohawaii.com/listing/ultimate-whale-watch-and-snorkel/87944" target="_blank">Whale Watch Cruise</a></figcaption>
                </figure>
                <span class="caption">This trip includes a whale watching experience in addition 
                    to snorkeling in Maui's amazing ocean. Embark on this intimate joruney with
                     a group of 6-26 guests for a really fun boating adventure!</span>
                
            </div>
            
            <!--Showing different activities to do in Island of Hawaii-->
            <div class = "header">
                <h2>Island of Hawaii</h2>  
            </div>

            <div class = "loc3">
                <figure>
                    <img src="images/hawaii.jpg" width=100% height="350">
                </figure>

            </div>

            <div class = "exp3">
                <figure>
                    <img src="images/hawaii2.jpg" width="400" height="300">
                    <figcaption><a href= "https://www.gohawaii.com/blog-down-under/the-island-of-hawaii-five-ways" target="_blank">Island of Hawaii Five Ways</a></figcaption>
                </figure>
                <span class="caption">The Island of Hawaii boasts many activities to enjoy with your family and friends.
                     Enjoy tours of the whole island on a helicopter and snorkeling in the ocean with dolphins and 
                     tropical fish! Rainforests and waterfalls populate each side of the island with incredible views 
                     for you to explore. </span>
                <figure>
                    <img src="images/helicopter.jpg" width="400" height="300">
                    <figcaption><a href= "https://www.gohawaii.com/islands/hawaii-big-island/things-to-do/air-activities" target="_blank">Helicopter Tours</a></figcaption>
                </figure>
                <span class="caption">The best way to view to enjoy the Island of Hawaii is by helicopter where you 
                    can see the contrasts in eco-diversity of the island. From up above, you will not miss a thing 
                    that this island has to offer such as tropical valleys, waterfalls, beaches, and volcanoes! </span>
               
            </div>

    </body>
</html>