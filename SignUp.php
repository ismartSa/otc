<?php

 if($_SERVER["REQUEST_METHOD"] == "POST") {
// Grab User submitted information
$email = $_POST["username"];
$pass = $_POST["password1"];
$fname = $_POST["Fname"];
$lname = $_POST["Lname"];
$gender = $_POST["gender"];
$day = $_POST["day"];
$month = $_POST["month"];
$year = $_POST["year"];
$address = $_POST["Address"];
$city = $_POST["City"];
$state = $_POST["State"];
$contact = $_POST["Contact"];
$specialization = $_POST["Specialization"];
$qualification = $_POST["Qualification"];
$experience = $_POST["Experience"];
$dateofbirth= $day.'/'.$month.'/'.$year;
// Connect to the database
$con = mysql_connect("127.0.0.1","root","rootroot");

// Make sure we connected successfully
if(!$con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("OTC",$con);

$query = "INSERT INTO `doctor`
(`Fname`,`Lname`,`Gender`,`Address`,`City`,`State`,`Contact`,`Email`,`Specialization`,`DateOfBirth`,`Qualification`,`Experience`,`Password`)
VALUES ( '$fname','$lname','$gender','$address','$city','$state','$contact','$email','$specialization','$dateofbirth','$qualification','$experience','$pass')";

$res= mysql_query($query) or die ('Error updating database: '.mysql_error()); 

if(mysql_query($query) && !empty($email) && !empty($pass))

echo "<script> window.location.assign('login.php'); </script>";
else

  $_SESSION['errMsg'] = "Please provide correct details for Signing Up.";


}
?>



<!DOCTYPE HTML>
<html>
<head>
    <title>Sign Up</title>
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
                                <li><a href="Conditions.php" >Conditions</a></li>
								<li class="page-scroll"><a href="ContactUs.php" >Contact Us</a></li>
								<li><a href="PatientSignUp.php" >Patient Sign Up</a></li>								
								<li class="active-join" class="page-scroll"><a href="login.php" >LOG IN</a></li>
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
                             <div id="errMsg" style="background-color: red; font-color: black"> <center>
            <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?>
               <?php unset($_SESSION['errMsg']); ?>
</center>
                </div>

                            <form method="post" class="signup-form">
                                <label style="float: left; font-size: 1.7em"><font color="#f98b68">Doctor Registration</font></label>
                                <br />
                                <br />

                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">User Name</label>
                                        <input type="text" placeholder="username" name="username" required/>

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Password</label>
                                        <input type="password" placeholder="password" name="password1" required />

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">First Name</label>
                                        <input type="text" placeholder="FirstName" name="Fname" required/>

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Last Name</label>
                                        <input type="text" placeholder="Last Name" name="Lname" required/>

                                    </div>

                                </div>

                                 <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label style="float: left">Gender</label>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label style="float: left">Date Of Birth</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-1">
                                        Male
                                        <input type="radio" name="gender" value="male" >
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-1">
                                        Female
                                        <input type="radio" name="gender" value="female">
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-1">
                                        Day<br />
                                        <select name='day' id='Select1'>
                                            <option value='1'>1</option>
                                            <option value='2'>2</option>
                                            <option value='3'>3</option>
                                            <option value='4'>4</option>
                                            <option value='5'>5</option>
                                            <option value='6'>6</option>
                                            <option value='7'>7</option>
                                            <option value='8'>8</option>
                                            <option value='9'>9</option>
                                            <option value='10'>10</option>
                                            <option value='11'>11</option>
                                            <option value='12'>12</option>
                                            <option value='13'>13</option>
                                            <option value='14'>14</option>
                                            <option value='15'>15</option>
                                            <option value='16'>16</option>
                                            <option value='17'>17</option>
                                            <option value='18'>18</option>
                                            <option value='19'>19</option>
                                            <option value='20'>20</option>
                                            <option value='21'>21</option>
                                            <option value='22'>22</option>
                                            <option value='23'>23</option>
                                            <option value='24'>24</option>
                                            <option value='25'>25</option>
                                            <option value='26'>26</option>
                                            <option value='27'>27</option>
                                            <option value='28'>28</option>
                                            <option value='29'>29</option>
                                            <option value='30'>30</option>
                                            <option value='31'>31</option>
                                        </select>

                                        <br />
                                        <br />
                                        <br />

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-1">
                                        Month<br />
                                        <select name='month' id='Select2'>
                                            <option value='1'>1</option>
                                            <option value='2'>2</option>
                                            <option value='3'>3</option>
                                            <option value='4'>4</option>
                                            <option value='5'>5</option>
                                            <option value='6'>6</option>
                                            <option value='7'>7</option>
                                            <option value='8'>8</option>
                                            <option value='9'>9</option>
                                            <option value='10'>10</option>
                                            <option value='11'>11</option>
                                            <option value='12'>12</option>
                                        </select>

                                        <br />
                                        <br />
                                        <br />
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-1">
                                        Year<br />

                                        <select name='year' id='Select3'>
                                            <option value='1947'>1947</option>
                                            <option value='1948'>1948</option>
                                            <option value='1949'>1949</option>
                                            <option value='1950'>1950</option>
                                            <option value='1951'>1951</option>
                                            <option value='1952'>1952</option>
                                            <option value='1953'>1953</option>
                                            <option value='1954'>1954</option>
                                            <option value='1955'>1955</option>
                                            <option value='1956'>1956</option>
                                            <option value='1957'>1957</option>
                                            <option value='1958'>1958</option>
                                            <option value='1959'>1959</option>
                                            <option value='1960'>1960</option>
                                            <option value='1961'>1961</option>
                                            <option value='1962'>1962</option>
                                            <option value='1963'>1963</option>
                                            <option value='1964'>1964</option>
                                            <option value='1965'>1965</option>
                                            <option value='1966'>1966</option>
                                            <option value='1967'>1967</option>
                                            <option value='1968'>1968</option>
                                            <option value='1969'>1969</option>
                                            <option value='1970'>1970</option>
                                            <option value='1971'>1971</option>
                                            <option value='1972'>1972</option>
                                            <option value='1973'>1973</option>
                                            <option value='1974'>1974</option>
                                            <option value='1975'>1975</option>
                                            <option value='1976'>1976</option>
                                            <option value='1977'>1977</option>
                                            <option value='1978'>1978</option>
                                            <option value='1979'>1979</option>
                                            <option value='1980'>1980</option>
                                            <option value='1981'>1981</option>
                                            <option value='1982'>1982</option>
                                            <option value='1983'>1983</option>
                                            <option value='1984'>1984</option>
                                            <option value='1985'>1985</option>
                                            <option value='1986'>1986</option>
                                            <option value='1987'>1987</option>
                                            <option value='1988'>1988</option>
                                            <option value='1989'>1989</option>
                                            <option value='1990'>1990</option>
                                            <option value='1991'>1991</option>
                                            <option value='1992'>1992</option>
                                            <option value='1993'>1993</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Address</label>
                                        <input type="text" placeholder="Address" name="Address" required/>

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">City</label>
                                        <input type="text" placeholder="City" name="City" required/>

                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">State</label>
                                        <input type="text" placeholder="State" name="State" required/>

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Contact</label>
                                        <input type="text" placeholder="Contact" name="Contact" required/>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Email</label>
                                        <input type="text" placeholder="Email" name="Email"/>

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Specialization</label>
                                        <input type="text" placeholder="Specialization" name="Specialization"/>

                                    </div>

                                </div>

                                  <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Qualification</label>
                                        <input type="text" placeholder="Qualification" name="Qualification"/>

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">

                                        <label style="float: left">Experience</label>
                                        <input type="text" placeholder="Experience" name="Experience"/>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <button type="submit">Create an Account</button>
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

</body>
</html>

