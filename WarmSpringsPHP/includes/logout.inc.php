<?php
    //Start, then end and destroy session to log out the user
    session_start();
    //Removes session variables
    session_unset();
    //Destroys a session
    session_destroy();

    header("location: ../Home Page.php");
    exit();