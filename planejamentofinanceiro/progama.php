<?php
$textoinicio = 0;
$textofim = 0;

$textoinicio = $_POST["textoinicio"];
$textofim = $_POST["textofim"];

$textoinicio =explode("/", $textoinicio);
$textofim = explode("/", $textofim);

$tempoinicio = mktime (0, 0, 0, $textoinicio[1],
$textoinicio[0], $textoinicio[2]);
	$tempofim = mktime (0, 0, 0, $textofim[1],
$textofim[0],$textofim[2]);
	$tempoAtual = time();
	echo "hoje e um dia bom para compras?";
if($tempoAtual >= $tempoinicio and $tempoAtual <=
$tempofim){
	echo "Sim";
}
else{
	echo "Não";
}
	
?>
