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

		<form class="navbar-search pull-left input-append" action="Followup.php" method="post">
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
		$con=mysqli_connect("sql206.epizy.com","epiz_25600350","uEnvNJf3Iv1M0AM");
		mysqli_select_db($con,"epiz_25600350_erk");
		error_reporting(0);
		$code=$_POST["Code"];
		$sql="SELECT Code,FirstName,FatherName,Gender,DateofBirth,Religion,MartialStatus,EducationalBackground,Region,NumberofChildren from patientinfo WHERE Code='$code'";
		$re=mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($re)){
		$Code=$row['Code'];	
		$First=$row['FirstName'];
		$Last=$row['FatherName'];
		$Gender=$row['Gender'];
		$DOB=$row['DateofBirth'];	
		$Religion=$row['Religion'];
		$MS=$row['MartialStatus'];
		$EB=$row['EducationalBackground'];
		$Region=$row['Region'];
		$NOC=$row['NumberofChildren'];
		}


		$sql2="SELECT ChiefComplaint,MedicalHistory,History,Mood,Diagnosis,TreatmentPlan,PsychologistReflection,Assessment from treatment WHERE Code='$code'";
		$re2=mysqli_query($con,$sql2);
		while($row2 = mysqli_fetch_array($re2)){
		$CC=$row2['ChiefComplaint'];
		$MH=$row2['MedicalHistory'];
		$History=$row2['History'];
		$Mood=$row2['Mood'];
		$Diagnosis=$row2['Diagnosis'];
		$TP=$row2['TreatmentPlan'];
		$PR=$row2['PsychologistReflection'];	
		$Assessment=$row2['Assessment'];

		}

		$sql3="SELECT COUNT(Code) from followupnotes WHERE Code='$code'";
		$re3=mysqli_query($con,$sql3);
		while($row3 = mysqli_fetch_array($re3)){
		$SN=$row3[0]+1;

	}

		?>

		<?php
		
		echo "<div class='module-body table'>";
		echo "<table class='table table-bordered'>";
		echo "<thead>";
		echo "<tr>";
		echo "<th>Catagory</th>";
		echo "<th>Description</th>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Code</th>";
		echo "<td>$Code</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>First Name</th>";
		echo "<td>$First</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Father Name</th>";
		echo "<td>$Last</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Gender</th>";
		echo "<td>$Gender</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>DateofBirth</th>";
		echo "<td>$DOB</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Religion</th>";
		echo "<td>$Religion</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>MartialStatus</th>";
		echo "<td>$MS</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>EducationalBackground</th>";
		echo "<td>$EB</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Region</th>";
		echo "<td>$Region</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>NumberofChildren</th>";
		echo "<td>$NOC</td>";
		echo "</tr>";
		echo "</table";

		?>
		</div>
	</div>
	</div>
	<div class="control-group">
				<p>Chief Compliant</p>
				
				<div class="row-fluid">
				<textarea class="span12" style="height: 70px; resize: none;" name="CC"><?php echo $CC;?></textarea>
			
				</div>
				</div>

	<div class="control-group">
				<p>Medical History</p>
				
				<div class="row-fluid">
				<textarea class="span12" style="height: 70px; resize: none;" name="MH"><?php echo $MH;?></textarea>
			
				</div>
				</div>	

	<div class="control-group">
				<p>History</p>
				
				<div class="row-fluid">
				<textarea class="span12" style="height: 70px; resize: none;" name="History"><?php echo $History;?></textarea>
			
				</div>
				</div>

	<div class="control-group">
				<p>Mood</p>
				
				<div class="row-fluid">
				<textarea class="span12" style="height: 70px; resize: none;" name="Mood"><?php echo $Mood;?></textarea>
			
				</div>
				</div>


	<div class="control-group">
				<p>Diagnosis</p>
				
				<div class="row-fluid">
				<textarea class="span12" style="height: 70px; resize: none;" name="Diagnosis"><?php echo $Diagnosis;?></textarea>
			
				</div>
				</div>


	<div class="control-group">
				<p>Treatment Plan</p>
				
				<div class="row-fluid">
				<textarea class="span12" style="height: 70px; resize: none;" name="TP"><?php echo $TP;?></textarea>
			
				</div>
				</div>


	<div class="control-group">
				<p>Psychologist Reflection</p>
				
				<div class="row-fluid">
				<textarea class="span12" style="height: 70px; resize: none;" name="PR"><?php echo $PR;?></textarea>
			
				</div>
				</div>

				<div class="control-group">
				<p>Assessment</p>
				
				<div class="row-fluid">
				<textarea class="span12" style="height: 70px; resize: none;" name="Assessment"><?php echo $Assessment;?></textarea>
			
				</div>
				</div>
</div>
</div>
</div>
</div>

</body>
</html>