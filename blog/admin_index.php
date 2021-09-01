<?php
if(!empty($_GET['message'])) {
    $message = $_GET['message'];
  if($message=='p'){
  	  	echo '<script language="javascript">';
		echo 'alert("The password or username you entered was not valid.")';
		echo '</script>';
  }elseif ($message=='l') {
  		echo '<script language="javascript">';
		echo 'alert("you must Login first!")';
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
		<div class="header"><h1>IDiscuss Discussion Forum Admin page</a></h1></div>
		<br>
		<br>
		<br>
		
	<div class="loginPage">
			<div class="form" padding: 45px; >
				<img src="img/login.png" class="avater" width="50px">
				<form class="registerForm" action="asignin.php" method="POST">
					
					<input style="color: black"; type="text" placeholder="User Name" name="usname" required />
					<input style="color: black"; type="password" placeholder="Password" name="pwd" required />
					<br>
					<br>
					<br>
					<button type="submit" name="login" value="login" >Log in</button>
					
				</form>

				


			</div>

		</div>
		
</body>
</html>
