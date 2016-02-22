<?php


require("serviceCalculator.php");

$firstvalue = $_GET['firstvalue'];
$secondvalue =  $_GET['secondvalue'];
$operation = $_GET['operation'];

// Obtenemos una instancia del servicio de calculadora
$calculadora = new CalculadoraService();

$result = $calculadora->doSomethingWithTheNumbers($firstvalue, $secondvalue, $operation);

// Enviamos de vuelta la oracion con el resultado
echo($result);