<?php
session_start();
// Connect to the database
$con = mysql_connect("localhost","root","rootroot");

// Make sure we connected successfully
if(!$con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("OTC",$con);
 $id = $_GET["patient_id"];
 $docId = $_SESSION['newsession'];
$query = "SELECT Medications,Procedures,Immunizations,Allergies FROM healthrecord WHERE PatientId=$id AND DoctorId=$docId";

$res= mysql_query($query) or die ('Error updating database: '.mysql_error()); 
$row = mysql_fetch_array($res);
$medication=$row["Medications"];
$procedure=$row["Procedures"];
$imm=$row["Immunizations"];
$allergy=$row["Allergies"];

$_SESSION['patientId'] = $id;


 if($_SERVER["REQUEST_METHOD"] == "POST") {
// Grab User submitted information
$medication = $_POST["medication"];
$procedure = $_POST["procedure"];
$imm = $_POST["imm"];
$allergy = $_POST["allergy"];
$patientId = $_SESSION['patientId'];
$docId = $_SESSION['newsession'];
// Connect to the database
$con = mysql_connect("localhost","root","rootroot");

// Make sure we connected successfully
if(!$con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("OTC",$con);

$query = "SELECT PatientID,DoctorId,Medications,Procedures,Immunizations,Allergies FROM healthrecord WHERE PatientID = '$patientId'";

if(mysql_query($query)){
	$query = "UPDATE healthrecord SET Allergies='$allergy',Procedures='$procedure',Immunizations='$medication',Medications='$medication' WHERE PatientId=$patientId AND DoctorId=$docId ";

}else{
$query = "INSERT INTO `healthrecord`
(`Allergies`,`Medications`,`PatientId`,`DoctorId`,`Procedures`,`Immunizations`)
VALUES ('$allergy','$medication',$patientId,$docId,'$procedure','$medication')";
}



$res= mysql_query($query) or die ('Error updating database: '.mysql_error()); 

if($res)

echo "<script> window.location.assign('Patientslist.php'); </script>";


}


?>




<!DOCTYPE HTML>
<html>
<head>
    <title>Medical History</title>
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
                             <li><a href="PatientProfile.php" style="width: 211.6px; height: 61.6px;">My Profile</a></li>
                                <li><a href="ChooseDoctor.php" >Doctors</a></li>
								<li class="page-scroll"><a href="Appointment.php">my appointments</a></li>
								<li><a href="PatientHistory.php" > My Record</a></li>								
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
                            <form class="signup-form" method="POST">
                                <label style="float: left; font-size: 1.7em"> <font color="#f98b68">My History </font></label>
                                <br />
                                <br />

                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-12">

                                        <label style="float: left">Medications</label>
                                       

                                    </div>
                                    

                                </div>


                                <div class="row">
                                     <div class="col-xs-12 col-sm-6 col-md-12">
									 <input type="text" value ="<?= $medication?>" placeholder="medication" name="medication" />
                                         </div>
                                </div>

                               <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-12">

                                        <label style="float: left">Procedures</label>
                                       

                                    </div>
                                    

                                </div>

                                <div class="row">
                                     <div class="col-xs-12 col-sm-6 col-md-12">
                                         <input type="text" value ="<?= $procedure?>" placeholder="medication" name="procedure" />
                                         </div>
                                </div>

                                 <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-12">

                                        <label style="float: left">Immunizations</label>
                                       

                                    </div>
                                    

                                </div>

                                <div class="row">
                                     <div class="col-xs-12 col-sm-6 col-md-12">
									 <input type="text" value ="<?= $imm?>" placeholder="imm" name="imm" />
                                         </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-12">

                                        <label style="float: left">Allergies</label>
                                       

                                    </div>
                                    

                                </div>

                                <div class="row">
                                     <div class="col-xs-12 col-sm-6 col-md-12">
									 									 <input type="text" value ="<?= $allergy?>" placeholder="allergy" name="allergy" />

                                         </div>
                                </div>
                                                              <br /><br />
                                       <div class="row">
                                     <div class="col-xs-12 col-sm-6 col-md-4">
                                          <button type="submit">Update Records</button>
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

            font-size:1.21em;
        }
    </style>
</body>
</html>

