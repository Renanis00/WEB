<?php
$fab = $_POST['custo'];

$dist = (((28 * $fab) /100) + $fab);
$imp = (((45 * $fab) /100) +$fab);
$total = $fab + $dist + $imp;
echo "<h1>Resultado</h1>";
echo "Custo de fábrica: $fab <br>";
echo "Custo da fábrica mais percentual do distribuidor (28%): R$ $dist <br>" ;
echo "Custo da fábrica mais impostos (45%): R$ $imp <br>";
echo "O custo total é de: R$ $total";

?>