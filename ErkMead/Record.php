<!DOCTYPE html>
<html lang="en">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
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

		<form class="navbar-search pull-left input-append" action="PatientHistory.php" method="post">
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


		<div class="span9">
		<div class="content">

		<div class="module">
		<div class="module-head">
		<h3>Forms</h3>
		</div>
		<div class="module-body">


		<br />
		<?php
		echo "<div class='module-body table'>";
		echo "<table class='table table-bordered'>";
		echo "<thead>";
		echo "<tr>";
		echo "<th>Catagory</th>";
		echo "<th>Description</th>";
		echo "</tr>";

		$con=mysqli_connect("sql206.epizy.com","epiz_25600350","uEnvNJf3Iv1M0AM");
		mysqli_select_db($con,"epiz_25600350_erk");
		error_reporting(0);
		$code=$_POST["Code"];
		$sql="SELECT Code,FirstName,FatherName,GrandFatherName,Gender,DateofBirth,Religion,MartialStatus,EducationalBackground,Region,NumberofChildren from patientinfo";
		$re=mysqli_query($con,$sql);
		echo "<tr>";
		echo "<th>Code</th>";
		while($row = mysqli_fetch_array($re)){
		$Code=$row['Code'];	
		echo "<td>$Code</td>";
		}

echo "</tr>";
$re=mysqli_query($con,$sql);
	echo "<tr>";
		echo "<th>Full Name</th>";
		while($row = mysqli_fetch_array($re)){
		$First=$row['FirstName'];
		$FatherName=$row['FatherName'];	
		$GF=$row['GrandFatherName'];
		$FN=$First.' '.$FatherName.' '.$GF;
		echo "<td>$FN</td>";
		}
echo "</tr>";

$re=mysqli_query($con,$sql);
	echo "<tr>";
		echo "<th>Gender</th>";
		while($row = mysqli_fetch_array($re)){
		$Gender=$row['Gender'];
		echo "<td>$Gender</td>";
		}
echo "</tr>";

		
		
		
		
		
		?>