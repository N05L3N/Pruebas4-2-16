		var pieDataStatusTelemarketing = [
		{
			value: <?= $total_correosT ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_descartadosT ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
		{
			value: <?= $total_facturadosT ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_llamadasT ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreosT ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Correos y Llamadas"
		}
	];

	var pieData2 = [
		{
			value: <?= $consultas_numero_asignacionesHoy ?>,
			color:"#5bc0de",
			highlight: "#5bc0de",
			label: "Hoy"
		},
		{
			value: <?= $consultas_numero_asignacionesTotal ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Total"
		},
		{
			value: <?= $consultas_numero_sinAsignacionesTotal ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Sin Asignaciones"
		},
		{
			value: <?= $consultas_numero_pendientes ?>,
			color: "#d9534f",
			highlight: "#d9534f",
			label: "Atrasados"
		}
	];	