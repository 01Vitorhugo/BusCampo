<?php
    session_start();                         
    require('connect.php');
    extract($_POST);
    extract($_FILES);

    if($old_img1 == ""){
      $endereco1 = "imgsquadras/".md5(time()).".jpg";
    }else{
      $endereco1 = $old_img1; 
    }
    if($imagem1['name'] != ""){
      move_uploaded_file($imagem1['tmp_name'],$endereco1);
    }

    if($old_img2 == ""){
      $endereco2 = "imgsquadras/".md5(time()+1).".jpg";
    }else{
      $endereco2 = $old_img2; 
    }
    if($imagem2['name'] != ""){
      move_uploaded_file($imagem2['tmp_name'],$endereco2);
    }

    if(mysqli_query($con, "UPDATE `tb_local` SET `nome_local` = '$nome_local', `desc_local` = '$desc', `telefone` = '$tel', `rua` = '$rua',`numero` = '$numero', `bairro` = '$bairro', `cep` = '$cep',`cidade` = '$cidade', `estado` = '$estado' , `img1` = '$endereco1' , `img2` = '$endereco2' WHERE `tb_local`.`id_local` = '$id_local';")){
      $msg = "<p class = sucesso>Alterado com sucesso</p>";
    }else{
      $msg = "<p class = erro>Erro na alteração</p>";
    }
    $_SESSION['msg'] = $msg;     
    $id = $_SESSION['id'];
                         
    header("location:meu_local.php?id_cliente=$id");   
?>