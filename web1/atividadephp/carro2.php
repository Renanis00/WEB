<?php
$custo1 = $_GET["fab"];
$custo2 = $_GET["dist"];
$custo3 = $_GET["imp"];

$tt2 = ($custo1 * $custo2)/100;
$tt3 = ($custo1 * $custo3)/100;
$total = $tt2 + $tt3 + $custo1;


echo "<h1>Resultado</h1>";
echo "Custo de fábrica: R$ $custo1 <br>";
echo "Custo da <b>porcentagem da distribuidora</b> sobre o valor de fábrica: R$ $tt2<br>";
echo "Custo dos <b>impostos</b> sobre o valor de fábrica: R$ $tt3 <br>";
echo "Custo <b>total</b>: R$ $total";

?>