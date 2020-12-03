<?php
    //Starts a session
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Deals</title>
        <link rel = "stylesheet" href="stylesV2.css">
    </head>

    <body>
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
        
        <!--Details for the Getaway for Two deal; Redirects users to view hotel rooms-->
        <div class="img4">
            <div class="Click">
                <span class="HotelClick"><a style="color: white; font-size: 100px;" href="HotelRooms.php"><b>Getaway for Two</b></a></span>
            </div>
        </div>
        
        <div class="Description">
            Get a 5% discount for a perfect getaway for you and your significant other. An all inclusive resort experience on the beautiful islands of Hawaii. Enjoy deals catered for two such as dining at our favorites restaurants and ocean view rooms!	
            <p><a style="color: white; float: right; font-size: x-large;" href="HotelRooms.php">Getaway for Two></a></p>
        </div>
        
        <!--Details for the Family Fun deal; Redirects users to view hotel rooms-->
        <div class="img5">
            <div class="Click">
                <span class="HotelClick"><a style="color: white; font-size: 100px;" href="HotelRooms.php"><b>Family Fun</b></a></span>
            </div>
            
        </div>
        
        <div class="Description">
            Your family is our family at Warm Springs Resort. Plan the perfect family vacation with us! We would love to help create lifelong memories for you and your family. Take advantage of 5% off your family vacation.	
            <p><a style="color: white; float: right; font-size: x-large;" href="HotelRooms.php">Family Fun ></a></p>
        </div>
        
        <!--Details for the Military deal; Redirects users to view hotel rooms-->
        <div class="img6">
            <div class="Click">
                <span class="HotelClick"><a style="color: white; font-size: 100px;" href="HotelRooms.php"><b>Military Discounts</b></a></span>
            </div>
        </div>

        <div class="Description">
            Thank you for serving this country, now let us serve you. At Warm Springs Resorts, we gladly offer miltary discounts. When you are ready, just kick off those boots and enjoy a relaxing stay at one of locations. A 10% discount will be applied to room at all of our resorts!	
            <p><a style="color: white; float: right; font: x-large;" href="HotelRooms.php">Military Discounts></a></p>
        </div>
        

    </body>
</html>