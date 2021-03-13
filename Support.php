
<?php
        $name="";
        $err_name="";

        $mail="";
        $err_mail="";

        $date="";
        $err_date="";

        $month="";
        $err_month="";

        $year="";
        $err_year="";

        // ** Validation Part ** //
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["name"])){
                $err_name="Name required";
            }
            else if(strlen($_POST["name"]) < 6){
                $err_name="Name must be more than 6 characters long";
            }
            else if(strpos($_POST["name"]," ")){
                $err_name="Name should not contain whitespace";
            }

            else{   
                $name=htmlspecialchars($_POST["name"]);

            }

            if(empty($_POST["date"])){
                $err_date="Date must be selected";
            }
            else{
                $date=$_POST["date"];
            }


            if(empty($_POST["month"])){
                $err_month="Month must be selected";
            }
            else{
                $month=$_POST["month"];
            }

            if(empty($_POST["year"])){
                $err_year="Year must be selected";
            }
            else{
                $byear=$_POST["year"];
            }
        }
?>

<html>
    <head>
        <title>Support</title>
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
                <li><a href="Support.php" class="active">Support</a></li>
                <li><a href="SpecialOffers.php">Special Offers</a></li>
                <li><a href="MyAccount.php">My Account</a></li>
                <li><a href="Contact.php">Contact</a></li>
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
            <fieldset style="display: inline-block;">
                <legend><h3>Have a complaint?</h3></legend>
                    <form action="" method="post">
                    <table>
                    <tr>
                        <td><span><b>Name</b></span></td>
                        <td>: <input type="text" name="name" placeholder ="Name">
                            <span><?php echo $err_name;?></span></td>
                    </tr>
                    <tr>
                        <td><span><b>Email</b></span></td>
                        <td>: <input type="text" name="mail" placeholder ="E-mail">
                        <span><?php echo $err_mail;?></span></td>
                    </tr>
					<td><span><b>Date</b></span></td>
                        <td>: <select name ="date">
                        <option disabled selected>Date</option>
                        <?php         for($date = 1; $date <= 31; $date++) echo"<option value = '".$date."'>".$date."</option>";     ?>
                        </select>

                        <select name ="month">
                        <option disabled selected>Month</option>
						<option>Jan</option>
							<option>Feb</option>
							<option>March</option>
							<option>April</option>
							<option>May</option>
							<option>June</option>
							<option>July</option>
							<option>Aug</option>
							<option>Sep</option>
							<option>Nov</option>
							<option>Dec</option>
						</select>
                 
                        <select name ="year">
                        <option disabled selected>Year</option>
                        <?php         for($year = 1960; $year <= 2021; $year++)echo"<option value = '".$year."'>".$year."</option>";     ?>
                        </select>

                        <span><?php echo $err_date;?></span>
                        <span><?php echo $err_month;?></span>
                        <span><?php echo $err_year;?></span></td>
                    </tr>
						</select>
					</td>
				</tr>
                    
                    <tr>
                        <td><span><b>The complaint is regarding</b></span></td>
                        <td>: <textarea name="text"></textarea><br>
                    </tr>

                    <tr>
                        <td><span><b>The nature of complaint</b></span></td>
                        <td>: <textarea name="text"></textarea><br>
                    </tr>

                    <tr>
                        <td><span><b>Name of the product against which/whom the complaint is filed</b></span></td>
                        <td>: <textarea name="text"></textarea><br>
                    </tr>

                    <tr>
                        <td><span><b>The specific details of the complaint</b></span></td>
                        <td>: <textarea name="text"></textarea><br>
                    </tr>
					<br>

                    <tr>
                        <td><td><input type="submit" name="Register" value="Register"></td></td>
                    </tr>

                </table>
                    </form>
            </fieldset>

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