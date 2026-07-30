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
$genero = $jogo['genero'];



$sqlProdutora = "SELECT * FROM produtoras WHERE cod = $1";

$resultaprodutora = pg_query_params($conn, $sqlProdutora, [$produtora]);

if (!$resultaprodutora) {
    die(pg_last_error($conn));
}

$tabela_produtora = pg_fetch_assoc($resultaprodutora);

$nome_produtora = $tabela_produtora['produtora'] ?? "Desconhecida";


##################
$sqlPlataforma = "SELECT * FROM plataforma WHERE id = $1";

$resultaplataforma = pg_query_params($conn, $sqlPlataforma, [$plataforma]);

if (!$resultaplataforma) {
    die(pg_last_error($conn));
}

$tabela_plataforma = pg_fetch_assoc($resultaplataforma);

$nome_plataforma = $tabela_plataforma['plataforma'] ?? "Desconhecida";


##################
$sqlGenero = "SELECT * FROM generos WHERE cod = $1";

$resultagenero = pg_query_params($conn, $sqlGenero, [$genero]);

if (!$resultagenero) {
    die(pg_last_error($conn));
}

$tabela_genero = pg_fetch_assoc($resultagenero);

$nome_genero = $tabela_genero['genero'] ?? "Desconhecida";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nome ?> | GameStore</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sobre.css">
    <link rel="stylesheet" href="cabecalho.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
    </style>
</head>

<body class="pagina-produto" style="--fundo: url('imgJogos/<?= $nome ?>/background.avif');">



    <header class="cabecalho">

        <div class="menu-esquerda">

            <div class="logo">
                <img src="imgDeco/PERDENDOLogo.png" alt="">
            </div>

            <a href="#"><img src="svg/HomeVermelho.svg" alt=""> Central</a>
            <a href="#"><img src="svg/BagVermelha.svg" alt=""> Catálogo</a>
        </div>

        <div class="Direito">
            <div class="pesquisa">
                <img src="svg/LoopaCinza.svg" alt="">
                <input type="text" placeholder="Pesquisar">
            </div>

            <div class="login">
                <img src="svg/ContaIcone.svg" alt="User Icon">
                <a href="#">Crie sua conta</a>
                <a href="#">Iniciar Sessão</a>
            </div>
        </div>
    </header>
    <main class="produto-page">

        <section class="produto-card">

            <div class="produto-esquerda">

                <p class="breadcrumb">
                    Catálogo &gt; Jogos &gt; <?= $nome ?>
                </p>

                <div class="produto-imagem-principal">
                    <img
                        src="imgJogos/<?= $nome ?>/banner1.avif"
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

               

                <h1><?= $nome ?></h1>

                <div class="linha-preco">
                    <h2 class="produto-preco">
                        R$<?= number_format($preco, 2, ",", ".") ?>
                    </h2>

                    <div class="nota-produto">
                        <img src="./svg/starYellow.svg" alt="">
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
                        <span>Gênero</span>
                        <strong><?= $nome_genero ?></strong>
                    </div>

                    <div>
                        <span>Plataforma</span>
                        <strong><?= $nome_plataforma ?></strong>
                    </div>

                    <div>
                        <span>Fornecedor</span>
                        <strong><?= $nome_produtora ?></strong>
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