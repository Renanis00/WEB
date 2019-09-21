<?php

$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$nota4 = $_POST['nota4'];

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

echo "<h1> A média é $media</h1>";

$_GET = $media;     /*Para receber, é necessário declarar a variavel ao get*/

$media = $_GET['media'];

echo 'A sua média é 4';


?>
