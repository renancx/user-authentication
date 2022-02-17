<?php
    session_start();
    
    if(@$_POST['user']=='renan'&&@$_POST['password']==123){
        $_SESSION['autenticado']=1;
        header('Location: index.php');
        exit();
    }
?>
<html>
    <head>
        <title>Página de login</title>
    </head>
    <body>
        <form action="login.php" method="post">
            <input name="user" type="text">
            <input name="password" type="password">
            <input type="submit" value="Send">
        </form>
    </body>
</html>