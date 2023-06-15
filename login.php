<?php @session_start(); ?>
<?php
@include('menu.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@700&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&family=Teko:wght@600&display=swap" rel="stylesheet">

<body>
    <div class="menu"></div>
    <div class="form">
    
        <div class="txt">
            <h3>QUE COMECE OS</h3>
            <h1>JOGOS</h1>
        </div>
        <div class="dados">
            <div class="formula">
                <div class="name-formu">
                    <h2>LOGIN</h2>
                </div>
                <form action="login.act.php" method="post">

                
            
            <?php
                if(isset($_SESSION['msg_true'])){
                    echo "<div class=msg>";
                    echo "<div class=msg-true>";
                    echo $_SESSION['msg_true'];
                    echo "</div>";
                    echo "</div>";
                    unset($_SESSION['msg_true']);

                }else if(isset($_SESSION['msg_false'])){
                    echo "<div class=msg>";
                    echo "<div class=msg-error>";
                    echo $_SESSION['msg_false'];
                    echo "</div>";
                    echo "</div>";
                    unset($_SESSION['msg_false']);

                }
            ?>
           
                    <p>email <input type="text" name="email" required></p>
                    <p>senha <input type="password" name="senha" required></p>
                    <p><input type="submit" id="botao" value="Entrar"></p>

                    </form>
                    <div class="logar">Não tem cadastro?<a href="tela_cad.php">Cadastrar</a></div>
            </div>
            
           
            
        </div>
    </div>



</body>

</html>