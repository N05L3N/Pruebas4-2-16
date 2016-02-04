<!-- History -->
<link href="dashboard.css" rel="stylesheet">

<!-- Calendario -->
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>
<script type="text/javascript">

	$(function(){
		$( "#datepicker" ).datepicker({ 
			maxDate: '+0d', 
			buttonImage: 'img/icons/calendar.png',
			showOn: 'both',
			buttonImageOnly: true
		});
	});

	$(function(){
		$( "#datepickerDesde" ).datepicker({ 
			maxDate: '+0d', 
			buttonImage: 'img/icons/calendar.png',
			showOn: 'both',
			buttonImageOnly: true
		});
	});

	$(function(){
		$( "#datepickerHasta" ).datepicker({ 
			maxDate: '+0d', 
			buttonImage: 'img/icons/calendar.png',
	            	showOn: 'both',
            		buttonImageOnly: true
        	});
    	});
    
</script>
<!-- Calendario -->