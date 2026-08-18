<?php

function calcularIMC($peso, $altura) {

    $imc = $peso / ($altura * $altura);

    return $imc;
}

$peso = 70;
$altura = 1.75;

$resultado = calcularIMC($peso, $altura);

echo "IMC: $resultado";

?>