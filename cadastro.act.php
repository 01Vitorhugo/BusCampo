<?php
    extract($_POST);

    require('connect.php');

    $senha = md5($senha);

    if(mysqli_query($con,"INSERT INTO `tb_locador` (`nome_cliente`,`email`,`cpf/cnpj`,`telefone`,`senha`) 
    VALUES ('$nome', '$email','$doc','$tel','$senha')")){
        $msg = "Cadastro concluído";
    }else{
        $msg = "Erro ao concluir cadastro";
    }

    session_start();
        $_SESSION['msg'] = $msg;

    header("location:cadastro.php");
?>