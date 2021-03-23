<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("localhost: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/footer.css">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Pagina do Jogo</title>
</head>

<body>
    <div class="container">

        <div class="hamburguer">
            <div class="line" id="line1"></div>
            <div class="line" id="line2"></div>
            <div class="line" id="line3"></div>
            <span>Fechar</span>
        </div>

        <header id="home">
            <div class="img-wrapper">

                <img src="./img/planet-illustration.webp" alt="backgraund">

            </div>

            <div class="banner">
                <div class="capa-jogo">
                    <img class="capa" src="./img/darksidersii.png" alt="">
                </div>
                <div>
                    <h1>Nome do Jogo</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis sequi illum sint in nam consectetur fuga adipisci voluptatibus accusamus eligendi quae ducimus quis.</p>
                    <input id="dowload-jogo" type="button" value="Baixar">
                </div>

            </div>
        </header>

        <aside class="sidebar">
            <nav>
                <ul class="menu">
                    <li class="menu-item"><a href="#cont-texto" class="menu-link">Sobre</a></li>
                    <li class="menu-item"><a href="#cont-trailer" class="menu-link">Trailer</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Dowload</a></li>
                    <li class="menu-item"><a href="#score" class="menu-link">Score</a></li>
                    <li class="menu-item"><a href="Sair.php" class="menu-link">Sair</a></li>
                </ul>
            </nav>
            <div class="social-media">
                <a href="#"><i class="lab la-facebook-f"></i></a>
                <a href=""><i class="lab la-github-alt"></i></a>
                <a href=""><i class="lab la-twitter"></i></a>
            </div>
        </aside>

        <section id="cont-texto">
            <div class="caixa-texto">
                <h1>Sobre</h1>
                <p class="texto-jogo">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor veniam quisquam porro ad et, architecto beatae? Aut, excepturi! Nesciunt praesentium ea blanditiis debitis necessitatibus possimus repellendus tempore ad enim optio!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor veniam quisquam porro ad et, architecto beatae? Aut, excepturi! Nesciunt praesentium ea blanditiis debitis necessitatibus possimus repellendus tempore ad enim optio!
                </p>
            </div>
        </section>

        <section id="cont-trailer">
            <div class="trailer-jogo">
                <h1 class="t-trailer">Assista ao trailer do nosso jogo</h1>
                <iframe class="video-container" src="https://youtube.com/embed/u548qyxRTBU" allowfullscreen></iframe>
        </section>

        <section id="score">
            <div class="seu-score">
                <h1>Seu Score é de : 2000</h1>
            </div>
        </section>

        <footer>
            <div class="footer-content">
                <p>
                    Coyright &copy; 2021 - Todos os direitos reservados
                </p>
                <div class="social-list">
                    <ul>
                        <li class="li"><a href=""><i class="lab la-facebook-f"></i></a></li>
                        <li class="li"><a href=""><i class="lab la-instagram"></i></a></li>
                        <li class="li"><a href=""><i class="lab la-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</body>
<script src="menu.js"></script>

</html>