<?php
session_start();

 if($_SERVER["REQUEST_METHOD"] == "GET") {
// Grab User submitted information



// Connect to the database
$con = mysql_connect("localhost","root","rootroot");

// Make sure we connected successfully
if(!$con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("OTC",$con);

 $zib = $_GET["zibcode"];

if($zib != null && $zib > 0){
	$result = mysql_query("SELECT * FROM doctor where Zipcode = '$zib'")or die ('Error updating database: '.mysql_error());;
}else{
$result = mysql_query("SELECT * FROM doctor ")or die ('Error updating database: '.mysql_error());
}

	if($result){
}
?>



<!DOCTYPE HTML>
<html>
<head>S
    <title> Choose Doctor
 </title>
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
    <div class="bg4">
        <div class="container">
            <div id="home" class="header ">
                <div class="top-header">
                    <div class="logo">
                        <a href="Home.php">OTC</a>
                    </div>
                    <!----start-top-nav---->
                    
                    
                    <nav class="top-nav">
                        <ul class="top-nav" id="nav">
                            <li><a href="PatientProfile.php" style="width: 211.6px; height: 61.6px;">My Profile</a></li>
                            <li><a href="ContactUs.php"  style="  width: 211.6px;height: 61.6px;">Contact Us</a></li>
                            <li><a href="Appointment.php"  style="  width: 211.6px;height: 61.6px;">my appointments</a></li>
                            <li><a href="PatientHistory.php"  style="  width: 211.6px;height: 61.6px;">My Record</a></li>

                            <li>
                                <a class="test" href="#">Hello Patient<span class="caret"></span></a>
                                <ul class="dropdown-submenu">

                                    <a class="test" href="Home.php">Log Out</a>
                                </ul>
                            </li>
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
                            <div class="signup-form">
                                <label style="float: left; font-size: 1.7em"> <font color="#f98b68"> Choose doctor </font></label>
                                <br />
                                <br />
                                <hr style="border: inset;" />

                                <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3">


                                <datalist id="zipcode">
                                  <option value="07032">
                                  <option value="48185">
                                  <option value="48012">
                                </datalist>

                                <input list="zipcode" type="search" name="doctorSearch" id="code" placeholder="Search by Zip Code">
                                </div>
                                 <div class="col-xs-12 col-sm-6 col-md-3">
								 
                                <button type="button" id="searchByCode">Search</button>
                                </div>
                                </div>


                                <div class="row" id="display">
                                <?php
									while($row = mysql_fetch_row($result))
										
	{
		?>
	
								<div id="$row["ZibCode"]">
                                    <div id="a" class="col-xs-12 col-sm-6 col-md-3" >
                                        <a href="#" class ="img-doctor-id">
                                            <figure>
                                                <img src="doc323.png" alt="">
												<input type="hidden" value="<?= $row[0] ?>">
                                            </figure>
											<h3><?= $row[1] ?></h3>
                                        </a>

                                    </div>
                                    </div>
	
 <? }
 }
 ?>
						
                       
                                    </div>
                                    <!-- <div class="col-xs-12 col-sm-6 col-md-3">
                                        <a href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123941/placeimg04.jpg">
                                            <figure>
                                                 <img src="doc1.jpg" alt="">
                                            </figure>
                                        </a>
                                    </div>-->

                                </div>

                                <br />

                                
                                <div class="row">

                                    <div class="col-xs-12 col-sm-6 col-md-6">


                                        <button id="ShowClose" type="button" class="close" aria-label="Close" style="display: none">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>


                                <div id="aa" style="background-color: #ededed; text-align: left; display: none">
                                    <br />
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-12">
                                            <label> Dr.John Glaser</label> 
                                            </br>
                                            <label>Cost Per Visit: $59.00 (may be covered by insurance) </label>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-12">
                                            <a href="skype:profile_name?rawanalhussain"><img src="skype.png" id="skypelogo"/></a>
                                        </div>
                                    </div>

                                    <hr style="border: inset;" />

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <label>Languages :
                                                <br />
                                                Spanish, English </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <label>Professional Education :<br />
                                                University Of California</label>
                                        </div>
                                    </div>

                                    <hr style="border: inset;" />
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <label>Years Of Experience :<br />
                                                16 years </label>
                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <label>Board Certified In :<br />
                                                Family Medicine </label>
                                        </div>
                                    </div>
                                    <hr style="border: inset;" />
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <label>Primary care provider :<br />
                                                No </label>
                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <label>Location :<br />
                                                Vestavia Hill , AL - 07032 </label>
                                        </div>
                                    </div>
                                    <hr style="border: inset;" />

                                    <div class="row">

                                        <form method="post">

                                        <div class="col-xs-12 col-sm-6 col-md-5">
                                            <label style="float: left; font-size: 1.7em">Schedule Appointment</label>
                                            <br />
                                            <br />
                                            <div style="float: left"></div>
                                            <br />
                                            <br />
                                            <label>Select Date :</label>
                                            <input type="text" name="doctorid" style="display:none" value="1"/>
                                            <input id="datetimepicker12" type="text" placeholder="Date" value="MM/DD/YYYY" style="width: 200px; background-color: white"  name="Apptdate"/>
                                            <br />
                                            <br />
                                            <label>Select Time :</label>

                                            <select name='time' id='Select2' style="width: 200px; background-color: white">
                                                <option value='10:00 AM'>10:00 AM</option>
                                                <option value='12:00 PM'>12:00 PM</option>
                                                <option value='02:00 PM'>02:00 PM</option>
                                                <option value='04:00 PM'>04:00 PM</option>
                                            </select>

                                            <br />
                                            <br />
                                            <br />
                                            <button type="submit" style="margin: 15px; width: 40%; padding: 10px 20px;">Make an Appointment</button>
                                            <br />
                                            <br />

                                        </div>

                                            </form>
                                        <br />

                                    </div>
                                </div>

                                <div id="bb" style="background-color:  #ededed; text-align: left; display: none; padding-left: 5px;">
                                    <br />
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-12">
                                        <label> Dr.Mark Smith </label>
                                        </br>
                                            <label>Cost Per Visit: $29.00 (may be covered by insurance) </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-12">
                                           <a href="skype:profile_name?rawanalhussain"><img src="skype.png" id="skypelogo"/></a>
                                        </div>
                                    </div>

                                    <hr style="border: inset;" />

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <label>Languages :
                                                <br />
                                                English </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <label>Professional Education :<br />
                                                University Of Michigan</label>
                                        </div>
                                    </div>

                                    <hr style="border: inset;" />
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <label>Years Of Experience :<br />
                                                3 years </label>
                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <label>Board Certified In :<br />
                                                Physician </label>
                                        </div>
                                    </div>
                                    <hr style="border: inset;" />
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <label>Primary care provider :<br />
                                                Yes </label>
                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <label>Location :<br />
                                                Hill Town, FL  - 48185</label>
                                        </div>
                                    </div>

                                    <hr style="border: inset;" />

                                    <div class="row">

                                         <form method="post">

                                        <div class="col-xs-12 col-sm-6 col-md-5">
                                            <label style="float: left; font-size: 1.7em">Schedule Appointment</label>
                                            <br />
                                            <br />
                                            <div style="float: left"></div>
                                            <br />
                                            <br />
                                             <input type="text" name="doctorid" style="display:none" value="1"/>
                                            <label>Select Date :</label>
                                            <input id="datetimepicker13" type="text" placeholder="Date" value="MM/DD/YYYY" style="width: 200px; background-color: white"  name="Apptdate"/>
                                            <br />
                                            <br />
                                            <label>Select Time :</label>

                                            <select name='time' id='Select1' style="width: 200px; background-color: white">
                                                <option value='10:00 AM'>10:00 AM</option>
                                                <option value='12:00 PM'>12:00 PM</option>
                                                <option value='02:00 PM'>02:00 PM</option>
                                                <option value='04:00 PM'>04:00 PM</option>
                                            </select>

                                            <br />
                                            <br />
                                            <br />
                                            <button  type="submit" style="margin: 15px; width: 40%; padding: 10px 20px;">Make an Appointment</button>
                                            <br />
                                            <br />

                                        </div>

                                             </form>
                                        <br />

                                    </div>
                                </div>

                                <div id="cc" style="background-color:  #ededed; text-align: left; display: none">
                                    <br />
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-12">
                                        <label> Dr. Michael Dargay </label>
                                        </br>
                                            <label>Cost Per Visit: $19.00 (may be covered by insurance) </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-12">
                                            <a href="skype:profile_name?rawanalhussain"><img src="skype.png" id="skypelogo"/></a>
                                        </div>
                                    </div>

                                    <hr style="border: inset;" />

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <label>Languages :
                                                <br />
                                                Spanish </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <label>Professional Education :<br />
                                                University Of Maryland</label>
                                        </div>
                                    </div>

                                    <hr style="border: inset;" />
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <label>Years Of Experience :<br />
                                                1 years </label>
                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <label>Board Certified In :<br />
                                                Family Medicine </label>
                                        </div>
                                    </div>
                                    <hr style="border: inset;" />
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <label>Primary care provider :<br />
                                                No </label>
                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <label>Location :<br />
                                                Vestavia Hill , MD - 48012</label>
                                        </div>
                                    </div>

                                    <hr style="border: inset;" />

                                    <div class="row">

                                         <form method="post">
                                        <div class="col-xs-12 col-sm-6 col-md-5">
                                            <label style="float: left; font-size: 1.7em">Schedule Appointment</label>
                                            <br />
                                            <br />
                                            <div style="float: left"></div>
                                            <br />
                                            <br />
                                             <input type="text" name="doctorid" style="display:none" value="1"/>
                                            <label>Select Date :</label>
                                            <input id="datetimepicker14" type="text" placeholder="Date" value="MM/DD/YYYY" style="width: 200px; background-color: white" name="Apptdate"/>
                                            <br />
                                            <br />
                                            <label>Select Time :</label>

                                            <select name='time' id='Select3' style="width: 200px; background-color: white">
                                                <option value='10:00 AM'>10:00 AM</option>
                                                <option value='12:00 PM'>12:00 PM</option>
                                                <option value='02:00 PM'>02:00 PM</option>
                                                <option value='04:00 PM'>04:00 PM</option>
                                            </select>

                                            <br />
                                            <br />
                                            <br />
                                            <button type="submit"  style="margin: 15px; width: 40%; padding: 10px 20px;">Make an Appointment</button>
                                            <br />
                                            <br />

                                        </div>
                                             </form>
                                        <br />

                                    </div>
                                </div>


                            </div>
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

        $('#a').click(function () {
            $('#aa').show();
            $('#showClose').show();
            $('#ShowApp').show();

            $('#b').hide();
            $('#c').hide();



        });

        $('#b').click(function () {
            $('#bb').show();
            $('#showClose').show();
            $('#ShowApp').show();

            $('#a').hide();
            $('#c').hide();



        });

        $('#c').click(function () {
            $('#cc').show();
            $('#showClose').show();
            $('#ShowApp').show();

            $('#a').hide();
            $('#c').hide();



        });

        $('#showClose').click(function () {
            $('#aa').hide();
            $('#bb').hide();
            $('#cc').hide();

            $('#ShowApp').hide();

            $('#showClose').hide();

            $('#a').show();
            $('#b').show();

            $('#c').show();




        });

        $('#searchByCode').click(function(){
            var code = $("#code").val();
            if(code!=""){
          window.location.assign('doctor_schedules.php?doctor_id='+code);
        }
            
        })    
		
		        $('.img-doctor-id').click(function () {
            var code = $(this).find("input").val();
            if(code!=""){
          window.location.assign('doctor_schedules.php?doctor_id='+code);
        }
        });

        $(function () {
            $('#datetimepicker12').datepicker();
        });
        $(function () {
            $('#datetimepicker13').datepicker();
        });
        $(function () {
            $('#datetimepicker14').datepicker();
        });


    </script>
    <style>
        .top-nav ul li a {
            font-size: 1.227em;
        }
    </style>
    <style>
        .top-nav ul li a {
            font-size: 1.22em;
        }

        .signup-page {
            width: 1100px;
        }

        #skypelogo{
            width:30px;
            height:30px;
            margin:10px;
        }

        hr {
            border-top: 1px solid none;
            background-color: lightgreen;
            margin-top: 0px;
        }

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
            hr height: 50px;
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

        h3 {
            text-align: center;
            font-size: 1.65em;
            margin: 0 0 30px;
        }

        /*div {
            display: flex;
            flex-wrap: wrap;
        }*/

        /*a {
            display: inline-block;
            margin-bottom: 8px;
            width: calc(50% - 4px);
            margin-right: 8px;
            text-decoration: none;
            color: black;
        }*/

        a:nth-of-type(2n) {
            margin-right: 0;
        }

        @media screen and (min-width: 50em) {
            a {
                width: calc(25% - 6px);
            }

                a:nth-of-type(2n) {
                    margin-right: 8px;
                }

                a:nth-of-type(4n) {
                    margin-right: 0;
                }
        }

        a:hover img {
            transform: scale(1.15);
        }

        figure {
            margin: 0;
            overflow: hidden;
        }

        /*figcaption {
            margin-top: 15px;
        }*/

        img {
            border: none;
            max-width: 100%;
            width: 500px;
            height: 200px;
            display: block;
            background: #ccc;
            transition: transform .2s ease-in-out;
        }

        /*.p a {
            display: inline;
            font-size: 13px;
            margin: 0;
            text-decoration: underline;
            color: blue;
        }*/

        /*.p {
            text-align: center;
            font-size: 13px;
            padding-top: 100px;
        }*/
    </style>
</body>
</html>
