<?php
session_start();
$id= $_SESSION['newsession'];
// Connect to the database
$con = mysql_connect("localhost","root","rootroot");

// Make sure we connected successfully
if(!$con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("OTC",$con);

$query = "SELECT Fname,LName,Gender,Address,City,State,Contact,Email,Occupation,DateOfBirth,Height,Weight,EContact,InsuranceID,Password FROM patient WHERE PatientID = '$id'";

$res= mysql_query($query) or die ('Error updating database: '.mysql_error()); 
$row = mysql_fetch_array($res);
$fname=$row["Fname"];
$lname=$row["LName"];
$gender=$row["Gender"];
$address=$row["Address"];
$city=$row["City"];
$state=$row["State"];
$occp=$row["Occupation"];
$contact=$row["Contact"];
$email=$row["Email"];
$height=$row["Height"];
$weight=$row["Weight"];
$dob=$row["DateOfBirth"];
$econtact=$row["EContact"];
$iid=$row["InsuranceID"];
$pass=$row["Password"];


?>




<!DOCTYPE HTML>
<html>
<head>
    <title>Patient Profile</title>
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
    <div class="bg1">
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
                                <li><a href="Home.php" >Conditions</a></li>
								<li class="page-scroll"><a href="Home.php" >Contact Us</a></li>
								<li><a href="SignUp.php" >Sign Up</a></li>								
								<li class="active-join" class="page-scroll"><a href="Home.php" >LOG OUT</a></li>
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
                    <div class="signup-page">
                        <div class="signupform">
                            <form class="signup-form">
                                <label style="float: left; font-size: 1.7em"><font color="#f98b68">Patient Profile</font></label>
                                <br />
                                <br />

                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">User Name</label>
                                        <input type="text" placeholder="username" value="<?= $email?>" />

                                    </div>
                                    

                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">First Name</label>
                                        <input type="text" placeholder="FirstName" value="<?= $fname?>" />

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Last Name</label>
                                        <input type="text" placeholder="Last Name" value="<?= $lname?>" />

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label style="float: left">Gender</label>
                                       <input type="text" placeholder="Gender"  value="<?= $gender?>"/>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                          <label style="float: left">Date Of Birth</label>
                                        <input type="text" placeholder="Date of Birth"  value="<?= $dob?>"/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Address</label>
                                        <input type="text" placeholder="Address"  value="<?= $address?>"/>

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">City</label>
                                        <input type="text" placeholder="City"  value="<?= $city?>"/>

                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">State</label>
                                        <input type="text" placeholder="State" value="<?= $state?>" />

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Contact</label>
                                        <input type="text" placeholder="Contact" value="<?= $contact?>"/>

                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Email</label>
                                        <input type="text" placeholder="Email" value="<?= $email?>"/>

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Occupation</label>
                                        <input type="text" placeholder="Occupation" value="<?= $occp?>"/>

                                    </div>

                                </div>

                                   <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Weight</label>
                                        <input type="text" placeholder="Weight"  value="<?= $weight?>"/>

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Height</label>
                                        <input type="text" placeholder="Height" value="<?= $height?>"/>

                                    </div>

                                </div>

                                 <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Emergency Contact</label>
                                        <input type="text" placeholder="Emergency Contact"  value="<?= $econtact?>"/>

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Insurance ID</label>
                                        <input type="text" placeholder="Insurance ID" value="<?= $iid?>" />

                                    </div>

                                </div>

                                

                                <div class="row">
                                    
                                </div>
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

</body>
</html>

