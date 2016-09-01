<?php 

$peso = $_POST['peso'];
$altura = $_POST['altura'];

$altura_total = $altura * $altura;

$imc = $peso / $altura_total;

echo "Su IMC es: ", $imc;
 ?>