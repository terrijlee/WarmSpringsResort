<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel = "stylesheet" href="stylesV2.css">
    <title>Register Now</title>
  </head>
  <body>
      <div class = "container">
        <div class="py-5 text-center">
        <a href="Home Page.php"><img class="logo" src="images/WarmSpringsLogo.png"></a>
            <h2>Registration Form</h2>
        </div>        
      </div>

      <div class = "container">
        <h2 style ="color: lightseagreen;">
                    <?php
                        if(isset($_GET["error"])) {
                            if($_GET["error"] == "emptyinput") {
                                echo "<p>Please fill in all fields</p>";
                            }
                            else if ($_GET["error"] == "invalidemail") {
                                echo "<p>Please enter a proper email.</p>";
                            }
                            else if ($_GET["error"] == "emailtaken") {
                                echo "<p>Email is already taken, please choose another.</p>";
                            }
                            else if ($_GET["error"] == "stmtfailed") {
                                echo "<p>Something went wrong. Please try again.</p>";
                            }
                            else if ($_GET["error"] == "none") {
                                echo "<p>Your registration was successful.</p><p><a href=./Login.php>Login</a></p>";
                            }
                        }
                    ?>
        <h2>
        <h4 class = "mb-3">Account Information</h4>
          <form action="includes/join.inc.php" id="registerForm" method="post">
            <div class="row">
                <div class= "col-md-6">
                    <label for = "fname" class = "form-label">First Name</label>
                    <input id = "fname" name="fname" type = "text" class = "form-control" placeholder="John" required>

                </div>

                <div class= "col-md-6">
                    <label for = "lname" class = "form-label">Last Name</label>
                    <input id = "lname" name="lname" type = "text" class = "form-control" placeholder="Smith" required>

                </div>

                <div class= "col-12">
                    <label for = "email" class = "form-label">Email</label>
                    <input id = "email" name="email" type = "email" class = "form-control" placeholder="johnsmith@gmail.com" required>

                </div>

                <div class= "col-md-12">
                    <label for = "pass" class = "form-label">Password</label>
                    <input id= "pass" name="pass" type = "password" type="text" class = "form-control" placeholder = "Password">
                </div>

                <div class="col-md-8">
                    <label for = "country" class = "form-label">Country</label>
                    <select id = "country" name="country" class = "form-control" required>
                        <option value = "">Please select one</option>
                        <option value = "United States">United States</option>
                        <option value = "Canada">Canada</option>
                    </select>

                </div>
                
                <div class="col-md-4">
                    <label for = "state" class = "form-label">State</label>
                    <select id = "state" name="state"  class = "form-control" required>
                        <option value = "">Please select one</option>
                        <option value = "CA">CA</option>
                    </select>

                </div>

                <div class= "col-md-12">
                    <label for = "address" class = "form-label">Address</label>
                    <input id = "address" name="address" type = "text" class = "form-control" placeholder="1 Washington Sq" required>

                </div>

                <div class= "col-md-8">
                    <label for = "city" class = "form-label">City</label>
                    <input id = "city" name="city" type = "text" class = "form-control" placeholder="San Jose" required>

                </div>
    
                <div class= "col-md-4">
                    <label for = "zip" class = "form-label">Zip Code</label>
                    <input id = "zip" name="zip" type = "text" class = "form-control" placeholder="95192" required>
    
                </div>

                <div class= "col-md-12">
                    <label for = "phone" class ="form-label">Phone Number</label>
                    <input type="tel" id="phone" class = "form-control" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder= "408-924-1000"  required>
                </div>

            </div>
                <button class = "btn btn-primary btn-md btn-block" type="submit" name="submit"> Create your account</button>
            </div>

            
        </form>
      </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>