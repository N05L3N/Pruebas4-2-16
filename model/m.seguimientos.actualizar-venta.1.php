<?php

	$user = $_SESSION["usu"];

	if ($_POST["fechaprox"] != '') {
	
		$fechaprox = $_POST["fechaprox"];
		$fechaproxE = explode("-", $fechaprox);	
	
		$fechadia = $fechaproxE[0];
		$fechames = $fechaproxE[1];
		$fechaano = $fechaproxE[2];
	}

	else {

		$fechadia = $_POST["fechadia"];
		$fechames = $_POST["fechames"];
		$fechaano = $_POST["fechaano"];

	}

	
	if ($_POST["tipodeseguimiento"] == 'admin') {
			
		$fechadiaprox = $_POST["fechadiaprox"];
		$fechamesprox = $_POST["fechamesprox"];
		$fechaanoprox = $_POST["fechaanoprox"];

	}
		
	else {

		$fechadiaprox = $fechadia;

		if ($fechadiaprox == '1' OR $fechadiaprox == '2' OR $fechadiaprox == '3' OR $fechadiaprox == '4' OR $fechadiaprox == '5' OR $fechadiaprox == '6' OR $fechadiaprox == '7' OR $fechadiaprox == '8' OR $fechadiaprox == '9') {
			$fechadiaprox = '0'.$fechadiaprox.'';
		}
		else {
		}

		$fechamesprox = $fechames;
		$fechaanoprox = $fechaano;

	}

	$numerodefactura = $_POST["numerodefactura"];
	
?>