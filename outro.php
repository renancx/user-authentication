<?php
    session_start();
    if(!isset($_SESSION['autenticado'])){
        header('Location: login.php');
        exit();
    }

?>
<html>
    <head>
        <title>Outra página</title>
    </head>
    <body>
        <h1>Boas vindas à uma OUTRA página!</h1>
        <p>Voltar para a página principal: <a href="index.php">Clique aqui</a> </p>
    </body>
</html>