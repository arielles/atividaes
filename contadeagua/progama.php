<?php

$mes1 = 0;
$mes2 = 0;
$mes3 = 0;
$media = 0;

$m1 = $_POST["mes1"];
$m2 = $_POST["mes2"];
$m3 = $_POST["mes3"];

$media = ($m1 + $m2 + $m3)/3;
echo "sua media da conta R$" . $media ."<br/>";

$mediaconsumo = $media / 2.50;
echo "sua media de consumo é " . $mediaconsumo . "m³ <br/>";

echo "A previsao da sua proxima conta com o aumento da tarifa é de R$ " . ($mediaconsumo * 3.50);

?>
