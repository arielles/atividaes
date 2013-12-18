<?php

$Contagem = 0;
$ChocolateB = 0;
$promocaoE = 0;
$promocaoB = 0;
$ChocolateE = 0 ;

$ChocolateB = $_POST["ChocolateB"];
$ChocolateE = $_POST["ChocolateE"];

$Contagem = 3;
while($Contagem <= $ChocolateE){
	      $promocaoB = $promocaoB + 1;
	      $Contagem = $Contagem + 3;

}

$Contagem = 2;
while($Contagem <= $ChocolateB){
		$promocaoE = $promocaoE + 1;
		$Contagem = $Contagem + 2;
}

$Contagem = 5;
while($Contagem <= $ChocolateB + $ChocolateE){
		$promocaoB = $promocaoE + 1;
		$Contagem = $Contagem + 5;
}

	echo "A quantidade de chocolates Escuros é ";
	echo $ChocolateE + $promocaoE;
	echo "<br/>";
	echo "A quantidade de chocolate Branco é";
	echo $ChocolateB + $promocaoB;

?>
