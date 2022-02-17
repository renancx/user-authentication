<?php
    session_start();
    if(!isset($_SESSION['autenticado'])){
        echo 'Nao esta logado';
        exit();
    }
    unset($_SESSION['sessao']);
?>

<html>
    <head>
        <title>Logout</title>
    </head>
    <body>
        <p>Para voltar para a página de login: <a href="login.php">Clique aqui</a></p>
    </body>
</html>