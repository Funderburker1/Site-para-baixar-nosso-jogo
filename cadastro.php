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
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <title>Tela de Cadastro</title>
</head>

<body>
    <main id="background">
        <div id="login_container">
            <h1 class="login_tittle">Cadastro</h1>
            <form method="POST">
                <input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
                <span class="login_line"></span>
                <input type="text" name="telefone" placeholder="Tel" maxlength="30">
                <span class="login_line"></span>
                <input type="email" name="email" placeholder="E-mail" maxlength="40">
                <span class="login_line"></span>
                <input type="password" name="senha" placeholder="Senha" maxlength="15">
                <span class="login_line"></span>
                <input type="password" name="confSenha" placeholder="Confirmar senha" maxlength="15">
                <span class="login_line"></span>
                <input class="botao" type="submit" value="Cadastrar">
            </form>
        </div>

        <?php
        //verificar se clicou no botao
        if (isset($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $telefone = addslashes($_POST['telefone']);
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            $confirmarSenha = addslashes($_POST['confSenha']);
            //verificar se esta preenchido
            if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha)) {
                $u->conectar("projeto_login", "localhost", "root", "");
                if ($u->msgErro == "") //se tiver vazia, esta tudo certo
                {
                    if ($senha == $confirmarSenha) {
                        if ($u->cadastrar($nome, $telefone, $email, $senha)) {
        ?>
                            <div id="msg-sucesso">
                                Cadastrado com sucesso!
                            </div>
                        <?php

                        } else {
                        ?>
                            <div class="msg-erro">
                                E-mail ja cadastrado
                            </div>
                        <?php

                        }
                    } else {
                        ?>
                        <div class="msg-erro">
                            senha e confirmar senha nao correspodem!
                        </div>
                    <?php

                    }
                } else {
                    ?>
                    <div class="msg-erro">
                        <?php echo "Erro: " . $u->msgErro; ?>
                    </div>
                <?php
                }
            } else {
                ?>
                <div class="msg-erro">
                    Preencha todos os campos!!
                </div>
        <?php

            }
        }

        ?>

    </main>

</body>

</html>