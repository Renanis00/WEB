<?php

$vld = $_POST['validos'];
$br = $_POST['brancos'];
$nl = $_POST['nulos'];
$tte = $_POST['total'];

$ttv  = ($vld + $br + $nl);
$abst = ($tte - $ttv);
$pvld = ($vld * 100) /$tte;
$pbr  = ($br * 100) /$tte;
$pnl  = ($nl * 100) /$tte;

echo "<h1> Eleições </h1>";
echo " O <b>total de eleitores aptos</b> é $tte <br>" ;
echo " O <b>total de votos</b> é $ttv <br>";
echo " O <b>total de abstenções</b> é $abst <br>";
echo " A porcentagem de <b>votos válidos</b> em relação ao total representa $pvld% <br>";
echo " A <b>porcentagem</b> de <b>votos brancos</b> em relação ao total representa $pbr% <br>";
echo " A <b>porcentagem</b> de <b>votos nulos</b> em relação ao total representa $pnl%";
?>