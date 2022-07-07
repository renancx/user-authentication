<?php
    session_start();
    if(!isset($_SESSION['autenticado'])){
        header('Location: login.php');
        exit();
    }
?>


<html>
    <head>
        <title>Página principal</title>
    </head>

    <body>
        <h1>Muito bem, agora você está logado</h1>

        <p>Vai para outra página: <a href="outro.php">Clique aqui</a> </p>
        <p>Vai para página qualquer: <a href="qualquer.php">Clique aqui</a> </p>
        <br><br><br>
        <p>Para fazer logout: <a href="logout.php">Clique aqui</a></p>
    </body>
</html>