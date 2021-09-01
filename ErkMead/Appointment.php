<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
	<link rel='stylesheet' type='text/css' href='fullcalendar.css' />
	<link rel='stylesheet' type='text/css' href='fullcalendar.print.css' media='print' />
	<link rel="stylesheet" type="text/css" href="New.css">
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
		<div class="module-body">

		<div class="control-group">
		<label class="control-label" for="basicinput">Code</label>
		<div class="controls">
			<input type="text" id="Code" name="Code" placeholder="">
			
		</div>
	</div>
		<div class="control-group">
				<label class="control-label" for="basicinput">Full Name</label>
				<div class="controls">
					<input type="text" id="basicinput" placeholder="" disabled>
				</div>
			</div>


										<div class="control-group">
											<label class="control-label" for="basicinput">Service Type</label>
											<div class="controls">
												<select tabindex="1"  name="ST" data-placeholder="Select here.." >
													<option value="">Select here..</option>

													<optgroup value="Category 2" label="Psycho-Education Program">
														<option value="Parenting|Psycho-Education Program">Parenting</option>
														<option value="Budgeting|Psycho-Education Program">Budgeting</option>
														<option value="Relationship & Communication|Psycho-Education Program">Relationship & Communication</option>
														<option value="Sexual Problem|Psycho-Education Program">Sexual Problem</option>
														
													</optgroup>
													<optgroup value="Category 2" label="Conseling">
														<option value="Individual Therapy|Conseling">Individual Therapy</option>
														<option value="Couple Therapy|Conseling">Couple Therapy</option>
														<option value="Stress|Conseling">Stress</option>
														<option value="Depression|Conseling">Depression</option>
														<option value="Anxiety|Conseling">Anxiety</option>
														<option value="Divorce|Conseling">Divorce</option>
														<option value="Parenting|Conseling">Parenting</option>
														<option value="Education|Conseling">Education</option>
														<option value="Marital|Conseling">Marital</option>
													</optgroup>
													<optgroup value="Category 2" label="Mediation">
														<option value="Marital Conflict|Mediation">Marital Conflict</option>
														<option value="Extended Family Involvment|Mediation">Extended Family Involvment</option>
														

													</optgroup>
													<optgoup value="Referral Support System"><option value="Referral Support System">Referral Support System</option></optgoup>

												
												</select>
											</div>
										</div>

		<div class="control-group">
				<p>Description</p>
				
				<div class="row-fluid">
				<textarea class="span12" style="height: 70px; resize: none;" name="Description"></textarea>
			
				</div>
				</div>
		<div id='calendar'></div>

										
	</div>
	<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn btn-large btn-primary">Create Appointment</button>
											</div>
										</div>
</div>
</div>
</div>
</div>
</div>
</div>
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
				}
				calendar.fullCalendar('unselect');
			},
			editable: true,
			events: [
				{
					title: 'All Day Event',
					start: new Date(y, m, 1)
				},
				{
					title: 'Long Event',
					start: new Date(y, m, d-5),
					end: new Date(y, m, d-2)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d-3, 16, 0),
					allDay: false
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d+4, 16, 0),
					allDay: false
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					allDay: false
				},
				{
					title: 'hewk',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'http://google.com/'
				}
			]
		});
		
	});

</script>
</body>
</html>