<?php
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Checkout Options</title>
        <style>
            a {
                color: navy;
            }
            
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel = "stylesheet" href="stylesV2.css">
    </head>

    <body>
        <div class = "container">
            <div class>
    
                    <img class=  "logo" src = "images/WarmSpringsLogo.png"></a></button><hr>
            
              

          
                <h5> Already a member? Sign in</h5>
                <button type = 'button' class = 'btn btn-primary btn-lg btn-block' onclick= "location.href = 'Login.php';">Login</button> <hr> 
            
                <h5> Checkout as a guest</h5>
                <button type = "button" class = "btn btn-primary btn-lg btn-block" onclick= "location.href = 'Checkout.php';">Guest Checkout</button>
               
            </div>      
    </body>
</html>
