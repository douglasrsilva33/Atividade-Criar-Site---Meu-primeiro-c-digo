<?php

$peso = (float) readline("Digite seu peso em kg: ");
$altura = (float) readline("Digite sua altura em metros: ");

$imc = $peso / ($altura * $altura);

echo "Seu IMC é: " . $imc;

if ($imc < 18.5) {
    echo "<p>Abaixo do peso</p>";
} elseif ($imc <25) {
    echo "<p>Peso normal</p>";
} elseif ($imc < 30) {
    echo "<p>Sobrepeso</P>";
} elseif ($imc < 35) {
    echo "<p>Obesidade grau 1</p>";
} elseif ($imc < 40){
    echo "<p>Obesidade grau 2</p>";
} elseif ($imc > 40) {
    echo "<p>Obesidade grau 3</p>"; 
}  

?>
