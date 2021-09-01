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
		<a href="index.html">
		<i class="menu-icon icon-dashboard"></i>
		Diagnosis
		</a>
		</li>
		<li>
		<a href="Followup.php">
		<i class="menu-icon icon-bullhorn"></i>
		Follow Up
		</a>
		</li>
		<li>
		<a href="PatientInformation.html">
		<i class="menu-icon icon-bullhorn"></i>
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

		

		<br />

		<?php
		$con=mysqli_connect("sql206.epizy.com","epiz_25600350","uEnvNJf3Iv1M0AM");
		mysqli_select_db($con,"epiz_25600350_erk");
		error_reporting(0);
		
		$sql="SELECT MAX(cid),Code from recent";
		$re=mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($re)){
		$Code=$row['Code'];
		}	
		$sql2="SELECT Dates,Goal,Issues,Assignment,Plan from FollowupNotes WHERE Code='$Code'";
		$re2=mysqli_query($con,$sql2);
		while($row2 = mysqli_fetch_array($re2)){
		$Dates=$row2['Dates'];
		$Goal=$row2['Goal'];
		$Issues=$row2['Issues'];
		$Assignment=$row2['Assignment'];
		$Plan=$row2['Plan'];
	}

		$sql3="SELECT COUNT(Code) from followupnotes WHERE Code='$Code'";
		$re3=mysqli_query($con,$sql3);
		while($row3 = mysqli_fetch_array($re3)){
		$Session=$row3[0];

	}

		?>
				<div class="module">
				<div class="module-head">
				<h3>Previous Session Notes</h3>
				</div>
				<div class="module-body">
				<br />

				<form class="form-horizontal row-fluid" action="FollowupSave.php" method="post">


				<!--Auto generated-->
				<div class="control-group">
				<label class="control-label" for="basicinput">Code</label>
				<div class="controls">
				<input type="text" id="Code" name="Code" placeholder="Code" value='<?php echo $Code;?>' class="span8">

				</div>
				</div>
		<div class="control-group">
		<label class="control-label" for="basicinput">Session</label>
		<div class="controls">
			<input type="text" id="Session" name="Session" placeholder="" value='<?php echo $Session;?>' class="span8">
			
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="basicinput">Date</label>
		<div class="controls">
			<input type="text" id="RD" name="Dates" placeholder="" class="span8" value='<?php echo $Dates;?>'>
			
		</div>
	</div>

		<div class="control-group">
		<label class="control-label" for="basicinput">Goal of the Session</label>
		<div class="controls">
			<input type="text" id="Goal" name="Goal" placeholder="" value='<?php echo $Goal;?>' class="span8">
			
		</div>
	</div>

	<div class="control-group">
				<p>Issues of the Session</p>
				
				<div class="row-fluid">
				<textarea class="span12" style="height: 70px; resize: none;" name="Issues"><?php echo $Issues;?></textarea>
			</div>
				
				</div>
	<div class="control-group">
		<label class="control-label" for="basicinput">Assignment to the Next Session</label>
		<div class="controls">
			<input type="text" id="Assignment" name="Assignment" placeholder="" value='<?php echo $Assignment;?>' class="span8">
			
		</div>
	</div>

		<div class="control-group">
		<label class="control-label" for="basicinput">Plan for Next Session</label>
		<div class="controls">
			<input type="text" id="Plan" name="Plan" placeholder="" value='<?php echo $Plan;?>' class="span8">
			
		</div>
	</div>

</form>
</div>
</div>
</div>
</div>
</div>
</div>
	<script src="PatientInformation.js" type="text/javascript"></script>
	<script src="PreviousSession.js" type="text/javascript"></script>
	<script src="scripts/jquery-1.9.1.min.js"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
