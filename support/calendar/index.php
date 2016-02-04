<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="UTF-8">

	<link rel="stylesheet" href="components/bootstrap3/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/calendar.css">

</head>
<body>
<div class="container">

	<div class="row">
		<div class="col-md-1">
			<div class="pika"><h5></h5></div>
		</div>
		<div class="col-md-11">
		<div class="pull-right form-inline">
			<div class="btn-group">
				<button class="btn btn-xs btn-primary" data-calendar-nav="prev"><< Prev</button>
				<button class="btn btn-xs btn-default" data-calendar-nav="today">Today</button>
				<button class="btn btn-xs btn-primary" data-calendar-nav="next">Next >></button>
			</div>
			<div class="btn-group">
				<button class="btn btn-xs btn-success" data-calendar-view="year">Year</button>
				<button class="btn btn-xs btn-primary active" data-calendar-view="month">Month</button>
				<button class="btn btn-xs btn-danger" data-calendar-view="week">Week</button>
				<button class="btn btn-xs btn-info" data-calendar-view="day">Day</button>
			</div>
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div id="calendar"></div>
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="modal fade" id="events-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3 class="modal-title">Event</h3>
				</div>
				<div class="modal-body" style="height: 400px">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="components/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="components/underscore/underscore-min.js"></script>
	<script type="text/javascript" src="components/bootstrap3/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="components/jstimezonedetect/jstz.min.js"></script>
	<script type="text/javascript" src="js/language/es-MX.js"></script>
	<script type="text/javascript" src="js/calendar.js"></script>
	<script type="text/javascript" src="js/app.js"></script>

</div>

</body>
</html>