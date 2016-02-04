    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<?php
    if ( $id_view == 'cliente') {    
    
    }
    else {
    }


    if ( $id_view == 'seguimientos.actualizar-venta') {
?>  


<?php
    }
    else {
        if ($id_view == 'asignaciones' OR $id_view == 'diary' OR $id_view == 'late' OR $id_view == 'today') {
?>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/holder.js"></script>
<?php
        }
        else {
?>
    <script src="assets/js/jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/holder.js"></script>
<?php
        }  
    }

?>

  </body>
</html>
<?php
    if ($_SESSION["id_view"] == 'panel') {
        #echo 'S'.$_SESSION["id_view"].'1';
    }
    else {
        $_SESSION['buscador'] = '';
        $_SESSION["filtrarporvendedor"] = '';
        #echo 'S'.$_SESSION["id_view"].'2';
    }

# echo $_SESSION['a15012801'];
# echo $_SESSION['a15012802'];

$_SESSION["v3"] = '';
$_SESSION["v2"] = '';
$_SESSION["v1"] = '';
$_SESSION["v33"] = '';
$_SESSION["v22"] = '';
$_SESSION["v11"] = '';
$_SESSION["v1"] = '';
$_SESSION["v2"] = '';
$_SESSION["v3"] = '';
$_SESSION["v11"] = '';
$_SESSION["v22"] = '';
$_SESSION["v33"] = '';
?>