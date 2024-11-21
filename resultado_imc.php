<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
</head>
<body>
    <h1>RESULTADO DO IMC</h1>
    <?php
    // Receber os dados do formulário
    $nome = $_POST["nome"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    // Calcular o IMC
    $imc = $peso / ($altura * $altura);
    $imc = number_format($imc, 2);

    // Determinar a faixa de peso
    if ($imc < 18.5) {
        $mensagem = "abaixo do peso";
    } elseif ($imc >= 18.5 && $imc <= 24.9) {
        $mensagem = "com peso normal";
    } elseif ($imc >= 25 && $imc <= 29.9) {
        $mensagem = "com sobrepeso";
    } elseif ($imc >= 30 && $imc <= 34.9) {
        $mensagem = "com obesidade grau I";
    } elseif ($imc >= 35 && $imc <= 39.9) {
        $mensagem = "com obesidade grau II";
    } else {
        $mensagem = "com obesidade grau III (mórbida)";
    }

    // Exibir o resultado
    echo "<p>Peso: $peso kg</p>";
    echo "<p>Altura: $altura m</p>";
    echo "<p>IMC: $imc</p>";
    echo "<p>$nome, você está $mensagem.</p>";
    ?>
</body>
</html>
