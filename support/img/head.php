<?php
# Configuración de base de datos para la paginación
include('controller/databases.php');


$per_page = 10;

#getting number of rows and calculating no of pages
#$sql = "select * from maat.cliente_basico";
$sql = "select * from contacto";
$rsd = mysql_query($sql);
$count = mysql_num_rows($rsd);
$pages = ceil($count/$per_page);

# echo $id_view;
?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

	<title><?= ''.$mt_title.'-'.$_SESSION['titleMensaje'].''?><?= '('.$id_view.')' ?></title>
    
    <!-- Pagination -->
    <link href="css/pagination.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">

<!-- -->
<!--
<script language="Javascript">
   document.oncontextmenu = function() {
      return false
   }
   function right(e) {
      var msg = "_";
      if (navigator.appName == 'Netscape' && e.which == 3) {
         alert(msg);
         return false;
      }
      else if (navigator.appName == 'Microsoft Internet Explorer' && event.button==2) {
         alert(msg);
                        
      return false;
      }
   return true;
}
document.onmousedown = right;
</script>}-->
<!-- -->


    <!-- Custom styles for this template -->
	
<?php
    
    if ($id_view == 'login') {
        echo '<link href="signin.css" rel="stylesheet">';
    }

    else if ($id_view == 'usuarios') {
    ?>
    <link href="dashboard.css" rel="stylesheet">
    <?php
    }

    else if ($id_view == 'cliente') {
    ?>
        <link href="dashboard.css" rel="stylesheet">
        <script type="text/javascript" src="js/verificador-cliente.js"></script>
        
    <?php
    
    }

    else if ($id_view == 'seguimientos.actualizar-venta') {
?>

<link href="dashboard.css" rel="stylesheet">

<!-- Calendario -->
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>
<script type="text/javascript">
    $(function(){
            $( "#datepicker" ).datepicker({ minDate: '+0d' });
        });        
</script>
<!-- Calendario -->


<script type="text/javascript" src="js/verificador-cliente.js"></script>
    <script type="text/javascript" src="js/wforms.js"></script>
    <script type="text/javascript">
        wFORMS.behaviors['validation'].errMsg_email = "Ingresar un e-mail valido";
        wFORMS.behaviors['validation'].errMsg_notification = "Total de errores detectados ='%%' \nPor favor, cheque la información suministrada."; // %% will be replaced by the actual number of errors
        wFORMS.behaviors['validation'].errMsg_integer = "Poner numero.";
        wFORMS.behaviors['validation'].errMsg_notification = "Total de errores detectados:(%%)\n Verifique los campos marcados:(----).\n Datos sugeridos: \n 1.- Correo@dominio.com.\n 2.- Lada: (Numeros) Tel: (Numeros)"; // %% will be replaced by the actual number of errors
    </script>    
<?php
    }

    else if ($id_view == 'diary' OR $id_view == 'asignaciones' OR $id_view == 'late') {
        
        

?>

    <!-- Paginación -->
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>

    <script type="text/javascript">
    
    $(document).ready(function(){
        
    //Display Loading Image
    function Display_Load()
    {
        $("#loading").fadeIn(900,0);
        $("#loading").html("<img src='bigLoader.gif' />");
    }
    //Hide Loading Image
    function Hide_Load()
    {
        $("#loading").fadeOut('slow');
    };
    

   //Default Starting Page Results
   
    $("#pagination li:first").css({'color' : '#FF0084'}).css({'border' : 'none'});
    
    Display_Load();
    
    $("#content").load("pagination_data.php?page=1", Hide_Load());



    //Pagination Click
    $("#pagination li").click(function(){
            
        Display_Load();
        
        //CSS Styles
        $("#pagination li")
        .css({'border' : 'solid #dddddd 1px'})
        .css({'color' : '#0063DC'});
        
        $(this)
        .css({'color' : '#FF0084'})
        .css({'border' : 'none'});

        //Loading Data
        var pageNum = this.id;
        
        $("#content").load("pagination_data.php?page=" + pageNum, Hide_Load());
    });
    
    
});
    </script>
<!--    
<link rel="stylesheet" href="main.css" />    
-->
<!-- /Paginación -->

<?php        
    }

    else {
        echo '<link href="signin.css" rel="stylesheet">';
        echo '<link href="theme.css" rel="stylesheet">';
    }
?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->



</head>
<body>