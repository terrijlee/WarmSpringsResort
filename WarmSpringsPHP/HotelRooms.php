<?php
    //Starts a session
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rooms</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="stylesV2.css">
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
        
        <!--Code to describe the hotel rooms for Warm Springs-->
        <!--Queen Suite details-->
        <div class="jumbotron" style="padding-top: 150px;">
            <h2 class="display-4">Double Suite</h2>
            <img src="images/Doubles Suite.jpg" alt="Double Suite" height="auto" width="25%">
            <img src="images/Bathroom.jpg" alt="View of the bathroom" height="auto" width="25%">
            
            <div class="SuiteDescript">
                <p class="lead">
                    Relax in the Double Suite perfect for a trip for 2. 
                </p>

                <p>Amenities</p>
                <ul>
                    <li>Complementary Snack Bar</li>
                    <li>Free WiFi</li>
                    <li>Coffee Maker</li>
                    <li>Mini Fridge</li>
                    <li>65" HDTV</li>
                </ul>
                
                <h1>$150/night</h1>
                
            </div>
            <p>
                <div class="btn btn-primary btn-lg" style="background-color: lightseagreen; border: none;">
                <?php
                    //Checking if the session variable exists, which means a user is logged in
                    //If user logged in, will redirect them to the user checkout page
                    if (isset($_SESSION["userId"])) {
                        echo "<button><a href='UserCheckout.php' style='color: white; background-color: lightseagreen; padding: none;'>Select</a></button>";
                    }
                    //If user not logged in, will redirect to options page to sign in or checkout as a guest
                    else{
                        echo "<button><a href='Options.php' style='color: white; background-color: lightseagreen; padding: none;'>Select</a></button>";
                    }
                ?>
                    
                    
                </div>  
            </p>
        </div>

        <!--Queen Suite details-->
        <div class="jumbotron">
            <h2 class="display-4">Queen Suite</h2>
            <img src="images/Queen Suite.jpg" alt="Queen Suite" height="auto" width="25%">
            <img src="images/Bathroom.jpg" alt="View of bathroom" height="auto" width="25%">
            
            <div class="SuiteDescript">
                <p class="lead">
                    Relax in the Queen Suite perfect for a trip for 2. 
                </p>

                <p>Amenities</p>
                <ul>
                    <li>Complementary Hawaiian Breakfast</li>
                    <li>Complementary Snack Bar</li>
                    <li>Free WiFi</li>
                    <li>Coffee Maker</li>
                    <li>Mini Fridge</li>
                    <li>65" HDTV</li>
                </ul>

                <h1>$200/night</h1>
            </div>

            <p>
                <div class="btn btn-primary btn-lg" style="background-color: lightseagreen; border: none;">
                <?php
                    //Checking if the session variable exists, which means a user is logged in
                    //If user logged in, will redirect them to the user checkout page
                    if (isset($_SESSION["userId"])) {
                        echo "<button><a href='UserCheckout.php' style='color: white; background-color: lightseagreen; padding: none;'>Select</a></button>";
                    }
                    //If user not logged in, will redirect to options page to sign in or checkout as a guest
                    else{
                        echo "<button><a href='Options.php' style='color: white; background-color: lightseagreen; padding: none;'>Select</a></button>";
                    }
                ?>
                </div>  
            </p>
        </div>
        
        
    </body>

</html>