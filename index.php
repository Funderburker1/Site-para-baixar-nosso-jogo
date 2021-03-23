<?php
require_once 'CLASSES/usuarios.php';
$u = new Usuario;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <title>Tela de Login</title>
</head>

<body>
    <main id="background">
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="square" style="--i:5;"></div>
            <div class="square" style="--i:6;"></div>
            <div class="square" style="--i:7;"></div>

            <div id="login_container">
                <h1 class="login_tittle">Login</h1>
                <form method="POST">
                    <input type="email" name="email" placeholder="E-mail">
                    <span class="login_line"></span>
                    <input type="password" name="senha" placeholder="Senha">
                    <span class="login_line"></span>
                    <input class="botao" type="submit" value="Login">
                    <p class="login_link">Ainda não é inscrito? <a href="cadastro.php">Clique aqui</a></p>
                </form>
            </div>

            <?php

            if (isset($_POST['email'])) {

                $email = addslashes($_POST['email']);
                $senha = addslashes($_POST['senha']);

                if (!empty($email) && !empty($senha)) {
                    $u->conectar("projeto_login", "localhost", "root", "");
                    if ($u->msgErro == "") {
                        if ($u->logar($email, $senha)) {
                            header(("location: AreaPrivada.php"));
                        } else {
            ?>
                            <div id="login-erro">
                                E-mail e/ou senha estão incorretos!
                            </div>
                        <?php
                        }
                    } else {
                        ?>
                        <div id="login-erro">
                            <?php echo "Erro: " . $u->msgErro; ?>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div id="login-erro">
                        Preencha todos os campos!
                    </div>
            <?php
                }
            }
            ?>

    </main>


</body>

</html>