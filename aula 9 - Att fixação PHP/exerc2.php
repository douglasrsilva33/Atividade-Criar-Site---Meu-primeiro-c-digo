<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 02 - Média do Aluno</title>
</head>
<body>
    <form method="POST" action="">
        <label>Nome do Aluno: <input type="text" name="nome" required></label><br><br>
        <label>Nota 1: <input type="number" step="0.1" min="0" max="10" name="n1" required></label><br><br>
        <label>Nota 2: <input type="number" step="0.1" min="0" max="10" name="n2" required></label><br><br>
        <label>Nota 3: <input type="number" step="0.1" min="0" max="10" name="n3" required></label><br><br>
        <button type="submit">Calcular Média</button>
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];

        $media = ($n1 + $n2 + $n3) / 3;

        $situacao = ($media >= 7.0) ? "Aprovado" : "Reprovado";

        echo "Nome do Aluno: " . $nome . "<br>";
        echo "Média Final: " . number_format($media, 2) . "<br>";
        echo "Situação: <strong>" . $situacao . "</strong>";
    }
    ?>
</body>
</html>