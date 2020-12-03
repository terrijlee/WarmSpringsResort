<?php
    //Starts a session
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Hotels</title>
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
        
        <!--Introducing Oahu location-->
        <div class="img1">
            <div class="Click">
                <span class="HotelClick"><a style="color: white; font-size: 100px;" href="HotelRooms.php"><b>Oahu</b></a></span>
            </div>
        </div>
        
        <div class="Description">
            Oahu, also known as the "Heart of Hawaii." You can explore the third
            largest Hawaiian island by visiting its famous beaches including Waikiki and 
            North Shore where you can surf or snorkel. Aside from exploring beaches, you 
            can hike Leahi or Diamond Head, the volcanic crater. Look at our available rooms for our
            <p><a style="color: white; float: right; font-size: x-large;" href="HotelRooms.php">Oahu location ></a></p>
        </div>
        
        <!--Introducing Maui location-->
        <div class="img2">
            <div class="Click">
                <span class="HotelClick"><a style="color: white; font-size: 100px;" href="HotelRooms.php"><b>Maui</b></a></span>
            </div>
            
        </div>
        
        <div class="Description">
            Maui is the second largest island in Hawaii. Also, called, "The Valley of Isle." 
            There, you can go whale-watching from December to May. In addition, you can 
            eat at a variety of restaurants Hawaiian cuisine cooked with produce from Kula 
            farms and fresh fish. The Iao Valley State Park allows you to be surrounded by 
            nature while visiting the town of Wailuku with its local shops, restaurants 
            , and historic sites. Come visit Maui today. Look at our available rooms for our 
            <p><a style="color: white; float: right; font-size: x-large;" href="HotelRooms.php">Maui location ></a></p>
        </div>
        
        <!--Introducing Island of Hawaii location-->
        <div class="img3">
            <div class="Click">
                <span class="HotelClick"><a style="color: white; font-size: 100px;" href="HotelRooms.php"><b>Island of Hawaii</b></a></span>
            </div>
        </div>

        <div class="Description">
            The Island of Hawaii, coined "Big Island," is the youngest and largest 
            island in Hawaii. The Hawaii Volcanoes National Park, the home of one of 
            the most active volcanoes on Earth, Kilauea, which recently erupted in 2018. 
            Vistors can hike in the rainforests surrounding the volcanic craters. While driving 
            to the Hawaii Volacanoes National Park, visitors can stop by the 
            Liliuokalani Gardens in Hilo featuring Japanese-styled fishponds and rock gardens. 
            Come visit the Island of Hawaii today. Look at our available rooms for our
            <p><a style="color: white; float: right; font: x-large;" href="HotelRooms.php">Island of Hawaii location ></a></p>
        </div>
        

    </body>
</html>