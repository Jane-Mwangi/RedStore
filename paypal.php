<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="mydb";

// Create connection
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ( isset($_POST['pemail'])){
    $pemail = $_POST['pemail'];
    $cname = $_POST['cname'];
    $amount= $_POST['amount'];


    $query ="INSERT INTO paypal(pemail, cname, amount) VALUES ( '  $pemail',' $cname',' $amount');";

    mysqli_query($con,$query);
    

     
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/pics/logo.png" width="125px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li>
                        <a href="Homepage.html">Home </a>
                    </li>

                    <li>
                        <a href="productpage.html">Products </a>
                    </li>

                    <li>
                        <a href="">About </a>
                    </li>

                    <li>
                        <a href="">Contact</a>
                    </li>
                    <li>
                        <a href="Login.html">Account</a>
                    </li>
                </ul>
            </nav>
            <img src="images/pics/cart.png" width="30px" height="30px">
            <img src="images/pics/menu.png" class="menu-icon" onclick="menutoggle()">

        </div>
    </div>
    <!--------------------Account Page---------------------->
    <div class="account-page">
   
        <div class="container">            
            <div class="row">
                <div class="col-2">
                    <img src="images/pics/image1.png" width="100%">
                </div>
               
                  
                    <form method="POST">
                    <div id="box" >
                    
                        <form method="POST" >
                            <div  class="title text-center">Paypal</div> 

                            <label for="pemail">Email</label>
                            <input id="text" type="text"  name="pemail" placeholder="Email">
                            
                            <label for="cname">Name</label><br>
                            <input type="text"  name="cname" placeholder="CustomerName">

                            <label for="amount">Amount</label><br>
                            <input type="text"  name="amount" placeholder="Amount">

                            <button type="submit" name="Submit">Submit</button>
                            
                        </form>
                        
                </div>

                </div>
            </div>
           
        </div>
         
    </div>
    <!----------------Footer------------------------>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone</p>
                    <div class="app-logo">
                        <img src="images/pics/play-store.png">
                        <img src="images/pics/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/pics/logo-white.png" alt="">
                    <p>Our Purpose Is To make the pleasure and Benefits of Sports Accessible to Many
                    </p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2022-SCS203</p>
        </div>
    </div>
    <!---------------Js toggle menu-------------------->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "10px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }

        }
    </script>
    <!----------------JS for toggle form---------------->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var indicator = document.getElementById("Indicator");

        function register() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            indicator.style.transform = "translateX(100px)";
        }

        function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            indicator.style.transform = "translateX(0px)";
        }
    </script>
</body>

</html>


</body>

</html>