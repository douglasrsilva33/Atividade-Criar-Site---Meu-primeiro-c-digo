<?php

echo "Digite o salário bruto: ";
$salarioBruto = floatval(trim(fgets(STDIN)));

$inss = $salarioBruto * 9 / 100;
$ir = $salarioBruto * 7.5 / 100;

$salarioLiquido = $salarioBruto - $inss - $ir;

echo "Desconto do INSS: R$ " . number_format($inss, 2, ',', '.') . PHP_EOL;
echo "Desconto do IR: R$ " . number_format($ir, 2, ',', '.') . PHP_EOL;
echo "Salário líquido: R$ " . number_format($salarioLiquido, 2, ',', '.') . PHP_EOL;

?>
