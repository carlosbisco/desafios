<?php
// transformando valores de dias para anos, meses e dias:

echo "Informe um valor inteiro: ";
$valor = trim(fgets(STDIN));

$anos  = intval($valor / 365);
$meses = intval(($valor % 365) / 30);
$dias  = intval(($valor % 365) % 30);

echo "\n::::::::Resultado::::::::::::";
echo "\n";
echo "\n\t$anos ";
echo $anos <= 1 ? "ano" : "anos";
echo "\n\t$meses "; 
echo $meses <= 1 ? "mês" : "meses";
echo "\n\t$dias ";
echo $dias <= 1 ? "dia" : "dias";
echo "\n";
echo "\n:::::::::::::::::::::::::::::";