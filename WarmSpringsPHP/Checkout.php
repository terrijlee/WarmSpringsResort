<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel = "stylesheet" href="stylesV2.css">
    <title>Guest Checkout</title>
  </head>
  <body>
      <div class = "container">
        <div class="py-5 text-center">
            <a href="Home Page.php"><img class="logo" src="images/WarmSpringsLogo.png"></a>
            <h2>Checkout form</h2>
        </div>  
        
        <div class = "container1">
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
        
      </div>

      <div class = "container"> 


        <h4 class>Billing Address</h4>
          <form id="checkout" action="Confirmation.php">

            
            <div class="row">
                <div class= "col-md-6">

                    <label for = "fname" class = "form-label">First Name</label>
                    <input id = "fname " type = "text" class = "form-control" placeholder="First Name" required>

                </div>

                <div class= "col-md-6">
                    <label for = "lname" class = "form-label">Last Name</label>
                    <input id = "lname " type = "text" class = "form-control" placeholder="Last name" required>

                </div>

                <div class= "col-12">
                    <label for = "email" class = "form-label">Email</label>
                    <input id = "email " type = "email" class = "form-control" placeholder="email@gmail.com" required>

                </div>


                <div class="col-md-8">
                    <label for = "country" class = "form-label">Country</label>
                    <select id = "country"  class = "form-control" required>
                        <option value = "">Please select one</option>
                        <option value = "United States">United States</option>
                        <option value = "Canada">Canada</option>
                    </select>

                </div>

                
                <div class="col-md-4">
                    <label for = "state" class = "form-label">State</label>
                    <select id = "state"  class = "form-control" required>
                        <option value = "">Please select one</option>
                        <option value = "CA">CA</option>
                    </select>

                </div>

                <div class= "col-md-12">
                    <label for = "address" class = "form-label">Address</label>
                    <input id = "address" type = "text" class = "form-control" placeholder="1 Washington Sq" required>

                </div>

                <div class= "col-md-8">
                    <label for = "city" class = "form-label">City</label>
                    <input id = "city" type = "text" class = "form-control" placeholder="San Jose" required>

                </div>
    
                <div class= "col-md-4">
                    <label for = "zip" class = "form-label">Zip Code</label>
                    <input id = "zip" type = "text" class = "form-control" placeholder="95192" maxlength= "5" pattern="\d{5}"required>
    
                </div>

                <div class= "col-md-12">
                    <label for = "phone" class ="form-label">Phone Number</label>
                    <input type="tel" id="phone" class = "form-control" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder= "408-924-1000"  required>
                </div>
                

            </div>

            <br><hr><br>

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
                    <input id = "exp" type = "text" class = "form-control" placeholder="01/23" maxlength = "5" pattern="\d{2}/\d{2}"required>

                </div>

                <div class= "col-md-3">

                    <label for = "cvv" class = "form-label">CVV</label>
                    <input id = "cvv" type = "text" class = "form-control" placeholder="123" maxlength = "3" pattern="\d{3}"required>
                </div>

                <button class = "btn btn-primary btn-lg btn-block" onclick='window.location = "Confirmation.php"'> Book your reservation</button>

                

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

<script type="text/javascript">
    const form1 = document.getElementById("checkout");
    form1.addEventListener("submit", (e)=>{
      e.preventDefault();
      const request = new XMLHttpRequest();   // Create a new connection object.
      request.open("post", "/checkout");   // Define the URL to connect.
      request.onload = function(){    // Execute this function when the server responds.
        const json = JSON.parse(request.response);
        if (json.success){
          window.location.href = 'Confirmation.html';   // If the checkout is successful, redirect to Confirmation.html
        }
        else{
          window.alert(json.message);   // Display an alert if something goes wrong.
        }
      }
      var data = {
        fname: document.getElementById("fname").value, 
        lname: document.getElementById("lname").value, 
        email: document.getElementById("email").value,
        country: document.getElementById("country").value, 
        state: document.getElementById("state").value, 
        address: document.getElementById("address").value, 
        city: document.getElementById("city").value, 
        zip: document.getElementById("zip").value, 
        phone: document.getElementById("phone").value,
        cardType: document.getElementById("cardtype").value,
        name: document.getElementById("cname").value,
        cardNumber: document.getElementById("cnumber").value,
        expireDate: document.getElementById("exp").value,
        CVV: document.getElementById("cvv").value,
      }
      request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");   // Add headers to the request.
      request.send(JSON.stringify(data));   // Send the request to the server along with data. Data contains information given by the user. 
    })
  </script>

  </body>
</html>