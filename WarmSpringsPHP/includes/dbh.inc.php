<?php

//Credentials for the connection
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "warmsprings";

//Connection to the database
$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

//Error message that shows if connection fails
if (!$conn) {
    die("Connection failed".mysqli_connect_error());
}