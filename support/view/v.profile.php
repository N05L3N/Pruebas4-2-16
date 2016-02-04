<style>
#buyers{
	background:#fff;
	padding: 5px;
	border-radius: 20px;
}
.off {
	display: none;
}

.on {
	display: block;
}
</style>


<div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <canvas id="buyers" width="400" height="200" data-on-off="hola"></canvas>
            <br>
            <button type="button" class="btn btn-danger btn-sm" data-off="hola" data-on-off="hola">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar
            </button>
        </div>
</div>


<script>

		$('[data-off], [data-on]').on('click', offOn);

		function offOn (dataOnOff) {

			var	dataOff    = dataOnOff.currentTarget.dataset.off,
				dataOn     = dataOnOff.currentTarget.dataset.on,
				dataOffTag = $('[data-on-off="' + dataOff + '"'),
				dataOnTag  = $('[data-on-off="' + dataOn + '"');

			if (dataOnTag.hasClass('on')) {
				dataOnTag.removeClass('on');
			} else{
				dataOnTag.addClass('on');
			};

			if (dataOffTag.hasClass('off')) {
				dataOffTag.removeClass('off');
			} else{
				dataOffTag.addClass('off');
			};

		}
		
	</script>
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
<!-- <script src="http://www.chartjs.org/assets/Chart.min.js"></script> -->
<script src="js/Chart.min.js"></script>

<!--
<script>
	Chart.defaults.global = {
    // Boolean - Whether to animate the chart
    animation: true,

    // Number - Number of animation steps
    animationSteps: <?= $numero_asignacionesTotal ?>,

    // String - Animation easing effect
    animationEasing: "easeOutQuart",

    // Boolean - If we should show the scale at all
    showScale: true,

    // Boolean - If we want to override with a hard coded scale
    scaleOverride: false,

    // ** Required if scaleOverride is true **
    // Number - The number of steps in a hard coded scale
    scaleSteps: null,
    // Number - The value jump in the hard coded scale
    scaleStepWidth: null,
    // Number - The scale starting value
    scaleStartValue: null,

    // String - Colour of the scale line
    scaleLineColor: "rgba(0,0,0,.1)",

    // Number - Pixel width of the scale line
    scaleLineWidth: 1,

    // Boolean - Whether to show labels on the scale
    scaleShowLabels: true,

    // Interpolated JS string - can access value
    scaleLabel: "<%=value%>",

    // Boolean - Whether the scale should stick to integers, not floats even if drawing space is there
    scaleIntegersOnly: true,

    // Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
    scaleBeginAtZero: false,

    // String - Scale label font declaration for the scale label
    scaleFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",

    // Number - Scale label font size in pixels
    scaleFontSize: 14,

    // String - Scale label font weight style
    scaleFontStyle: "normal",

    // String - Scale label font colour
    scaleFontColor: "#ffffff",

    // Boolean - whether or not the chart should be responsive and resize when the browser does.
    responsive: true,

    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio: true,

    // Boolean - Determines whether to draw tooltips on the canvas or not
    showTooltips: true,

    // Array - Array of string names to attach tooltip events
    tooltipEvents: ["mousemove", "touchstart", "touchmove"],

    // String - Tooltip background colour
    tooltipFillColor: "rgba(35,44,84,0.9)",

    // String - Tooltip label font declaration for the scale label
    tooltipFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",

    // Number - Tooltip label font size in pixels
    tooltipFontSize: 14,

    // String - Tooltip font weight style
    tooltipFontStyle: "normal",

    // String - Tooltip label font colour
    tooltipFontColor: "#fff",

    // String - Tooltip title font declaration for the scale label
    tooltipTitleFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",

    // Number - Tooltip title font size in pixels
    tooltipTitleFontSize: 14,

    // String - Tooltip title font weight style
    tooltipTitleFontStyle: "bold",

    // String - Tooltip title font colour
    tooltipTitleFontColor: "#fff",

    // Number - pixel width of padding around tooltip text
    tooltipYPadding: 6,

    // Number - pixel width of padding around tooltip text
    tooltipXPadding: 6,

    // Number - Size of the caret on the tooltip
    tooltipCaretSize: 8,

    // Number - Pixel radius of the tooltip border
    tooltipCornerRadius: 6,

    // Number - Pixel offset from point x to tooltip edge
    tooltipXOffset: 10,

    // String - Template string for single tooltips
    tooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %> m³",

    // String - Template string for single tooltips
    multiTooltipTemplate: "<%= value %>",

    // Function - Will fire on animation progression.
    onAnimationProgress: function(){},

    // Function - Will fire on animation completion.
    onAnimationComplete: function(){}
}

var buyerData = {
	labels : ["Asignaciones","Atrasados"],
	datasets : [
		{
       label: "Caudal",
			fillColor : "rgba(64,80,161,0.5)",
			strokeColor : "#ffffff",
			pointColor : "#323e78",
			pointStrokeColor : "#ffffff",
       pointHighlightFill: "#ffffff",
       responsive: true,
			data : [<?= $numero_asignacionesTotal ?>,<?= $numero_pendientes ?>]
		}
	]
}

var buyers = document.getElementById('buyers').getContext('2d');
new Chart(buyers).Line(buyerData);
-->

<!--
<script>
var buyerData = {
    labels: ["Total"],
    datasets: [
        {
            label: "100",
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "rgba(220,220,220,0.8)",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",
            data: [<?= $numero_asignacionesTotal ?>]
        },
        {
            label: "200",
            fillColor: "rgba(151,187,205,0.5)",
            strokeColor: "rgba(151,187,205,0.8)",
            highlightFill: "rgba(151,187,205,0.75)",
            highlightStroke: "rgba(151,187,205,1)",
           data: [<?= $numero_pendientes ?>]
        }
    ]
};

var options = {
    //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
    scaleBeginAtZero : true,

    //Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines : true,

    //String - Colour of the grid lines
    scaleGridLineColor : "rgba(0,0,0,.05)",

    //Number - Width of the grid lines
    scaleGridLineWidth : 1,

    //Boolean - If there is a stroke on each bar
    barShowStroke : true,

    //Number - Pixel width of the bar stroke
    barStrokeWidth : 2,

    //Number - Spacing between each of the X value sets
    barValueSpacing : 5,

    //Number - Spacing between data sets within X values
    barDatasetSpacing : 1,

    //String - A legend template
    legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"
};
var buyers = document.getElementById('buyers').getContext('2d');
new Chart(buyers).Bar(buyerData, {
    barShowStroke: false
});
</script>
-->
<script>

var buyerData = [
    {
        value: <?= $numero_asignacionesHoy ?>,
        color:"#5cb85c",
        highlight: "#5cb851",
        label: "Hoy"
    },
    {
        value: <?= $numero_asignacionesTotal ?>,
        color: "#428bca",
        highlight: "#428bc1",
        label: "Asignaciones"
    },
    {
        value: <?= $numero_pendientes ?>,
        color: "#d9534f",
        highlight: "#d9534f",
        label: "Atrasados"
    }
]

var options = {
    //Boolean - Whether we should show a stroke on each segment
    segmentShowStroke : true,

    //String - The colour of each segment stroke
    segmentStrokeColor : "#fff",

    //Number - The width of each segment stroke
    segmentStrokeWidth : 2,

    //Number - The percentage of the chart that we cut out of the middle
    percentageInnerCutout : 50, // This is 0 for Pie charts

    //Number - Amount of animation steps
    animationSteps : 100,

    //String - Animation easing effect
    animationEasing : "easeOutBounce",

    //Boolean - Whether we animate the rotation of the Doughnut
    animateRotate : true,

    //Boolean - Whether we animate scaling the Doughnut from the centre
    animateScale : false,

    //String - A legend template
    legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"

}

var buyers = document.getElementById('buyers').getContext('2d');
new Chart(buyers).Doughnut(buyerData, {
    animateScale: true
});

</script>