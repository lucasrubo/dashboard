<?php
    include('conn.php');

    $usuario = $_POST['username'];
    $senha = $_POST['password'];

    if($usuario == "admin" && $senha == "123"){
        $_SESSION['username'] = $usuario;
        if($_POST['lembrar'] == 'on'){
            setcookie("username", $usuario, time()+3600*24*30*12*5);  
            setcookie("password", $senha, time()+3600*24*30*12*5);  
        }else{
            setcookie("username", $usuario, time()+3600);  /* expira em 1 hora */
            setcookie("password", $senha, time()+3600);  /* expira em 1 hora */
        }
        echo "Logado com sucesso";
    }else{
        echo "Usuário ou senha incorretos";
    }
?>