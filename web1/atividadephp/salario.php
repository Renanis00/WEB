<?php

$sal = $_POST['atual'];
$reaj = $_POST['reaj'];

$salreaj = ($reaj * $sal)/100 + $sal;
echo "<h1>Resultado</h1>";
echo "O salário ajustado do Adegildo é: R$ $salreaj.";






?>

