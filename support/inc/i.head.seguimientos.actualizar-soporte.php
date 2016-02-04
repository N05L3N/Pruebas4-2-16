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
        $( "#datepickerfechaventa" ).datepicker({ 
            minDate: '+0d', 
            buttonImage: 'img/icons/calendar.png',
            showOn: 'both',
            buttonImageOnly: true
        });
    });
    
</script>
<!-- Calendario -->


<script type="text/javascript" src="js/verificador-reporte-de-actividad.js"></script>
    <script type="text/javascript" src="js/wforms.js"></script>
    <script type="text/javascript">
        wFORMS.behaviors['validation'].errMsg_email = "Ingresar un e-mail valido";
        wFORMS.behaviors['validation'].errMsg_notification = "Total de errores detectados ='%%' \nPor favor, cheque la información suministrada."; // %% will be replaced by the actual number of errors
        wFORMS.behaviors['validation'].errMsg_integer = "Poner numero.";
        wFORMS.behaviors['validation'].errMsg_notification = "Total de errores detectados:(%%)\n Verifique los campos marcados:(----).\n Datos sugeridos: \n 1.- Correo@dominio.com.\n 2.- Lada: (Numeros) Tel: (Numeros)"; // %% will be replaced by the actual number of errors
    </script>    