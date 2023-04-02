<?php @session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>*OVERLAY LOGIN*</h1>

    <form action="login.act.php" method="post">
        <p>email <input type="text" name="email"></p>
        <p>senha <input type="password" name="senha"></p>
        <p><input type="submit" id="botao" value="Entrar"></p>
    </form>
</body>
</html>