<?php
    //1. Soma de dois números (GET)
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $soma = $num1 + $num2;
        echo "A soma de $num1 e $num2 é: $soma";
    }    
    echo "<br><hr />";

    //2. Exibir nome e idade (POST)
    if (isset($_POST['nome']) && isset($_POST['idade'])) {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    echo "Olá, $nome! Sua idade é $idade anos.";
    }
    echo "<br><hr />";

    //3. Verificar se o número é par ou ímpar (GET)
    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];
        if ($numero % 2 == 0) {
            echo "O número $numero é par.";
        } else {
            echo "O número $numero é ímpar.";
        }
    }
    echo "<br><hr />";

    //4. Converter Fahrenheit para Celsius (GET)
    if (isset($_GET['fahrenheit'])) {
        $fahrenheit = $_GET['fahrenheit'];
        $celsius = ($fahrenheit - 32) * 5 / 9;
        echo "$fahrenheit °F é igual a $celsius °C.";
    }
    echo "<br><hr />";

    //5. Calcular a tabuada de 1 a 10 (POST)
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        echo "Tabuada do $numero:<br>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$numero x $i = " . ($numero * $i) . "<br>";
        }
    }
    echo "<br><hr />";

    //6. Converter Reais para Dólares (POST)
    if (isset($_POST['reais'])) {
        $reais = $_POST['reais'];
        $dolares = $reais / 5;  // Cotação fixa de R$5,00
        echo "R$ $reais é igual a US$ $dolares.";
    }
    echo "<br><hr />";

    //7. Calcular a área de um triângulo (GET)
    if (isset($_GET['base']) && isset($_GET['altura'])) {
        $base = $_GET['base'];
        $altura = $_GET['altura'];
        $area = ($base * $altura) / 2;
        echo "A área do triângulo com base $base e altura $altura é: $area";
    }
    echo "<br><hr />";

    //8. Calcular a área de um círculo (POST)
    if (isset($_POST['raio'])) {
        $raio = $_POST['raio'];
        $area = pi() * $raio * $raio;  // Fórmula: Área = π * raio²
        echo "A área do círculo com raio $raio é: $area";
    }
    echo "<br><hr />";

    //9. Verificar se o número é positivo, negativo ou zero (GET)
    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];
        if ($numero > 0) {
            echo "O número $numero é positivo.";
        } elseif ($numero < 0) {
            echo "O número $numero é negativo.";
        } else {
            echo "O número $numero é zero.";
        }
    }
    echo "<br><hr />";

    //10. Aplicar desconto de 10% (POST)
    if (isset($_POST['preco'])) {
        $preco = $_POST['preco'];
        $desconto = $preco * 0.10;
        $preco_com_desconto = $preco - $desconto;
        echo "O preço original é R$ $preco. Com o desconto de 10%, o novo preço é R$ $preco_com_desconto.";
    }
    echo "<br><hr />";

    //11. Verificar maioridade (GET)
    if (isset($_GET['idade'])) {
        $idade = $_GET['idade'];
        if ($idade >= 18) {
            echo "Você é maior de idade.";
        } else {
            echo "Você é menor de idade.";
        }
    }
    echo "<br><hr />";

    //12. Calcular IMC (POST)
    if (isset($_POST['peso']) && isset($_POST['altura'])) {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $imc = $peso / ($altura * $altura);
        echo "Seu IMC é: $imc";
    }
    echo "<br><hr />";

    //13. Calcular a idade (GET)
    if (isset($_GET['data_nascimento'])) {
        $data_nascimento = $_GET['data_nascimento'];
        $nascimento = new DateTime($data_nascimento);
        $hoje = new DateTime();
        $idade = $hoje->diff($nascimento)->y;
        echo "Você tem $idade anos.";
    }
    echo "<br><hr />";
?>