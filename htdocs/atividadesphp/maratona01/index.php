<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maratona de PHP - Parte 1</title>
</head>
<body>
    <?php
    // 1. Saudação com Nome

    $nome = "João";

    echo "<h3>1. Saudação com $nome </h3>";
    echo "Olá, $nome! Bem-vindo ao nosso site!<br>";
    echo "Usando concatenação: " . "Olá, " . $nome . "! Estamos felizes em te ver aqui!<br>";

    // 2. Conversão de Temperatura

    define("FATOR", 9/5); // constante 9/5

    $celsius = 30;
    $fahrenheit = ($celsius * FATOR) + 32;

    echo "<h3>2. Conversão de Temperatura</h3>";
    echo "$celsius°C equivalem a $fahrenheit°F<br>";
  
    // 3. Empréstimo Bancário

    $valoremprestimo = 5000;
    $taxajuros = 0.10; // 10%
    $parcelas = 10;

    $valortotal = $valoremprestimo + ($valoremprestimo * $taxajuros);
    $valorparcela = $valortotal / $parcelas;

    echo "<h3>3. Empréstimo Bancário</h3>";
    echo "Valor do empréstimo: R$ " . number_format($valorEmprestimo, 2, ',', '.') . "<br>";
    echo "Taxa de juros: " . ($taxaJuros * 100) . "%<br>";
    echo "Parcelas: $parcelas<br>";
    echo "Valor total com juros: R$ " . number_format($valorTotal, 2, ',', '.') . "<br>";
    echo "Valor da parcela: R$ " . number_format($valorParcela, 2, ',', '.') . "<br><br>";
    
    // 4. Conversor de Moeda

    $reais = 250;
    $taxacambio = 5.20;

    $dolares = round($reais / $taxacambio, 2);

    echo "<h3>4. Conversor de Moeda</h3>";
    echo "Valor em reais: R$ $reais<br>";
    echo "Taxa de câmbio: R$ $taxacambio por dólar<br>";
    echo "Valor convertido: US$ $dolares<br>";
    ?>
</body>
</html>
