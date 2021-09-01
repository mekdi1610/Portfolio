<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<?php
// Include config file
$con=mysqli_connect("sql206.epizy.com","epiz_25600350","uEnvNJf3Iv1M0AM");
mysqli_select_db($con,"epiz_25600350_erk");
$query = "Select Code,Name,CounselorName,DATET,Service,StartTime,EndTime from appointment ";
$result = mysqli_query($con, $query);
$C=[];
$NM=[];
$da = [];
$ST= [];
$CN=[];
$ET= [];
$ser = [];
while ( $rows = mysqli_fetch_assoc($result)) {
	
	//echo $rows['datet'],'<br>';
	$Code=$rows['Code'];
	$Name=$rows['Name'];
	$Counselor=$rows['CounselorName'];
	$dat= $rows['DATET'];
	$serv= $rows['Service'];
	$STs= $rows['StartTime'];
	$ETs= $rows['EndTime'];
	//echo $RTs."<br>";
	array_push($C, $Code);
	array_push($NM, $Name);
	array_push($CN, $Counselor);
	array_push($da, $dat);
	array_push($ser, $serv);
	array_push($ST, $STs);
	array_push($ET, $ETs);
	
	$x=count($da);
	$y=count($C);
	$z=count($ST);


	
	
}
//echo $x,'<br>';
//echo $y,'<br>';
//echo $z,'<br>';
//$timm=strtotime($RTs[1]);
//$datt=strtotime($da[8]);
//$mont=date("Y",$timm);
//echo $mont;

?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ERK MAED</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
<link rel='stylesheet' type='text/css' href='fullcalendar.css'>
<link rel='stylesheet' type='text/css' href='New.css' />
<link rel='stylesheet' type='text/css' href='fullcalendar.print.css' media='print' />
<script type='text/javascript' src='jquery-1.8.1.min.js'></script>
<script type='text/javascript' src='jquery-ui-1.8.23.custom.min.js'></script>
<script type='text/javascript' src='fullcalendar.min.js'></script>
<script type='text/javascript'>

$(document).ready(function() {
	
	var date = new Date();
	var d = date.getDate();
	var m = date.getMonth();
	var y = date.getFullYear();

	var calendar = $('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		selectable: true,
		selectHelper: true,
		select: function(start, end, allDay) {
			var title = prompt('Event Title:');
			//alert(title);
			var ex=document.getElementById("Description");
			ex.value=title;
			if (title) {
				calendar.fullCalendar('renderEvent',
					{
						title: title,
						start: start,
						end: end,
						allDay: allDay
					},
					true // make the event "stick"
				);

				//alert(start);
				var AP=document.getElementById("AP");
				var years=start.toLocaleDateString().replace(/\//g, "-");
				var year=start.getFullYear();
				var month=start.getMonth();
				var day=start.getDate();
			AP.value=year+"-"+(month+1)+"-"+day;

		


			var startT=document.getElementById("startT");
			var hr=start.getHours();
			var min=start.getMinutes();
			var sec=start.getSeconds();
			startT.value=hr+":"+min+":"+sec;
			//alert(end);

			var EndT=document.getElementById("EndT");
			var hre=end.getHours();
			var mine=end.getMinutes();
			var sece=end.getSeconds();
			EndT.value=hre+":"+mine+":"+sece;
			}

			calendar.fullCalendar('unselect');
		},
		editable: true,
			
		events: [

			{
				title: '<?php echo $dat?>',
				start:  new Date(y, m, d)
			}

		]
		
	});

'<?php for ($a=0; $a<$y ; $a++): ?>'
'<?php $timm=strtotime($da[$a]);
  $yer=date("Y",$timm);
	$mo=date("m",$timm)-1;
	$dte=date("d",$timm);
   $STT=strtotime($ST[$a]);
	 $H=date("H",$STT);
	$M=date("i",$STT);
	 $S=date("s",$STT);
   $ETT=strtotime($ET[$a]);
	 $He=date("H",$ETT);
	$Me=date("i",$ETT);
	 $Se=date("s",$ETT); 
	
	  ?>'
 calendar.fullCalendar('renderEvent',
					{
						title:  '<?php echo "Code: ".$C[$a].'\n'."Name: ".$NM[$a]." ".'\n'."Counselor:".$CN[$a]; ?>',


						start: new Date('<?php echo $yer ?>','<?php echo $mo ?>' , '<?php echo $dte ?>', '<?php echo $H ?>', '<?php echo $M ?>', '<?php echo $S ?>'),
						end: new Date('<?php echo $yer ?>','<?php echo $mo ?>' , '<?php echo $dte ?>', '<?php echo $He ?>', '<?php echo $Me ?>', '<?php echo $Se ?>'),
					
						allDay: false
						
					},
					true
				);

'<?php endfor?> '


	
});
</script>



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
<?php
		error_reporting(0);
$Codes=$_POST["Codes"];
$con2=mysqli_connect("localhost","root","");
mysqli_select_db($con2,"erk mead");
$sql2 = "SELECT Code,FirstName,FatherName,GrandFatherName from PatientInfo where Code='$Codes'";
$re2=mysqli_query($con2,$sql2);
		while($row2 = mysqli_fetch_array($re2)){
		$Code=$row2['Code'];	
		$First=$row2['FirstName'];
		$FTN=$row2['FatherName'];
		$GFN=$row2['GrandFatherName'];
		$FullName=$First. ' ' .$FTN. ' '.$GFN;

	}
	
	?>
		<form action="selectable.php" method="post">
		<input type="text"  id="Code" name="Codes" placeholder="Code" class="span3" value='<?php echo $Code;?>'>
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
								<h3>New Appointment</h3>
							</div>

							<div class="panel-body">
              

							<div class="module-body" >
		<form action="AppointmentSave.php" method="post">
						   <div class="form-group">
                            <label >Patient Code</label>
                           <input type="text" id="Code" name="Code" placeholder="Code" value='<?php echo $Code;?>' class="span8">
                          </div>
        	<div class="form-group">
				<label class="form-control" for="basicinput">Full Name</label>
				
					<input type="text" id="First" name="FN" placeholder="Code" value='<?php echo $FullName;?>' class="span8">
				
			</div>
		 <div class="form-group">
									<label class="form-label" for="basicinput">Counselor Name</label>
											<div class="controls">
												<select tabindex="1"  name="CN" data-placeholder="Select here.." >
													<option value="">Select Counselor Name Here...</option>
														<option value="Endalek">Endalek</option>
														<option value="Seni">Seni</option>
														<option value="Peter">Peter</option>
											</select>

                          <div class="form-group">
									<label class="form-label" for="basicinput">Service Type</label>
											<div class="controls">
												<select tabindex="1"  name="ST" data-placeholder="Select here.." >
													<option value="">Select service type here...</option>

													
													<optgroup value="Category 2" label="Conseling">
														<option value="Individual Therapy|Conseling">Individual Therapy</option>
														<option value="Couple Therapy|Conseling">Couple Therapy</option>
														
													</optgroup>
													<optgroup value="Category 2" label="Other">
														<option value="ForCall|Other">ForCall</option>
														<option value="ForRadio|Other">For Radio</option>
														<option value="LegalCase|Other">Legal Case</option>
														

													</optgroup>
													<optgoup value="Referral Support System"><option value="Referral Support System">Referral Support System</option></optgoup>

												
												</select>
											</div>
										</div>

						<div class="form-group">
                            <label >Appointment Date</label>
                            <input type="text" class="form-control"  placeholder="AP" id="AP" name="AP">
                          </div>

                          <div class="form-group">
                            <label >Start Time</label>
                            <input type="text" class="form-control"  placeholder="StartTime" id="startT" name="startT">
                          </div>


                          <div class="form-group">
                            <label >End Time</label>
                            <input type="text" class="form-control"  placeholder="EndTime" id="EndT" name="EndT">
                          </div>

							<div class="form-group">
                            <label >Description</label>
                            <input type="text" class="form-control"  placeholder="Description" id="Description" name="Description">
                          </div>

                       
                  
                        <div class="form-group">
                        <label class="control-label col-sm-4">Appointment Date</label>
                    </div>
                    	<div id="calendar"></div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
                </form>
							
						</div>

						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
<div class="footer">
		<div class="container" style="margin-left: 680px;">
			 

		</div-->


	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
</html>
