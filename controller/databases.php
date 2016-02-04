<?php
$dbh = 'localhost';

$dbu = 'ucrmk';
$dbp = 'Pcrmk#2014';
$dbn = 'crmk';

$mysql_hostname = $dbh;
$mysql_user = $dbu;
$mysql_password = $dbp;
$mysql_database = "$dbn";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
mysql_set_charset('utf8', $link);
#mysql_query ("SET NAMES 'utf8'");
?>