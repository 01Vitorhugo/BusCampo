<?php
@session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
    header("location:login.php");
}else if($_SESSION['tipo'] == true){
    header("location:login.php");
}
?>