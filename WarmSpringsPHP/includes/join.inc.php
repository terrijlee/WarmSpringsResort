<?php

//Checks if user accessed the registration form correctly by submitting information
if (isset($_POST["submit"])) {
    $fname = $_POST["fname"]; //Grabs data from the form
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $country = $_POST["country"];
    $state = $_POST["state"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $zip = $_POST["zip"];
    $phone = $_POST["phone"];

    //Referencing database connection and functions files
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //To check if user left any form inputs empty; Functions in functions.inc.php file
    if (emptyInputJoin($fname, $lname, $email, $pass, $country, $state, $address, $city, $zip, $phone) !== false) {
        header("location: ../Join.php?error=emptyinput"); //User sent back to the registration form with an error message
        exit(); //To stop the script from running
    }

    //To check if user email formatted
    if (invalidEmail($email) !== false) {
        header("location: ../Join.php?error=invalidemail"); //User sent back to the registration form with an error message
        exit(); //To stop the script from running
    }

    //To check if email already taken
    if (emailExists($conn, $email) !== false) {
        header("location: ../Join.php?error=emailtaken"); //User sent back to the registration form with an error message
        exit(); //To stop the script from running
    }

    //Create user
    createUser($conn, $fname, $lname, $email, $pass, $country, $state, $address, $city, $zip, $phone);

}
else {
    header("location: ../Join.php"); //Sends user back to registration form because they didn't access it correctly
    exit(); 
}