<?php
session_destroy();
session_start();

 if($_SERVER["REQUEST_METHOD"] == "POST") {

// Grab User submitted information
$email = $_POST["username"];
$pass = $_POST["password1"];

// Connect to the database
$con = mysql_connect("localhost","root","rootroot");
// Make sure we connected successfully
if(!$con)
{
    die('Connection Failed'.mysql_error());
}


// Select the database to use
mysql_select_db("OTC",$con);

$result = mysql_query("SELECT DoctorId,Email, Password FROM doctor WHERE Email = '$email'")or die ('Error updating database: '.mysql_error());;
$row = mysql_fetch_array($result);

if($row["Email"]==$email && $row["Password"]==$pass)
{
   $_SESSION['newsession']=$row["DoctorId"];
   echo "<script> window.location.assign('Patientslist.php'); </script>";
}
else
    $_SESSION['errMsg'] = "Invalid username or password";
}
?>
<html>
<head>
    <title> Doctor LogIn</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    </script>
		<!---- animated-css ---->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script type="text/javascript" src="js/jquery.corner.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!---- animated-css ---->
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
            });
        });
    </script>
    <!---- start-smoth-scrolling---->
    <!----webfonts--->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!----start-top-nav-script---->
    <script>
        $(function () {
            var pull = $('#pull');
            menu = $('nav ul');
            menuHeight = menu.height();
            $(pull).on('click', function (e) {
                e.preventDefault();
                menu.slideToggle();
            });
            $(window).resize(function () {
                var w = $(window).width();
                if (w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });
    </script>
    <!----//End-top-nav-script---->
</head>
<body>

    <div class="bg2">
        <div class="container">
            <div id="home" class="header ">
                <div class="top-header">
                    <div class="logo">
                        <a href="Home.php">OTC</a>
                    </div>
                    <!----start-top-nav---->
                    <nav class="top-nav">
                        <ul class="top-nav">
                            <li><a href="Home.php" >About Us</a></li>
                            <li><a href="Conditions.php" >Conditions</a></li>
                            <li ><a href="ContactUs.php">Contact Us</a></li>
                            <li><a href="SignUp.php" > Sign Up</a></li>
                            <li class="active-join" ><a href="PatientLogIn.php">PATIENT LOG IN</a></li>
                        </ul>
                        <a href="#" id="pull">
                            <img src="images/nav-icon.png" title="menu" /></a>
                    </nav>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="banner-info">
            <div class="container">
                 
                <div class="banner-info-label1">
                    <div class="login-page">
<div id="errMsg" style="background-color: red; font-color: black"> <center>
            <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?>
               <?php unset($_SESSION['errMsg']); ?>
</center>
                </div>
                        <div class="form">
                            <form method="post" class="login-form" action="" >
                                <label style="float: left; font-size: 1.7em"><font color="#f98b68"> Doctor Sign In </font></label>
                                <input type="text" placeholder="username" name="username" id="username"/>
                                <input type="password" placeholder="password" name="password1" id="password1"/>
                                <br />
                                <br />
                                <button type="submit">login</button>
                                <br />
                                <br />
                                 <p class="message">Not registered? <a href="SignUp.html">Create a Doctor account</a></p>                            </form>
                        </div>
                    </div>


                </div>
                <h1 data-wow-delay="0.5s"></h1>
                <div class="top-banner-grids" data-wow-delay="0.4s">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    </div>

                </div>
            </div>
        </div>

    </div>
</body>
</html>

