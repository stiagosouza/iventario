<?php
    //Acesso master
    $master['usuario'] = "administrador";
    $master['senha'] = "Oncolog1@!";
    $master['tipoAcesso'] = "form";

    //Receber os dados do Formulário
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    //Validar o acesso
    if($usuario != $master['usuario']){
        header("location: index.php? msn=usuario_icorreto");

    }elseif($senha != $master['senha']){
        header("location: index.php? msn=senha_icorreto");

    }else{
        session_start();
    //Acesso
        $_SESSION['Fujiday'] = $master;
    //
        header("location: index.php");
    }


?>