<!DOCTYPE html>
<html lang="en">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Patient Information</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
<link href="code/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="code/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<link rel="stylesheet" href="css/fullcalendar.css">
</head>
<body  onload="Generate()">

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		ERK MEAD
			  	</a>

				
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
						
							<li>
								<a href="PatientInformation.html">
									<i class="menu-icon icon-folder-open"></i>
									Patient Information
								</a>
							</li>
							<li>
								<a href="selectable.php">
									<i class="menu-icon icon-time"></i>
									Appointment
									
								</a>
							</li>
							
						
						</ul><!--/.widget-nav-->

						

						<ul class="widget widget-menu unstyled">
							<li>
								<a href="#">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->

	<?php
	//Connect to Database to insert data
$connect_database=mysqli_connect("localhost","root","");

if(mysqli_select_db($connect_database,"erk mead")){
	
}
//Insert data
$sql="INSERT INTO patientinformation (RegistrationDate,Code,IDNO,FirstName,FatherName,GrandFatherName,Gender,DateofBirth,Religion,MartialStatus,EducationalBackground,Region,PhoneNumber,NumberofChildren)
VALUES ('$_POST[RD]','$_POST[code]','$_POST[id]','$_POST[FN]','$_POST[FTN]','$_POST[GFN]','$_POST[Gender]','$_POST[dob]','$_POST[Religon]','$_POST[MS]','$_POST[ED]','$_POST[Region]','$_POST[PN]','$_POST[NC]')";

if (mysqli_query($connect_database,$sql))
{
	//display message data inserted if data is inserted in the database
    echo "<h1><center>Data Inserted</center></h1>";
}
?>
</body>
</html>