<?php
@session_start();
$_SESSION['login'] = false;
unset($_SESSION['nome']);
unset($_SESSION['id']);
$login['nome'] = "";
header("location:index.php");
?>