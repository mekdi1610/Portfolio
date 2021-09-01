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
	</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->
<div class="span9" style="margin-left:350px; margin-top: 120px; ">
					<div class="content" style=" width: 750px;">

						<div class="module">
							<div class="module-head">
								<h3>Login</h3>
							</div>
							<div class="module-body" >

<form class="form-horizontal row-fluid" action="Login.php" method="post" style="height: 280px; background-color: #eee;">
										<div class="control-group" >
											<label class="control-label" for="basicinput" style=" margin-left: 200px; font-size:20px; font-family:'Open Sans', Tahoma, Arial, sans-serif; ">Username</label>
											<div class="controls" style="margin-top: 50px;">
												<input type="text" id="username" name="Username" placeholder="User Name" class="span8" value="<?php if(isset($_COOKIE['Username'])) echo $_COOKIE['Username']; ?>" required>
												
											</div>
										</div>
										<div class="control-group" style="margin-top: 20px;">
											<label class="control-label" for="basicinput" style="margin-left: 200px; font-size: 20px;">Password</label>
											<div class="controls" style="margin-top: 40px">
												<input type="Password" id="Password" name="Password" placeholder="Password" class="span8" value="<?php if(isset($_COOKIE['Password'])) echo $_COOKIE['Password']; ?>" required>
												<div style="margin-left: 420px;">
												<input name="remember" id="remember" type="checkbox" <?php if(isset($_COOKIE['Username'])){echo "checked='checked'"; } ?>  value="1" >

                                    				<label for="remember">
                                        				Remember Me
												</label>
												</div>

											</div>

										

										
											<button type="submit" class="btn-primary" style="width: 150px; margin-left: 250px;">Login</button>
												<div  style="margin-top: 5px; margin-left: 600px;" >
													<a href="sndemail.php">Forgot Password?</a>
												</div>
												
											
										
                                </div>
										</div>

</form>
</body>
</html>