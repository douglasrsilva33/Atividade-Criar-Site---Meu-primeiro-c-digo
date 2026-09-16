<?php

$peso = (float) readline("Digite seu peso em kg: ");
$altura = (float) readline("Digite sua altura em metros: ");

$imc = $peso / ($altura * $altura);

echo "Seu IMC é: " . $imc;

?>
