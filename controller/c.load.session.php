<?php
	
$conn = new mysqli($dbh, $dbu, $dbp, $dbn);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$where = $_SESSION['usuario'];

$sql_tipo = "SELECT tipo FROM usuarios WHERE usuario = '$where'";
$result_tipo = $conn->query($sql_tipo);

if ($result_tipo->num_rows > 0) {
    while($row_tipo = $result_tipo->fetch_assoc()) {
 		$_SESSION['tipo'] = $row_tipo["tipo"];
 		# echo '<pre>' . $_SESSION['tipo'] . '</pre>';
    }
} else {
    echo "0 results";
}
$conn->close();

?>