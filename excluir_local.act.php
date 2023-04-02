<?php
    require('sec.php');
    $id_local = $_GET['id_local'];
    require('connect.php');

    if(mysqli_query($con,"DELETE FROM `tb_local` WHERE `tb_local`.`id_local` = $id_local")){
        $msg = "<p class = sucesso>Excluido com sucesso!</p>";
    }else{
        $msg = "<p class = erro>Erro ao excluir!</p>";
    }

    @session_start();
    $_SESSION['msg'] = $msg;

    header("location: local_list.php");
?>