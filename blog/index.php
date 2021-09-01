<?php
if(!empty($_GET['message'])) {
    $message = $_GET['message'];
  if($message=='p'){
  	  	echo '<script language="javascript">';
		echo 'alert("The password you entered was not valid.")';
		echo '</script>';
  }elseif ($message=='u') {
  		echo '<script language="javascript">';
		echo 'alert("No account found with that username.")';
		echo '</script>';
  }
  elseif ($message == 'a') {
  	echo '<script language="javascript">';
		echo 'alert("sorry your account has been deactivated by adminstrator")';
		echo '</script>';
  }
  elseif ($message == 'l') {
  	echo '<script language="javascript">';
		echo 'alert("You must log in First!")';
		echo '</script>';
  }

    }
 ?>
<html>
<head><title>IDiscuss</title></head>
<link href="/forum-tutorial/styles/main.css" type="text/css" rel="stylesheet" />
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/blog.css" rel="stylesheet">

<body>
	<div class="pane">
		<br>
		<div class="header"><h1>Log into your account </a></h1></div>
        <div><h3>use this credentials<h3/></div>
        <p>School ID: 12345 <br>Username: test user </br> password: 12345<p/>
		<p style="margin-left: 898px">Not registered? <a href="Register.php" class=" btn btn-primary">Register Now </a></p>
		
	<div class="loginPage">
			<div class="form" padding: 45px; >
				<img src="img/login.png" class="avater" width="50px">
				<form class="registerForm" action="signin.php" method="POST">
					<input style="color: black"; type="text" placeholder="School ID" name="sclid" required />
					<input style="color: black"; type="text" placeholder="User Name" name="usname" required />
					<input style="color: black"; type="password" placeholder="Password" name="pwd" required />
					<br>
					<br>
					<br>
					<button style="color: black"; type="submit" name="login" value="login" >Log in</button>
					
				</form>

				


			</div>

		</div>
		
</body>
</html>
