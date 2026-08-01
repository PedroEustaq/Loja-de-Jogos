<?php
require_once "includes/banco.php";
require_once "includes/login.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Catálogo | Perdendo</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cabecalho.css">
    <link rel="stylesheet" href="market.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<header class="cabecalho">

    <div class="menu-esquerda">

        <div class="logo">
            <img src="imgDeco/PERDENDOLogo.png" alt="">
        </div>

        <a href="index.php"><img src="svg/HomeVermelho.svg" alt=""> Central</a>
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
<main class="Market">

    <aside class="filtros">

        <h2>Filtros</h2>

        <form id="formFiltros" method="GET">

            <div class="campoBusca">
                <img src="svg/LoopaCinza.svg">

                <input
                    id="pesquisa"
                    type="text"
                    name="pesquisa"
                    placeholder="Pesquisar jogo..."
                    autocomplete="off"
                    value="<?= htmlspecialchars($_GET['pesquisa'] ?? '') ?>">
            </div>

            <h3>Categoria</h3>

            <label><input type="checkbox"> Jogos</label>
            <label><input type="checkbox"> Consoles</label>
            <label><input type="checkbox"> Gift Cards</label>

            <h3>Plataforma</h3>

            <label>
                <input
                    type="checkbox"
                    name="plataforma[]"
                    value="1"
                    <?= in_array("1", $_GET["plataforma"] ?? []) ? "checked" : "" ?>>
                Nintendo
            </label>

            <label>
                <input
                    type="checkbox"
                    name="plataforma[]"
                    value="2"
                    <?= in_array("2", $_GET["plataforma"] ?? []) ? "checked" : "" ?>>
                PC
            </label>

            <label>
                <input
                    type="checkbox"
                    name="plataforma[]"
                    value="3"
                    <?= in_array("3", $_GET["plataforma"] ?? []) ? "checked" : "" ?>>
                PlayStation
            </label>
        </form>
    </aside>

    <section class="catalogo">

        <?php

        $pesquisa = trim($_GET['pesquisa'] ?? '');

        $plataformas = $_GET['plataforma'] ?? [];

        $sql = "
SELECT
    j.cod,
    j.nome,
    j.nota,
    g.genero,
    p.produtora,
    j.plataforma
FROM jogos j
JOIN generos g ON g.cod = j.genero
JOIN produtoras p ON p.cod = j.produtora
WHERE 1=1
";

        if ($pesquisa != "") {

            $pesquisa = pg_escape_string($conn, $pesquisa);

            $sql .= "
        AND j.nome ILIKE '%$pesquisa%'
    ";
        }

        if (!empty($plataformas)) {

            $lista = [];

            foreach ($plataformas as $p) {

                $lista[] = (int)$p;
            }

            $sql .= "
        AND j.plataforma IN(" . implode(",", $lista) . ")
    ";
        }

        $sql .= "
ORDER BY j.nome
";

        $busca = pg_query($conn, $sql);

        // Contador dos cards exibidos
        $contador = 0;

        function localizarImagem($pasta, $nomeArquivo)
        {
            $extensoes = [
                "png",
                "jpg",
                "jpeg",
                "webp",
                "avif",
                "gif"
            ];

            foreach ($extensoes as $ext) {

                $arquivo = "$pasta/$nomeArquivo.$ext";

                if (file_exists($arquivo)) {
                    return $arquivo;
                }
            }

            return null;
        }

        while ($jogo = pg_fetch_assoc($busca)) {

            // Wide, Normal, Normal, Wide, Normal, Normal...
            $wide = ($contador % 5 == 0);

            $pasta = "imgJogos/" . $jogo['nome'];

            $imagem = $wide
                ? localizarImagem($pasta, "banner1")
                : localizarImagem($pasta, "capa");

            // Se não existir nenhuma imagem, não mostra este jogo
            if ($imagem === null) {
                continue;
            }

        ?>

            <a href="detalhes.php?id=<?= $jogo['cod'] ?>" class="card-link">

                <article class="card <?= $wide ? 'card--wide' : '' ?>">

                    <img
                        src="<?= $imagem ?>"
                        alt="<?= htmlspecialchars($jogo['nome']) ?>"
                        loading="lazy">

                    <div class="card-info">

                        <div class="card-topo">
                            <h3><?= htmlspecialchars($jogo['nome']) ?></h3>
                            <span><img src="./svg/starYellow.svg" alt=""> <?= number_format($jogo['nota'], 1) ?></span>
                        </div>
                        <div class="DataProd">
                            <p>
                                <?= htmlspecialchars($jogo['produtora']) ?>

                            </p>
                            <p>
                                <?= htmlspecialchars($jogo['genero']) ?>
                            </p>
                        </div>
                    </div>

                </article>

            </a>

        <?php

            // alterna entre banner1 e capa
            // alterna entre banner1 e capa
            $contador++;
        }

        ?>

    </section>

</main>

<?php
require_once "rodape.php";
?>

<script src="script.js"></script>

</body>
</html>

