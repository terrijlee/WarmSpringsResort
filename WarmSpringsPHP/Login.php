<?php
    //Starts a session
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="login-registration.css">
        <link rel="stylesheet" href="styles.css">
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
        
            <div class=sign-in-header><br><br>
                <h1>Sign in
                    <?php
                        //Login error messages
                        if(isset($_GET["error"])) {
                            if($_GET["error"] == "emptyinput") {
                                echo "<p>Please fill in all fields</p>";
                            }
                            else if ($_GET["error"] == "wrongemail") {
                                echo "<p>Incorrect email</p>";
                            }
                            else if ($_GET["error"] == "wrongpassword") {
                                echo "<p>Incorrect password</p>";
                            }
                        }
                    ?>
                </h1><br>
            
            </div>
    
    <div class=login-background-pic><br><br><br><br><br><br>
        <form class="login-form" action="includes/login.inc.php" method="post">
            <br><br><label for="email">Email</label><br>
            <input type="text" id="email" name="email" placeholder="email"><br>

            <label for="pass">Password</label><br>
            <input type="password" id="pass" name="pass" placeholder="password"><br>
            
            <input type="submit" name="submit" value="Login"><br>

        </form>
        <div class= not-a-member>Not a member?<br>
        <a href="Join.php"><br>
            <button>Create an Account</button>
        </a>
        </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    </body>
</html>   