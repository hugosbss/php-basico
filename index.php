<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 10 - Formulários em HTML</title>
</head>
<body>
    <h1>Formulários em HTML</h1>

    <!-- Exemplo de formulários -->
    <h2>Método GET</h2>
    <form action="php/1.php" method="get">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1">
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2">
        <input type="submit" value="Somar">
    </form>
    <br><hr/>

    <form action="php/3.php" method="get">
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero">
        <input type="submit" value="Verificar Par/Ímpar">
    </form>
    <br><hr/>

    <form action="php/4.php" method="get">
        <label for="fahrenheit">Temperatura em Fahrenheit:</label>
        <input type="number" id="fahrenheit" name="fahrenheit">
        <input type="submit" value="Converter">
    </form>
    <br><hr/>

    <form action="php/7.php" method="get">
        <label for="base">Base:</label>
        <input type="number" id="base" name="base">
        <label for="altura">Altura:</label>
        <input type="number" id="altura" name="altura">
        <input type="submit" value="Calcular Área do Triângulo">
    </form>
    <br><hr/>

    <form action="php/9.php" method="get">
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero">
        <input type="submit" value="Verificar Positivo/Negativo/Zero">
    </form>
    <br><hr/>

    <form action="php/11.php" method="get">
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade">
        <input type="submit" value="Verificar Maioridade">
    </form>
    <br><hr/>

    <h2>Método POST</h2>
    <form action="php/2.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade">
        <input type="submit" value="Enviar">
    </form>
    <br><hr/>

    <form action="php/5.php" method="post">
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero">
        <input type="submit" value="Calcular Tabuada">
    </form>
    <br><hr/>

    <form action="php/6.php" method="post">
        <label for="reais">Valor em Reais:</label>
        <input type="number" id="reais" name="reais">
        <input type="submit" value="Converter">
    </form>    
    <br><hr/>

    <form action="php/8.php" method="post">
        <label for="raio">Raio:</label>
        <input type="number" id="raio" name="raio">
        <input type="submit" value="Calcular Área do Círculo">
    </form>
    <br><hr/>

    <form action="php/10.php" method="post">
        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco">
        <input type="submit" value="Aplicar Desconto">
    </form>
    <br><hr/>

    <form action="php/12.php" method="post">
        <label for="peso">Peso (kg):</label>
        <input type="number" id="peso" name="peso">
        <label for="altura">Altura (m):</label>
        <input type="number" id="altura" name="altura" step="0.01">
        <input type="submit" value="Calcular IMC">
    </form>
    <br><hr/>

    <form action="php/13.php" method="get">
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento">
        <input type="submit" value="Calcular Idade">
    </form>
    <br><hr/>

</body>
</html>