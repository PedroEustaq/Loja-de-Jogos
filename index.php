<?php require_once "includes/banco.php";
require_once "includes/login.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Jogos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cabecalho.css">
    <link rel="stylesheet" href="banner.css">
    <link rel="stylesheet" href="destaque.css">
    <link rel="stylesheet" href="giftcards.css">
    <link rel="stylesheet" href="market.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton+SC&family=Inter:opsz@14..32&family=Karla&family=Roboto:ital,wght@0,100..900;1,100..900&family=VT323&display=swap');
    </style>
</head>

<body>


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

    <section class="banner">

        <div class="slides">
            <img src="imgDeco/underbanner.png" alt="">
            <img src="imgDeco/Pikomon.jpg" alt="">
            <img src="imgDeco/supersmash.avif" alt="">
        </div>

        <div class="indicadores">
            <div class="indicador ativo">
                <span>Mario Odyssey</span>
            </div>

            <div class="indicador">
                <span>Pikomon</span>
            </div>

            <div class="indicador">
                <span>Super Smash</span>
            </div>
        </div>

    </section>

    <div class="EmDestaque">
        <h1>Em Destaque</h1>

        <div class="linhaJogos">

            <div class="Jogo">
                <div class="ImagemJogo">
                    <img src="imgDeco/marioOdissi.png" alt="Mario Odyssey">
                </div>

                <div class="InfoJogo">
                    <div class="NomeNota">
                        <h3 class="NomeJogo">Mario Odyssey</h3>

                        <div class="Nota">
                            <img src="svg/starYellow.svg" alt="">
                            <span>9.0</span>
                        </div>
                    </div>

                    <div class="DataProd">
                        <p>2017</p>
                        <p>Nintendo</p>
                    </div>
                </div>
            </div>

            <div class="Jogo">
                <div class="ImagemJogo">
                    <img src="imgDeco/eutruck.png" alt="Euro Truck">
                </div>

                <div class="InfoJogo">
                    <div class="NomeNota">
                        <h3 class="NomeJogo">Euro Truck</h3>

                        <div class="Nota">
                            <img src="svg/starYellow.svg" alt="">
                            <span>9.0</span>
                        </div>
                    </div>

                    <div class="DataProd">
                        <p>2017</p>
                        <p>Nintendo</p>
                    </div>
                </div>
            </div>

            <div class="Jogo">
                <div class="ImagemJogo">
                    <img src="imgDeco/marioOdissi.png" alt="Mario Odyssey">
                </div>

                <div class="InfoJogo">
                    <div class="NomeNota">
                        <h3 class="NomeJogo">Mario Odyssey</h3>

                        <div class="Nota">
                            <img src="svg/starYellow.svg" alt="">
                            <span>9.0</span>
                        </div>
                    </div>

                    <div class="DataProd">
                        <p>2017</p>
                        <p>Nintendo</p>
                    </div>
                </div>
            </div>

            <div class="Jogo">
                <div class="ImagemJogo">
                    <img src="imgDeco/marioOdissi.png" alt="Mario Odyssey">
                </div>

                <div class="InfoJogo">
                    <div class="NomeNota">
                        <h3 class="NomeJogo">Mario Odyssey</h3>

                        <div class="Nota">
                            <img src="svg/starYellow.svg" alt="">
                            <span>9.0</span>
                        </div>
                    </div>

                    <div class="DataProd">
                        <p>2017</p>
                        <p>Nintendo</p>
                    </div>
                </div>
            </div>

            <div class="Jogo">
                <div class="ImagemJogo">
                    <img src="imgDeco/marioOdissi.png" alt="Mario Odyssey">
                </div>

                <div class="InfoJogo">
                    <div class="NomeNota">
                        <h3 class="NomeJogo">Mario Odyssey</h3>

                        <div class="Nota">
                            <img src="svg/starYellow.svg" alt="">
                            <span>9.0</span>
                        </div>
                    </div>

                    <div class="DataProd">
                        <p>2017</p>
                        <p>Nintendo</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="Gift">

        <div class="giftText">
            <span class="giftTag"><img src="svg/EstrelaBranca.svg" alt=""> GIFT CARDS</span>

            <h1>O presente perfeito para qualquer jogador.</h1>

            <p>
                Compre em poucos segundos e receba seu código rapidamente.
            </p>

            <div class="giftButtons">
                <button class="btnPrincipal">Ver Gift Cards</button>
            </div>
        </div>

        <div class="giftWall">

            <img src="imgDeco/giftNintendo.png" alt="">
            <img src="imgDeco/giftPlaystation.png" alt="">
            <img src="imgDeco/giftPlaystore.png" alt="">
            <img src="imgDeco/giftRoblox.png" alt="">
            <img src="imgDeco/giftValorant.png" alt="">
            <img src="imgDeco/giftXbox.png" alt="">

            <img src="imgDeco/giftNintendo.png" alt="">
            <img src="imgDeco/giftPlaystation.png" alt="">
            <img src="imgDeco/giftPlaystore.png" alt="">
            <img src="imgDeco/giftRoblox.png" alt="">
            <img src="imgDeco/giftValorant.png" alt="">
            <img src="imgDeco/giftXbox.png" alt="">

            <img src="imgDeco/giftNintendo.png" alt="">
            <img src="imgDeco/giftPlaystation.png" alt="">
            <img src="imgDeco/giftPlaystore.png" alt="">
            <img src="imgDeco/giftRoblox.png" alt="">
            <img src="imgDeco/giftValorant.png" alt="">
            <img src="imgDeco/giftXbox.png" alt="">

        </div>

    </section>
    <main class="Market">

        <aside class="filtros">

            <h2>Filtros</h2>

            <div class="campoBusca">
                <img src="svg/LoopaCinza.svg" alt="">
                <input type="text" placeholder="Pesquisar">
            </div>

            <h3>Categoria</h3>

            <label><input type="checkbox"> Jogos</label>
            <label><input type="checkbox"> Consoles</label>
            <label><input type="checkbox"> Gift Cards</label>

            <h3>Plataforma</h3>

            <label><input type="checkbox"> Nintendo</label>
            <label><input type="checkbox"> Xbox</label>
            <label><input type="checkbox"> Playstation</label>

        </aside>

        <section class="catalogo">

            <?php

            $sql = "
SELECT
    j.cod,
    j.nome,
    j.nota,
    g.genero,
    p.produtora
FROM jogos j
JOIN generos g ON g.cod = j.genero
JOIN produtoras p ON p.cod = j.produtora
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

                            <p>
                                <?= htmlspecialchars($jogo['produtora']) ?>
                                •
                                <?= htmlspecialchars($jogo['genero']) ?>
                            </p>

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


</body>
<?php require_once 'rodape.php';



?>
<script src="script.js"></script>

</html>