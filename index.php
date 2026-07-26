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

            <article class="card card--wide">
                <img src="imgDeco/supersmash.avif" alt="Super Smash" loading="lazy">
                <div class="card-info">
                    <div class="card-topo">
                        <h3>Super Smash</h3>
                        <span>⭐ 9.4</span>
                    </div>
                    <p>Nintendo • Luta</p>
                </div>
            </article>

            <article class="card">
                <img src="imgDeco/Pikomon.jpg" alt="Pikomon" loading="lazy">
                <div class="card-info">
                    <div class="card-topo">
                        <h3>Pikomon</h3>
                        <span>⭐ 8.8</span>
                    </div>
                    <p>Nintendo • Aventura</p>
                </div>
            </article>

            <article class="card">
                <img src="imgDeco/marioOdissi.png" alt="Mario Odyssey" loading="lazy">
                <div class="card-info">
                    <div class="card-topo">
                        <h3>Mario Odyssey</h3>
                        <span>⭐ 9.0</span>
                    </div>
                    <p>Nintendo • Plataforma</p>
                </div>
            </article>

            <article class="card">
                <img src="imgDeco/eutruck.png" alt="Euro Truck" loading="lazy">
                <div class="card-info">
                    <div class="card-topo">
                        <h3>Euro Truck</h3>
                        <span>⭐ 8.7</span>
                    </div>
                    <p>Simulação • PC</p>
                </div>
            </article>

            <article class="card">
                <img src="imgDeco/giftNintendo.png" alt="Gift Card Nintendo" loading="lazy">
                <div class="card-info">
                    <div class="card-topo">
                        <h3>Gift Nintendo</h3>
                        <span>⭐ 9.2</span>
                    </div>
                    <p>Gift Card • Nintendo</p>
                </div>
            </article>

            <article class="card">
                <img src="imgDeco/giftPlaystation.png" alt="Gift Card Playstation" loading="lazy">
                <div class="card-info">
                    <div class="card-topo">
                        <h3>Gift PlayStation</h3>
                        <span>⭐ 9.1</span>
                    </div>
                    <p>Gift Card • PlayStation</p>
                </div>
            </article>

            <article class="card">
                <img src="imgDeco/giftXbox.png" alt="Gift Card Xbox" loading="lazy">
                <div class="card-info">
                    <div class="card-topo">
                        <h3>Gift Xbox</h3>
                        <span>⭐ 9.0</span>
                    </div>
                    <p>Gift Card • Xbox</p>
                </div>
            </article>

            <article class="card">
                <img src="imgDeco/underbanner.png" alt="Mario Odyssey" loading="lazy">
                <div class="card-info">
                    <div class="card-topo">
                        <h3>Mario Odyssey</h3>
                        <span>⭐ 9.0</span>
                    </div>
                    <p>Nintendo • 2017</p>
                </div>
            </article>

        </section>

    </main>

    <?php

    $ord = $_GET['o'] ?? "n";
    $pesq = $_GET['pesquisa'] ?? null;
    ?>


    <div id="corpo">
        <?php require_once "topo.php"; ?>
        <?php require_once "includes/funcoes.php"; ?>
        <h1>Escolha seu próximo jogo</h1>
        <?php
        ?>
        <form method="get" action="index.php" id="formID">
            Ordenar <a href="index.php?o=m&pesquisa=<?php echo  $pesq; ?>">Cód</a>
            <a href="index.php?o=p&pesquisa=<?php echo $pesq; ?>"> Produtora</a>
            <a href="index.php?o=n1&pesquisa=<?php echo $pesq; ?>"> Nota Alta </a>
            <a href="index.php?o=n2&pesquisa=<?php echo $pesq; ?>"> Nota Baixa</a>
            <a href="index.php">Mostrar Todos</a>
            <input type="text" name="pesquisa" id="pid">
            <input type="submit" value="Pesquisar" id="btnOK">
        </form>
        <table class='listagem'>
            <?php
            $t = "select j.cod,j.nome,j.capa, g.genero, p.produtora from jogos j
            join generos g on j.genero = g.cod
            join produtoras p on j.produtora = p.cod ";
            $t .=  "where j.nome like '%$pesq%' or p.produtora like '%$pesq%' or g.genero like '%$pesq%' ";
            switch ($ord) {
                case 'n':
                    $t .= "ORDER BY nome;";
                    break;
                case 'p':
                    $t .= "ORDER BY produtora;";
                    break;
                case 'n1':
                    $t .= "ORDER BY nota DESC;";
                    break;
                case 'n2':
                    $t .= "ORDER BY nota ASC;";
                    break;
            }

            $busca = pg_query($conn, $t);
            if (!$busca) {
                echo "deu m";
            } else {
                while ($reg = pg_fetch_object($busca)) {
                    echo "<tr><td id='imgSolo'><img src=" . thumb($reg->capa) . " id='super'></td><td><a id='hyperlink' href='detalhes.php?cod=$reg->cod'>$reg->nome </a>[$reg->genero][$reg->produtora]</td></tr>";
                    if (isAdmin()) {
                        /*  echo "<td><i class='material-icons'>add_circle</i> | <i class='material-icons'>edit</i>| <i class='material-icons'>delete</i>"; */
                    } elseif (isEditor()) {
                        /*   echo "<td><i class='material-icons'>edit</i>"; */
                    }
                }
            }
            ?>
        </table>
    </div>
</body>
<?php require_once 'rodape.php';



?>
<script src="script.js"></script>
</html>