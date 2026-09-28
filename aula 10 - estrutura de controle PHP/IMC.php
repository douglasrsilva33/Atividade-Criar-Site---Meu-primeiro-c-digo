<?php

$peso = 70;
$altura = 1.75;

$imc = $peso / ($altura * $altura);

echo "Peso: $peso kg<br>";
echo "Altura: $altura m<br>";
echo "IMC: " . number_format($imc, 2) . "<br>";

if ($imc < 18.5) {
    echo "Abaixo do peso";
} elseif ($imc < 25) {
    echo "Peso normal";
} elseif ($imc < 30) {
    echo "Sobrepeso";
} else {
    echo "Obesidade";
}
?>
