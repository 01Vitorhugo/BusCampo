<?php
session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
    $_SESSION['id'] = '0';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- <link rel="stylesheet" href="css/listcad.css"> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/list.css">
    <title>Meus Locais</title>
</head>
<body>
    <div class="container-fluid" id="container">
        <div class="row">
            <div class="col-12">
                <h1 >Minhas locações</h1>
            </div>
        </div>
    </div>

    <div class="seta-cima" id="seta">
       <a href="#container"><img src="imgs/seta-para-cima.png" alt=""></a>
    </div>

    <script>
        window.addEventListener("scroll", function() {
    var elemento = document.getElementById("seta");
    var posicao = window.scrollY;
    if (posicao > 350) {
      elemento.style.display = "block";
    } else {
      elemento.style.display = "none";
    }
  });
    </script>


    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <?php
        require('connect.php');
        @include('menu.php');
        extract($_GET);
        // var_dump($_GET);    
        echo "<div class =\"box\">";
        $quadras = mysqli_query($con, "SELECT * FROM `tb_local` INNER JOIN `tb_categoria` ON `tb_local`.`id_categoria` = `tb_categoria`.`id_categoria` WHERE `tb_local`.`id_cliente` = '$id_cliente' order by `nome_local`");
        while($quadra = mysqli_fetch_array($quadras)){
        echo "<div class =\"sc\">";
         echo "<p id= pag>Modalidade: $quadra[desc_categoria] </p>";
        echo "<p id= pag>Nome: $quadra[nome_local] </p>";
          if($quadra['img1'] != ""){
        echo "<p><img src=$quadra[img1]></p>";}
        // if($quadra['img2'] != ""){
        // echo "<p><img src=$quadra[img2]></p>";}

         echo "<div class =\"box-end\">";
        //echo "<p id= pag>Local: $quadra[desc_local] </p>"
        echo "<p id= pag>Telefone: $quadra[telefone] </p>";
        echo "<p id= pag>Cep: $quadra[cep] </p>";
        echo "<p id= pag>Rua: $quadra[rua] </p>";
        echo "<p id= pag>Estado: $quadra[estado] </p>";
        echo "</div>";
      
        if($_SESSION['tipo'] == true && $_SESSION['id'] == $quadra['id_cliente']){
            echo"<p><a href=alterar.php?id_local=$quadra[id_local]>Alterar</a></p>";
            echo"<p><button onclick=confirmar($quadra[id_local])>Deletar</button></p>";
        }
        echo "</div>";
        }
        echo "</div>"; 
    ?>
    <script>
        function confirmar(id_local){
            resposta = confirm("Deseja excluir o registro" +" "+id_local+"?");

            if(resposta == true){
                window.location = "excluir_local.act.php?id_local="+id_local;
            }

        }
    </script>



</body>
</html>