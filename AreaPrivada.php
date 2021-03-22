<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("localhost: index.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Pagina do Jogo</title>
</head>

<body>
    <header id="head">
        <img src="./img/oap2.png" alt="">
        <nav class="navegation">
            <ul>
                <li>Home</li>
                <li>Dowload</li>
                <li>Trailer</li>
                <li><a class="sair" href="Sair.php">Sair</a></li>

            </ul>
        </nav>

    </header>
    <main id="conteudo">
        <section class="background1">
            <div class="jogo-container">
                <h1>NOME DO JOGO</h1>
                <h4>Baixar</h4>
            </div>
        </section>
        <section class="textos">
            <div class="texto1">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sequi dignissimos magni suscipit officiis repudiandae illum est ducimus tenetur ipsum saepe, ex cupiditate dicta consequatur facere quos ea? Reprehenderit, minus?</p>
            </div>
            <div class="texto2">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad beatae officia exercitationem natus dolorem commodi sequi tempore aperiam. Adipisci perspiciatis cumque non ab totam at voluptatibus? Voluptatibus fugit neque tempore.</p>
            </div>
        </section>
    </main>
</body>


</html>