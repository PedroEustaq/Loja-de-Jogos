<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Teste de conexão com banco de dados</h1>";

    $meuNome = "Pedrin";
    $num = 950;
    const PAIS = "brazil";
    $zeze = $_GET["nome"] ?? "Zezinho";
    echo $zeze;
    echo $num;
    echo "Seu nome é $meuNome, e voce mora no " . PAIS;
    ?>
</body>
</html>