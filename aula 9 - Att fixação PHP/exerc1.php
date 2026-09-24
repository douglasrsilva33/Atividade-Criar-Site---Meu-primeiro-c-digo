<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 01 - Soma</title>
</head>
<body>
    <form method="POST" action="">
        <label>Valor 1: <input type="number" step="any" name="v1" required></label><br><br>
        <label>Valor 2: <input type="number" step="any" name="v2" required></label><br><br>
        <label>Valor 3: <input type="number" step="any" name="v3" required></label><br><br>
        <button type="submit">Calcular Soma</button>
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $v1 = $_POST['v1'];
        $v2 = $_POST['v2'];
        $v3 = $_POST['v3'];

        $soma = $v1 + $v2 + $v3;

        echo "O primeiro valor é: " . $v1 . "<br>";
        echo "O segundo valor é: " . $v2 . "<br>";
        echo "O terceiro valor é: " . $v3 . "<br>";
        echo "<strong>A soma dos três valores é: " . $soma . "</strong>";
    }
    ?>
</body>
</html>