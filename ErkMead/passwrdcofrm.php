<!DOCTYPE html>
<html lang="en">


<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
<link href="code/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="code/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<link rel="stylesheet" href="css/fullcalendar.css">
<?php
// Include config file
require_once 'config.php';
$query = "select Code from code ";
$result = mysqli_query($link, $query);
while ( $rows = mysqli_fetch_assoc($result)) {
	echo $rows['Code'];
$ccod= $rows['Code'];
}
	?>
<script>
var x = document.getElementById("form1");
x.addEventListener("blur", myBlurFunction, true);
y.addEventListener("disable",myfun,true);
function myBlurFunction() {
  var code=document.getElementById("code").value;
  var ccode='<?php echo $ccod; ?>'
  if (ccode==code) {
  	
  	document.getElementById("code").value="Matched!";
  	document.getElementById("code").disabled=true;
  	document.getElementById("ddd1").style.backgroundColor= "lightgreen";
  	document.getElementById("Passwrd1").disabled=false;
  	document.getElementById("Passwrd2").disabled=false;
  	document.getElementById("username").disabled=false;
  	document.getElementById("btn1").disabled=false;
  	
  }
  else{
  	document.getElementById("code").value="";
  	document.getElementById("code").placeholder="No Match! check your Code Again!!";
  	document.getElementById("ddd1").style.backgroundColor= "red";
  }

}
  function myfun()
  {
  	document.getElementById("Passwrd1").disabled=true;
  	document.getElementById("Passwrd2").disabled=true;
  	document.getElementById("username").disabled=true;
  	document.getElementById("btn1").disabled=true;

  }
</script>

</head>

<body onload="myfun()">

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
	</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->

<div class="span9" style="margin-left:350px; margin-top: 50px; ">
					<div class="content" style=" width: 750px;">
						<div class="module">
							<div class="module-head">
								<h3>Code Confirmation</h3>
							</div>
							<div class="module-body" >

<form id="form1" class="form-horizontal row-fluid" action="updater.php" method="post" style="height: 480px; background-color: #eee;">
										<div class="control-group" id="ddd1" >
											<label class="control-label" for="basicinput" style=" margin-left: 260px; font-size:20px; font-family:'Open Sans', Tahoma, Arial, sans-serif; ">Received Code</label>
											<div  class="controls" style="margin-top: 50px;">
												<input type="text" id="code" name="codeconfm" placeholder="Check Your E-Mail for the code" class="span8"  required onblur=" myBlurFunction()" >
												
											</div>
										</div>
										<div class="control-group" style="margin-top: 20px;">
											<label class="control-label" for="basicinput" style="margin-left: 240px; font-size: 20px;">User Name</label>
											<div class="controls" style="margin-top: 40px">
												<input type="text" id="username" name="usrname" placeholder="User Name" class="span8" required >
											</div>
										</div>

										<div class="control-group" style="margin-top: 20px;">
											<label class="control-label" for="basicinput" style="margin-left: 270px; font-size: 20px;">New Password</label>
											<div class="controls" style="margin-top: 40px">
												<input type="Password" id="Passwrd1" name="Password" placeholder="New Password" class="span8" required >
											</div>
										</div>

											<div class="control-group" style="margin-top: 30px;">

											<label class="control-label" for="basicinput" style="margin-left: 280px; font-size: 18px;" >Confirm Password</label>
											<div class="controls" style="margin-top: 40px">
												<input type="Password" id="Passwrd2" name="Confirm Password" placeholder="Password" class="span8" required >

											</div>
										</div>
										<div class="control-group" style="margin-top: 20px;">
										
											<button id="btn1" type="submit" class="btn-primary" style="height: 35px; width: 150px; margin-left: 280px;">Confirm</button>
										</div>

                                </div>
										</div>

</form>
</body>
</html>