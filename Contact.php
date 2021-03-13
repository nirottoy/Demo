<?php
    $err_pname="";
    $err_pcategory="";
    $err_pprice="";
    $err_pquantity="";
    $err_pbio="";
    $err_pfilename="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST["pname"]))
        {
            $err_pname="Please insert name";
        }
        if(!isset($_POST["pcategory"]))
        {
            $err_pcategory="Please select category";
        }
        if(empty($_POST["pprice"]))
        {
            $err_pprice="Please insert price";
        }
        if(empty($_POST["pquantity"]))
        {
            $err_pquantity="Please insert quantity";
        }
        if(empty($_POST["pbio"]))
        {
            $err_pbio="Please insert description";
        }
        if(empty($_POST["filename"]))
        {
            $err_pfilename="Please insert file";
        }
        
    }
    // Date, name, email, The complaint is regarding:, The nature of complaint:
    // Name of the company/person against which/whom the complaint is filed:, 
    // The specific details of the complaint:
?>

<html>
    <head>
        <title>Home</title>
        <link  href="stylesheet.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    </head>
    <body>
        <div class="header">
            <h1>Our Tech Shop</h1>
            <p>We The Tech Magnet</p>
        </div>
        <div class="topnav">
            <ul class="plain-bullet">
                <li><a href="Home.php">Home</a></li>
                <li><a href="Support.php">Support</a></li>
                <li><a href="SpecialOffers.php">Special Offers</a></li>
                <li><a href="MyAccount.php">My Account</a></li>
                <li><a href="Contact.php" class="active">Contact</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
                <li><a href="Login.php" class="right">Login</a></li>
            </ul>
            <input type="text" placeholder="Serach..">
            </div>
        <div class="left-menu">
            <h1>Products</h1>
            <ul class="plain-bullet">
                <li><a href="#laptops">Laptops</a></li>
                <li><a href="#pc">PC</a></li>
                <li><a href="#mobile">Mobiles</a></li>
                <li><a href="#smartwatch">Smart Watch</a></li>
                <li><a href="#gpu">Graphics Card</a></li>
                <li><a href="#cpu">Processors</a></li>
                <li><a href="#mobo">Motherboards</a></li>
            </ul>
        </div>
        
        <div class="main-content">

            <h2 align="center">Contact: +88019999-12345</h2>
            <h2 align="center">Email: techshop@ourmail.bd</h2>

        </div>

        <footer align="center">
            <ul>
                <li><a href="#emi-terms">EMI Terms</a></li>
                <li><a href="#about_us">About Us</a></li>
                <li><a href="#online-delivery">Online Delivery</a></li>
                <li><a href="#privacy">Privacy Policy</a></li>
                <li><a href="#warranty-policy">Terms and Conditions</a></li>
                <li><a href="#refund-policy">Refund and Return Policy</a></li>
                <li><a href="#career">Career</a></li>
                <li><a href="#write-for-us">Write for Us</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="#manufacturer">Brands</a></li>
            </ul>
        </footer>

    </body>
</html>