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
    <title>Document</title>
</head>

<body>
    <h1>E AE, GAY!</h1>
</body>
<a href="Sair.php">SAIR</a>

</html>