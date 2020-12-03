<?php
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    //Referencing database connection and functions files
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //Error message checking if user did not fill in fields
    if (emptyInputLogin($email, $pass) !== false) {
        header("location: ../Login.php?error=emptyinput"); //User sent back to the login form with an error message
        exit(); //To stop the script from running
        }
    
    //Login the user by referencing the loginUser function in functions.inc.php
    loginUser($conn, $email, $pass);
}
else {
    header("location: ../Login.php"); //User sent back to the login page if accessed incorrectly
    exit();
}