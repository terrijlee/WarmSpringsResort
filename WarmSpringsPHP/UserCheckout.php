<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel = "stylesheet" href="stylesV2.css">
    <title>User Checkout</title>
  </head>
  <body>
      <div class = "container">
        <div class="py-5 text-center">
            <a href="Home Page.php"><img class="logo" src="images/WarmSpringsLogo.png"></a>
            <!--Dynamically displays a users' name-->
            <h2 action = "includes/functions.inc.php">Welcome back <?php echo $_SESSION["userFname"]?>!</h2> 
        </div>        
        
      </div>

      <div class = "container">
        <!--Checkout summary form-->
        <h4 class>Summary</h4>
        <form class name="summary">
            

            <div class="row">
                <div class= "col-md-6">

                    <label for = "sdate" class = "form-label">Start Date</label>
                    <input id = "sdate" type = "date" class = "form-control">

                </div>

                <div class= "col-md-6">

                    <label for = "enddate" class = "form-label">End Date</label>
                    <input id = "enddate" type = "date" oninput = "calcdate(); return false;" class = "form-control">

                </div>
            </div>

            <div class="row">

                <div class = "col-md-6">
                    <label for = "type" class = "form-label">Type of Suite</label>
                    <select id = "type"  class = "form-control" oninput = "price(); return false;" required>
                        <option value = "">Please select one</option>
                        <option value = "ds">Double Suite</option>
                        <option value = "qs">Queen Suite</option>
                    </select>
                </div>

            <div class= "col-md-6">

                    <label for = "rooms" class = "form-label">Number of Rooms</label>
                    <input id = "rooms" type = "number" class = "form-control" oninput = "showroom(); return false;" min="0" maxlength = "1" required>
            </div>


                <div class = "col-md-6">
                    <label for = "type" class = "form-label">Discount</label>
                    <select id = "disc"  class = "form-control" oninput = "discount(); total(); return false;" required>
                        <option value = "ps">Please select one</option>
                        <option value = "none">None</option>
                        <option value = "military">Military</option>
                        <option value = "getaway">Getaway for Two</option>
                        <option value = "family">Family Fun</option>
                    </select>


                </div>

            </div>
            <br><hr><br>

            <h4 class>Cart</h4>

            <div class>
                <p><a id = "price"  ref = "HotelRooms.html">Price</a><span id = "rprice"></span></p>
                <p><a>Number of rooms</a><span id = "numb"></span></p>
                <p><a>Number of nights</a><span id = "nights"></span></p></p>
                <p><a>Discount</a><span id = "percentage"></span></p></p>
                <p><a>Total</a><span id = "tot"></span></p>
                <br><hr><br>
            </div>

        </form>
    </div>

      <div class = "container">
        <!--Card form-->
          <form method="get" action="Confirmation.php">

            <h4 class = "mb-3">Payment Information</h4>

            <label for = "cardtype" class = "form-label">Card Type</label>
            <select id = "cardtype"  class = "form-control" required>
                <option value = "">Please select one</option>
                <option value = "United States">Debit Card</option>
                <option value = "Canada">Credit Card</option>
            </select>

            
                <div class= "col-md-7">

                    <label for = "cname" class = "form-label">Name on Card</label>
                    <input id = "cname" type = "text" class = "form-control" placeholder="Your name" required>
    
                </div>
            


            <div class = "row">

                <div class= "col-md-6">

                    <label for = "cnumber" class = "form-label">Card Number</label>
                    <input id = "cnumber" type = "text" class = "form-control" placeholder="0000000000000000" maxlength = "16" pattern="\d{16}"required>

                </div>

                <div class= "col-md-3">

                    <label for = "exp" class = "form-label">Exp Date</label>
                    <input id = "exp" type = "text" class = "form-control" placeholder="01/23" maxlength = "5" pattern="\d{2}[.- /]\d{2}"required>

                </div>

                <div class= "col-md-3">

                    <label for = "cvv" class = "form-label">CVV</label>
                    <input id = "cvv" type = "text" class = "form-control" placeholder="123" maxlength = "3" pattern="\d{3}"required>
                </div>

                <button class = "btn btn-primary btn-lg btn-block" type="submit"> Book your reservation</button>

                

            </div>
        </form>


      </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
      function showroom() {

          var x = document.getElementById("rooms").value;
          document.getElementById("numb").innerHTML = document.getElementById("rooms").value;
      }

      function price() {

          var price = 0;

              if (document.getElementById("type").value == "ds") {
                  price = 150;
              }

              else if(document.getElementById("type").value == "qs") {
                  price = 200;
                  
              }

              document.getElementById("rprice").innerHTML = " $" + price;
          }

      
          function discount() {


                  if (document.getElementById("disc").value == "military") {
                      dis = 10;
                  }

                  else if(document.getElementById("disc").value == "family") {
                      dis = 5;
                      
                  }
                  else if(document.getElementById("disc").value == "getaway") {
                      dis = 5;       
                  }
                  else if (document.getElementById("disc").value == "ps" || "none") {
                      dis = 0;
                  }

                  document.getElementById("percentage").innerHTML = dis + "%";
              }



          function calcdate() {
              var start = new Date(document.getElementById("sdate").value);
              var end = new Date(document.getElementById("enddate").value);

              var differenceTime = end.getTime() - start.getTime();

              var differenceDays = differenceTime / (1000*3600*24);


              document.getElementById("nights").innerHTML = differenceDays;
          }

          function total() {
              var numRooms = document.getElementById("rooms").value;

              var price = 0;

              if (document.getElementById("type").value == "ds") {
                  price = 150;
              }

                  else if(document.getElementById("type").value == "qs") {
                      price = 200;
                      
                  }

              if (document.getElementById("disc").value == "military") {
                      dis = 10;
                  }

                  else if(document.getElementById("disc").value == "family") {
                      dis = 5;
                      
                  }
                  else if(document.getElementById("disc").value == "getaway") {
                      dis = 5;       
                  }

                  else if (document.getElementById("disc").value == "ps" || "none") {
                      dis = 0;
                  }


              var start = new Date(document.getElementById("sdate").value);
              var end = new Date(document.getElementById("enddate").value);

              var differenceTime = end.getTime() - start.getTime();

              var differenceDays = differenceTime / (1000*3600*24);



              if(dis != 0) {
                  var original = numRooms * price * differenceDays;
                  var discount = original * (dis/100);
                  var total = original - discount;

              }

              else {
                  var total = numRooms * price * differenceDays;
              }
          
              document.getElementById("tot").innerHTML = "$" + total;

              
          }

  </script>
  </body>
</html>