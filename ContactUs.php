<!DOCTYPE HTML>
<html>
<head>
    <title>Contact Us</title>
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
                    <nav class="top-nav" id="menu">
                        <ul class="top-nav" id="nav">
                            <li><a href="Home.php#about" style="  width: 211.6px;height: 61.6px;"> How it Works </a></li>
                            <li><a href="Conditions.php"  style="width: 211.6px; height: 61.6px;">Conditions</a></li>
                            <li class="page-scroll"><a href="ContactUs.php"  style="width: 211.6px; height: 61.6px;">Contact Us</a></li>
                            <li>
                                <a href="#about"  style="width: 210.6px; height: 61.6px;">SignUp<span class="caret"></span></a>

                                <ul class="dropdown-submenu" >
                                    <a class="test" style="  width: 211.6px;height: 61.6px;" href="SignUp.php">Doctor Sign Up</a>
                                        <a class="test" style="  width: 210.6px;height: 61.6px;" href="PatientSignUp.php">Patient Sign Up</a>
                                </ul>
                            </li>
                            <li>
                                <a class="test" href="#">LOG IN<span class="caret"></span></a>
                                <ul class="dropdown-submenu" >
                                    <a class="test" href="PatientLogIn.php"> Patient LogIn</a>
                                     <a class="test" href="login.php" > Doctor LogIn</a>
                                </ul>
                            </li>
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
                            <form class="signup-form">

                                <div class="row" style="background-color: whitesmoke">


                                    <div class="col-xs-12 col-sm-6 col-md-12">
                                        <label style="float: left; font-size: 1.9em"><font color="#f98b68">Contact Us</font> </label>
                                        <br/>
                                        

                                       



                                    </div>

                                    
                                </div>
                                <br/>
                              

                                <div class="row">

                                     <div class="col-xs-12 col-sm-6 col-md-12">
                                        <label style="float: left">Email us with any questions or inquiries or call 12234567. We would be happy to answer your questions and set up a meeting with you.</label>
                                        

                                    </div>

                                </div>
                                <center>
                                    <div style="background-color:rgba(117,196,165,.6);">

                                        <div class="row" style="margin:2px 0px;">

                                            <div class="col-xs-12 col-sm-6 col-md-12">
                                                <br />
                                                <label style="float: left">Email : info@OTC.com</label>


                                            </div>

                                        </div>

                                        <div class="row" style="margin:2px 0px;">

                                            <div class="col-xs-12 col-sm-6 col-md-12">

                                                <label style="float: left">Address:  119 N Salisbury VA 2760</label>


                                            </div>

                                        </div>

                                    </div>
                                </center>
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

    <script>

        function validateForm() {
            var un = document.docloginform.username.value;
            var pw = document.docloginform.password.value;
            var username = "doctor";
            var password = "password123";
            if ((un == username) && (pw == password)) {
                return true;
            }
            else {
                alert("Login was unsuccessful, please check your username and password");
                return false;
            }
        }

    </script>
    

    <style>
        #menu {
            border: none;
            margin: 0px;
            font-size: 1em;
            font-weight: 300;
        }

        #nav {
            height: 35px;
            list-style: none;
            margin: 0;
            width: 1010px;
            height: 50px;
            float: left;
            text-align: center;
        }

            #nav li {
                display: inline-block;
                position: relative;
                float: left;
            }

                #nav li a {
                    display: inline-block;
                    width: 163.1px;
                    line-height: 20px;
                    text-decoration: none;
                    color: #ffffff;
                }

                #nav li li {
                    float: left;
                }

                    #nav li li a {
                        display: block;
                        font-size: 0.2em;
                        width: 60px;
                    }

                #nav li:hover {
                    background: #003f20;
                }

            /*--- Sublist Styles ---*/
            #nav ul {
                position: absolute;
                padding: 0px;
                left: 0;
                display: none;
            }

        hr {
            border-top: 1px solid none;
            background-color: lightgreen;
            margin-top: 0px;
        }

        #nav ul li ul a {
            line-height: 20px;
            width: 163px;
        }

        /*--- Hide Sub Sublists ---*/
        #nav li:hover ul ul {
            display: none;
        }

        /*--- Sublevel UL's display and position on hover ---*/
        #nav li:hover ul {
            display: block;
            background-color: rgba(117,196,165,.6);
        }

        #nav li li:hover ul {
            display: block;
        }
    </style>
</body>
</html>


