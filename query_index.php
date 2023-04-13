<?php
require('connect.php');

$quadras = mysqli_query($con, "SELECT * FROM `tb_local` INNER JOIN `tb_categoria` ON `tb_local`.`id_categoria` = `tb_categoria`.`id_categoria` INNER JOIN `tb_estado` ON `tb_local`.`id_estado` = `tb_estado`.`id_estado` INNER JOIN `tb_locador` ON `tb_local`.`id_cliente` = `tb_locador`.`id_cliente` WHERE `id_local` = 1");

$quadra1 = mysqli_fetch_array($quadras);

$quadras = mysqli_query($con, "SELECT * FROM `tb_local` INNER JOIN `tb_categoria` ON `tb_local`.`id_categoria` = `tb_categoria`.`id_categoria` INNER JOIN `tb_estado` ON `tb_local`.`id_estado` = `tb_estado`.`id_estado` INNER JOIN `tb_locador` ON `tb_local`.`id_cliente` = `tb_locador`.`id_cliente` WHERE `id_local` = 2");

$quadra2 = mysqli_fetch_array($quadras);

$quadras = mysqli_query($con, "SELECT * FROM `tb_local` INNER JOIN `tb_categoria` ON `tb_local`.`id_categoria` = `tb_categoria`.`id_categoria` INNER JOIN `tb_estado` ON `tb_local`.`id_estado` = `tb_estado`.`id_estado` INNER JOIN `tb_locador` ON `tb_local`.`id_cliente` = `tb_locador`.`id_cliente` WHERE `id_local` = 17");

$quadra3 = mysqli_fetch_array($quadras);
?>