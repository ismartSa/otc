<?php
session_start();
$apptdate=$_SESSION ['Apptdate'];
$time= $_SESSION ['Time'];

 if($_SERVER["REQUEST_METHOD"] == "POST") {
// Grab User submitted information
$ccname = $_POST["creditcardname"];
$cnum = $_POST["cnumber"];
$edate = $_POST["Edate"];
$cvv = $_POST["CVV"];
$chname = $_POST["cardhname"];
$pcode = $_POST["postalcode"];
// Connect to the database
$con = mysql_connect("localhost","root","rootroot");


// Make sure we connected successfully
if(!$con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("OTC",$con);

$query = "INSERT INTO `payment`
(`CardName`,`CardNumber`,`EDate`,`CVV`,`DateOfBirth`,`PostalCode`,`Paymentcol`)

VALUES ( '$ccname','$cnum','$edate','$cvv','01/01/1991','$pcode','$chname')";

if(mysql_query($query)  && !empty($cvv))

echo "
<script> window.location.assign('Appointment.php'); </script>";
else

  $_SESSION['errMsg'] = "Please provide correct details for payment.";



}
?>



<!DOCTYPE HTML>
<html>
<head>
    <title>Payment Information</title>
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
    <div class="bg3">
        <div class="container">
            <div id="home" class="header ">
                <div class="top-header">
                    <div class="logo">
                        <a href="Home.php">OTC</a>
                    </div>
                    <!----start-top-nav---->
                    <nav class="top-nav">
                        <ul class="top-nav">
                            <li><a href="PatientProfile.php" style="width: 211.6px; height: 61.6px;">My Profile</a></li>
                            <li><a href="ChooseDoctor.php" >Doctors</a></li>
                            <li class="page-scroll"><a href="Appointment.php">my appointments</a></li>
                            <li><a href="PatientHistory.php">My Record</a></li>
                            <li class="active-join" class="page-scroll"><a href="Home.php">LOG OUT</a></li>
                        </ul>
                        <a href="#" id="pull">
                            <img src="images/nav-icon.png" title="menu" />
                        </a>
                    </nav>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="banner-info">
            <div class="container">
                <div class="banner-info-label1">
                    <div class="signup-page">
                        <div class="signupform">
                            <div id="errMsg" style="background-color: red; font-color: black">
                                <center>
                                    <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?>
                                    <?php unset($_SESSION['errMsg']); ?>
                                </center>
                            </div>

                            <form method="post" class="signup-form">
                                <label style="float: left; font-size: 1.7em"><font color="#f98b68">Schedule Information</font></label>
                               <br/><br/>
<hr style="border: inset;" />
                                <label style="float: left">Please verify the following schedule information mentioned below and make the payment</label>
<br/><br/>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Scheduled Date </label>
                                        <input type="text"  name="scheduledate" value="<?= $apptdate ?>"/>

                                    </div>
                                   

                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Scheduled Time </label>
                                        <input type="text" name="scheduledate" value="<?= $time ?>" />

                                    </div>


                                </div>

                            </form> 
                            <form method="post" class="signup-form">
                                <label style="float: left; font-size: 1.7em"><font color="#f98b68">Payment Information</font></label>
                                
<br/><br/>
<hr style="border: inset;" />
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Credit Card Name</label>
                                        <input type="text" placeholder="cardusername" name="creditcardname" />

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Card Number</label>
                                        <input type="number" name="cnumber" />

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Expiry Date</label>
                                        <input type="Date" name="Edate" />

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left"> CVV</label>
                                        <input type="password" name="CVV" />

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label style="float: left">Name On Card</label>
                                        <input type="text" placeholder="Name on Card" name="cardhname" />
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Postal Code</label>
                                        <input type="text" placeholder="Postal Code" name="postalcode" />

                                    </div>
                                </div>















                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <button type="submit">Make an Payment</button>
                                    </div>
                                </div>
                                <FORM><INPUT Type="button" VALUE="Back" onClick="history.go(-1);return true;"></FORM>
                                
                            </form>
                            </form>
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

    <style>
        .top-nav ul li a {
            font-size: 1.227em;
        }
    </style>

</body>
</html>

