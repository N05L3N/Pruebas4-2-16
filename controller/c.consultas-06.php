	window.onload = function(){
	/* Reporte de Status*/
			
	var ctxStatusTelemarketing = document.getElementById("chart-StatusTelemarketing").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketing).Pie(pieDataStatusTelemarketing);

	/* Reporte de Asignaciones*/
	
	/* Todos */
	
	var ctx2 = document.getElementById("chart-area2").getContext("2d");
	window.myPie = new Chart(ctx2).Pie(pieData2);
	
	/**/
};