


<!DOCTYPE HTML>
<html>
<head>
    <title>Call Review Rating</title>
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
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
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
    @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
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
                            <li><a href="Home.php">About Us</a></li>
                            <li><a href="Conditions.php">Conditions</a></li>
                            <li class="page-scroll"><a href="ContactUs.php">Contact Us</a></li>
                            <li><a href="SignUp.php">Sign Up</a></li>
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
                            

                            <form method="post" class="signup-form">
                                <label style="float: left; font-size: 1.7em">Call Rating </label>
                                <br /><br />
                                <hr style="border: inset;" />

                               

                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Doctor's Overall Chat</label>
                                        <div class="rating">
                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                        </div>

                                    </div>
                                   

                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Doctor's Initial Response</label>
                                        <div class="rating">
                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                        </div>

                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Doctor's Suggestion</label>
                                        <div class="rating">
                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                        </div>

                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Doctor's Responsiveness</label>
                                        <div class="rating">
                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                        </div>

                                    </div>


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

    <style>
        .top-nav ul li a {
            font-size: 1.22em;
        }

        .rating {
            unicode-bidi: bidi-override;
            direction: rtl;
        }

            .rating > span {
                display: inline-block;
                position: relative;
                width: 1.1em;
            }

                .rating > span:hover:before,
                .rating > span:hover ~ span:before {
                    content: "\2605";
                    position: absolute;
                }

    </style>

</body>
</html>

