<?php
//Start: Functions for Join/Register page
//Function to check for empty input boxes
function emptyInputJoin($fname, $lname, $email, $pass, $country, $state, $address, $city, $zip, $phone) {
    $result;
    if (empty($fname) || empty($lname) || empty($email) || empty($pass) || empty($country) || empty($state) || empty($address) || empty($city) || empty($zip) || empty($phone)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

//Function to check if email is properly formatted
function invalidEmail($email)  {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

//Function to check if email already exists
function emailExists($conn, $email) {
    $sql = "SELECT * FROM users WHERE userEmail = ?;"; //SQL statement to search for an email
    $stmt  = mysqli_stmt_init($conn); //prepared statement to prevent SQL injections
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Join.php?error=stmtfailed");
        exit();
    } 

    //Submitting user's email string into prepared statment
    mysqli_stmt_bind_param($stmt, "s", $email);
    //Executes the prepared statement
    mysqli_stmt_execute($stmt);

    //Grab user with specific email from database
    $resultData = mysqli_stmt_get_result($stmt);

    //Checking if there is data with that particular email in an array 
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row; //Returns user data if they exist
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

//Function to sign up the user or send data into our database
function createUser($conn, $fname, $lname, $email, $pass, $country, $state, $address, $city, $zip, $phone) {
    $sql = "INSERT INTO users (userFname, userLname, userEmail, userPwd, country, state, address, city, zipCode, phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);"; //SQL statement to insert user into join form
    $stmt  = mysqli_stmt_init($conn); //prepared statement to prevent SQL injections
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Join.php?error=stmtfailed");
        exit();
    } 

    $hashedPwd = password_hash($pass, PASSWORD_DEFAULT); //Built-in function to hash password and make more secure

    mysqli_stmt_bind_param($stmt, "ssssssssss", $fname, $lname, $email, $hashedPwd, $country, $state, $address, $city, $zip, $phone);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Join.php?error=none"); //User sent back to join page
    exit(); //To stop the script from running

}

//Start: Functions for Login page
//Function checking for empty inputs in email and password fields
function emptyInputLogin($email, $pass) {
    $result;
    if (empty($email) || empty($pass)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

//Function to login the user with the email and password they input; If incorrect, will leave error messages
function loginUser($conn, $email, $pass) {
    
    $emailExists = emailExists($conn, $email);
    
    //Checking if email in database by using the emailExists function
    if ($emailExists === false) {
        header("location: ../Login.php?error=wrongemail"); //Error message for the email
        exit();
    }

    $pwdHashed = $emailExists["userPwd"]; //Grabs password from database, possible because of the associative array created in the emailExists function
    $checkPass = password_verify($pass, $pwdHashed); //To check the user inputted password to the database's saved password

    
    if ($checkPass === false) { //Send user back to login if password doesn't match database
        header("location: ../Login.php?error=wrongpassword"); 
        exit();
    }
    else if ($checkPass === true) {
        session_start(); //Start a session
        $_SESSION["userId"] = $emailExists["userId"]; //userId, Fname, and email stored within the session across multiple pages in website to identify the user
        $_SESSION["userFname"] = $emailExists["userFname"];
        $_SESSION["userEmail"] = $emailExists["userEmail"];
        header("location: ../UserCheckout.php"); //Send user to user checkout page once they are logged in 
        exit();
    }
}

