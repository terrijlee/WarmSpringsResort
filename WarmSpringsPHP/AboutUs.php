<?php
    //Starts a session
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>About Us</title>
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
        
        <!--The founding story for Warm Springs-->
        <div class="AboutUs1">
            <h3>Founding</h3>
            <p>
                Warm Springs Resorts was founded in 2018 by Gavin Cheung, Kenny Hoang, and Terri Lee, a group of friends
                who envisioned a more personable experience within their yearly summer trip to Hawaii. They noticed how 
                corporate hotel chains provided professional service personnel. However, the founders realized there is an 
                opportunity in the market to provide down-to-Earth service staff. Since then, the service staff are not only 
                receptionists, they are also local guides, who bring guests on tours and hidden gems around Hawaii. 
                
                Originally Warm Springs started as a bed and breakfast hotel with only 5 rooms. Now, the Warm Springs brand 
                has grown to three hotels with locations in Oahu, Maui, and the Island of Hawaii. Warm Springs Resorts is proud 
                to bring local experiences to guests.
            </p>
        </div>
        
        <!--Community work for Warm Springs-->
        <div class="AboutUsImg1"></div>
        
        <div class="AboutUs2">
            <h3>Community Work</h3>
            <p>
                We believe in taking time off to pursue charity work in our community. Employees or "Springers" are given paid time-off to 
                choose a charity of their choice. The company does however, have yearly events. Warm Springs Resorts has had the honor 
                of hosting a very popular volunteer event since 2019 called, "Harvests for the People." There employees help local 
                Hawaiian farms harvest their fruits and vegetables for a day. At the end of the day employees assist the farms in cooking 
                the fresh ingredients sold at a night market for the local community and tourists.
            </p>
        </div>

        <!--Warm Springs mission statement and values-->  
        <div class="AboutUsImg2"></div>

        <div class="AboutUs3">
            <h3>Mission</h3>

            <p>
                To bring personable experiences to the guests of Hawaii.
            </p>

            <p><h4>Values</h4>
                <ul>
                    <p>
                        <li><h4>Responsibility in:</h4></li>
                            <ul>
                                <li>Maintaining the nature in Hawaii by building hotels around nature</li>
                                <li>Equal and competitive pay for our Springers regardless of gender or ethnicity</li>
                                <li>Community charities and volunteering</li>
                            </ul>
                    </p>
                    <p>
                        <li><h4>Transparency in:</h4></li>
                        <ul>
                            <li>Our hotel expansions</li>
                            <li>Sourcing of our restaurant food</li>
                            <li>Our waste management</li>
                        </ul>
                    </p>
                   
                    <p>
                        <li><h4>Sustainability with:</h4></li>
                        <ul>
                            <li>Organic and local food sources</li>
                            <li>Sustainable bedsheets</li>
                            <li>Complementary fair-trade soaps and shampoos</li>
                            <li>Filtered water bottle fountains</li>
                            <li>Recycable receptacles</li>
                            <li>Sustainable goods store for guests</li>

                        </ul>
                    </p>
                    
                </ul>
            </p>
        </div>
        
    </body>
</html>