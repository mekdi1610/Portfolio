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

<body>

		
		<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
		<div class="container">
		<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
		<i class="icon-reorder shaded"></i>
		</a>

		<a class="brand" href="index.html">
		ERK MEAD
		</a>

		<div class="nav-collapse collapse navbar-inverse-collapse">

		<form class="navbar-search pull-left input-append" action="Diagnosis.php" method="post">
		<input type="text"  id="Code" name="Code" placeholder="Code" class="span3">
		<button class="btn" type="submit">

		<i class="icon-search"></i>
		</button>
		</form>


		</div><!-- /.nav-collapse -->
		</div>
		</div><!-- /navbar-inner -->
		</div><!-- /navbar -->



		<div class="wrapper">
		<div class="container">
		<div class="row">
		<div class="span3">
		<div class="sidebar">

		<ul class="widget widget-menu unstyled">
		<li class="active">
		<a href="Diagnosis.php">
		<i class="menu-icon icon-plus-sign"></i>
		Diagnosis
		</a>
		</li>
			<li>
		<a href="Followup.php">
		<i class="menu-icon icon-list-alt"></i>
		Follow Up
		</a>
		</li>
		<li>
		<a href="PatientHistoryChoice.php">
		<i class="menu-icon icon-folder-open"></i>
		Patient History
		</a>
		</li>

		</ul><!--/.widget-nav-->



		<ul class="widget widget-menu unstyled">
		<li>
		<a href="index.php">
		<i class="menu-icon icon-signout"></i>
		Logout
		</a>
		</li>
		</ul>

		</div><!--/.sidebar-->
		</div><!--/.span3-->


	<?php
	//Connect to Database to insert data
$connect_database=mysqli_connect("sql206.epizy.com","epiz_25600350","uEnvNJf3Iv1M0AM");

if(mysqli_select_db($connect_database,"epiz_25600350_erk")){
	
}
//Insert data
$sql="INSERT INTO FollowupNotes (Code, Dates, Goal, Issues, Assignment, Plan)
VALUES ('$_POST[Code]','$_POST[Dates]','$_POST[Goal]','$_POST[Issues]','$_POST[Assignment]','$_POST[Plan]')";

if (mysqli_query($connect_database,$sql))
{
	//display message data inserted if data is inserted in the database
	echo '<script>
	alert("Follow up inserted") 
	document.location = "Followup.php"
	</script>';
}
else{
	echo '<script>
	alert("Failed") 
	document.location = "Followup.php"
	</script>';
}
?>
</body>
</html>