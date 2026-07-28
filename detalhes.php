<?php

require_once "includes/banco.php";

$id = $_GET['id'] ?? null;


if (!$id) {
    die("Jogo não encontrado");
}



$sql = "SELECT * FROM jogos WHERE cod = $1";

$resultado = pg_query_params($conn, $sql, [$id]);


$jogo = pg_fetch_assoc($resultado);


if (!$jogo) {
    die("Jogo não encontrado");
}



$nome = $jogo['nome'];
$preco = $jogo['preco'];
$descricao = $jogo['descricao'];
$nota = $jogo['nota'];
$plataforma = $jogo['plataforma'];
$produtora = $jogo['produtora'];



$sqlProdutora = "SELECT * FROM produtoras WHERE cod = $1";

$resultaprodutora = pg_query_params($conn, $sqlProdutora, [$produtora]);

if (!$resultaprodutora) {
    die(pg_last_error($conn));
}

$tabela_produtora = pg_fetch_assoc($resultaprodutora);

$nome_produtora = $tabela_produtora['produtora'] ?? "Desconhecida";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nome ?> | GameStore</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sobre.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
    </style>
</head>

<body class="pagina-produto" style="--fundo: url('imgJogos/<?= $nome ?>/background.png');">

    <main class="produto-page">

        <section class="produto-card">

            <div class="produto-esquerda">

                <p class="breadcrumb">
                    Catálogo &gt; Jogos &gt; <?= $nome ?>
                </p>

                <div class="produto-imagem-principal">
                    <img
                        src="../imgJogos/<?= $nome ?>/banner1.png"
                        alt="<?= $nome ?>"
                        id="imagemPrincipal">
                </div>

                <div class="produto-bolinhas" aria-hidden="true">
                    <span class="ativa"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="produto-miniaturas">




                    <?php

                    for ($i = 1; $i <= 5; $i++) {

                        echo "

    <div class='miniatura " . ($i == 1 ? "ativa" : "") . "'>

        <img src='imgJogos/$nome/banner$i.avif'>

    </div>

    ";
                    }

                    ?>










                </div>

            </div>

            <aside class="produto-direita">

                <span class="tag-destaque">Jogo digital</span>

                <h1><?= $nome ?></h1>

                <div class="linha-preco">
                    <h2 class="produto-preco">
                        R$<?= number_format($preco, 2, ",", ".") ?>
                    </h2>

                    <div class="nota-produto">
                        <img src="../svg/starYellow.svg" alt="">
                        <span>9.0</span>
                    </div>
                </div>

                <p class="produto-descricao">

                    <?= $descricao ?>

                </p>

                <div class="produto-acoes">
                    <a href="#" class="btn-principal">Botar no carrinho</a>
                    <a href="#" class="btn-secundario">Embrulhar para presente</a>
                </div>

                <div class="produto-dados">
                    <div>
                        <span>Categoria</span>
                        <strong>Jogo</strong>
                    </div>

                    <div>
                        <span>Plataforma</span>
                        <strong>Nintendo</strong>
                    </div>

                    <div>
                        <span>Fornecedor</span>
                        <strong><?= $nome_produtora ?></strong>
                    </div>

                    <div>
                        <span>Formato</span>
                        <strong>Digital</strong>
                    </div>
                </div>

            </aside>

        </section>

    </main>

    <script>
        const imagemPrincipal = document.querySelector("#imagemPrincipal");
        const miniaturas = document.querySelectorAll(".miniatura");
        const bolinhas = document.querySelectorAll(".produto-bolinhas span");

        let atual = 0;

        function mostrarImagem(indice) {
            const miniatura = miniaturas[indice];
            const novaImagem = miniatura.querySelector("img").src;

            imagemPrincipal.src = novaImagem;

            miniaturas.forEach((item) => item.classList.remove("ativa"));
            bolinhas.forEach((item) => item.classList.remove("ativa"));

            miniatura.classList.add("ativa");
            bolinhas[indice].classList.add("ativa");

            atual = indice;
        }

        miniaturas.forEach((item, indice) => {
            item.addEventListener("click", () => {
                mostrarImagem(indice);
            });
        });

        bolinhas.forEach((item, indice) => {
            item.addEventListener("click", () => {
                mostrarImagem(indice);
            });
        });

        setInterval(() => {
            atual++;
            if (atual >= miniaturas.length) {
                atual = 0;
            }
            mostrarImagem(atual);
        }, 4000);
    </script>

</body>

</html>