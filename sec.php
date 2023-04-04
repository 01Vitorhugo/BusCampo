<?php
@session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
    header("location:login.php");
}else if($_SESSION['tipo'] == false){
    header("location:login.php");
}
?>