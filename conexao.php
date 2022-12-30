<?php
    if($_COOKIE['username'] == '' && $_COOKIE['password'] == ''){
        echo "<script>window.location.replace('login.php?mensagem=erro');</script>";
    }
    $usuario = $_COOKIE['username'];
    $data_atual = date("Y-m-d h:i");
?>