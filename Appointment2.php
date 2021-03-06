<!DOCTYPE HTML>
<html>
<head>
    <title>Make An Appointment</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/jquery-ui.theme.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!---- animated-css ---->
    <!--<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">

    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>-->
    <!---- animated-css ---->
    <!---- start-smoth-scrolling---->
    <!--<script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>-->
    <!-- <link rel="stylesheet" href="/resources/demos/style.css">-->
    <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->

    <!-- <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
            });
        });
    </script>-->
    <!---- start-smoth-scrolling---->
    <!----webfonts--->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!----start-top-nav-script---->
    <!-- <script>
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
    </script>-->
    <!----//End-top-nav-script---->
</head>
<body>
    <div class="bg5">
        <div class="container">
            <div id="home" class="header ">
                <div class="top-header">
                    <div class="logo">
                        <a href="Home.php">OTC</a>
                    </div>
                    <!----start-top-nav---->
                    <nav class="top-nav">
                        <ul class="top-nav">
                            <li><a href="DoctorProfile.php" style="width: 211.6px; height: 61.6px;">My Profile</a></li>
                            <li><a href="Appointment2.php"  style="  width: 211.6px;height: 61.6px;">my appointments</a></li>
                            <li><a href="Patientslist.php"  style="  width: 211.6px;height: 61.6px;">Patients List</a></li>
                            <li><a href="phistory.php"  style="  width: 211.6px;height: 61.6px;">History Records</a></li>
                            <li class="active-join" class="page-scroll"><a href="Home.php">LOG OUT</a></li>
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

                                <br />
                                <br />
                                
                                 <div class="row" style="background-color: whitesmoke">

                                    <div class="col-xs-12 col-sm-6 col-md-5">
                                        <label style="float: left; font-size: 1.7em"><font color="#f98b68">Upcoming Appointments</font></label>
                                        </br>
                                        <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-12">
                                        <p>You have an appointment with Rawan Huss Scheduled on May 10 , 2017 at 10 am.</p>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-12">
                                            <a href="skype:profile_name?rawanalhussain"> Click to Call<img src="skype.png" id="skypelogo"/></a>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                        <br />
                                        

                                <div class="row" style="background-color: whitesmoke">

                                
                                    <div class="col-xs-12 col-sm-6 col-md-5">
                                        <label style="float: left; font-size: 1.7em"><font color="#f98b68">Make An Appointment</font></label>
                                        <br />
                                        <br />
                                        
                                        <br />
                                        <div id="datetimepicker12" style="float: left"></div>
                                        <br />
                                        <br />
                                        <label>Selected Date :</label>
                                        <input type="text" placeholder="Date" value="MM/DD/YYYY" style="width: 200px; background-color: white" />
                                        <label>Selected Time :</label>
                                        <input type="text" placeholder="Time" value="" style="width: 200px; background-color: white" />
                                        <br />
                                        <br />
                                        <br />
                                        <br />
                                        <button style="">Make an Appointment</button>
                                    </div>

                                    <div class="col-xs-12 col-sm-4 col-md-2" style="padding: 5px; background-color: none">
                                        <br />
                                        <br />
                                        <br />
                                        <br />
                                        <br />
                                        <br />
                                        <button class="d">10:00 AM</button>
                                        <button class="d">12:00 PM</button>
                                        <button class="d">02:00 PM</button>
                                        <button class="d">04:00 PM</button>
                                        <br />
                                        <br />
                                        <br />
                                        <br />
                                        <br />
                                        <br />
                                    </div>

                                </div>

                                <div class="row">

                                    <!-- <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Details</label>
                                        <input type="text" placeholder="details" />

                                    </div>-->

                                </div>

                                <div class="row">
                                    <!--  <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label style="float: left">Insurance ID</label>
                                        <input type="text" placeholder="InsuranceID" />
                                    </div>-->


                                </div>









                                <!-- <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <button>Make an Appointment</button>
                                    </div>
                                </div>-->
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
    <style>
        .top-nav ul li a {
            font-size: 1.22em;
        }
        
         #skypelogo{
            width:50px;
            height:50px;
            margin:20px;

        .signup-page {
            width: 1150px;
        }

        .d {
            width: 50%;
        }
    </style>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker12').datepicker();
        });

    </script>
</body>
</html>

