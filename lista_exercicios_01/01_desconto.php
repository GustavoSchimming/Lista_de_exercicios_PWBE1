<?php

$preco = 50;
$quantidade = 5;

$total = $preco * $quantidade;

echo "Valor da compra: R$ $total<br>";

if ($total >= 200) {
    $desconto = $total * 0.10;
    $total = $total - $desconto;

    echo "Desconto de 10% aplicado!<br>";
}

echo "Valor final: R$ $total";

?>

