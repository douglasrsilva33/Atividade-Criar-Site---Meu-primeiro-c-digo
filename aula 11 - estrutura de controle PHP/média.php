<?php

$nota1 = readline("Digite a primeira nota (1 a 100): ");
$nota2 = readline("Digite a segunda nota (1 a 100): ");

$media = ($nota1 + $nota2) / 2;

echo "Média final: $media\n";

if ($media >= 60) {
    echo "Situação: APROVADO";
} elseif ($media >= 40) {
    echo "Situação: RECUPERAÇÃO";
} else {
    echo "Situação: REPROVADO";
}

?>
