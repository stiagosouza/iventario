<?php

   session_start();

   if(isset($_SESSION['Fujiday'])){
      $sessao = $_SESSION['Fujiday'];
      header("location: ".$sessao['tipoAcesso'].'.php');
   }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href=".\patrimonio\css\indexStyle.php">

    </head>
    <body>

        <div id="login">
        <h3 class="text-center text-white pt-5">Login </h3>
                <div class="container">
                <?php
                  if(isset($_GET['msg'])){
                     switch($_GET['msg']){
                        case 'usuario_incorreto':
                           $texto = "Email não encontrado!";
                           $cor = "danger";
                        break;

                        case 'senha_incorreta':
                           $texto = "Senha Incorreta";
                           $cor = "danger";
                        break;

                        case 'sessao_encerrada':
                           $texto = "Volte sempre !!!";
                           $cor = "success";
                        break;
                     }
               ?>
                     <div class="alert alert-<?=$cor;?> alert-dismissible fade show" role="alert">
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
               <?php } ?>

               <form action="login.php" method="POST">
                    <div id="login-row" class="row justify-content-center align-items-center">

                        <div id="login-column" class="col-md-6">
                            <div id="login-box" class="col-md-12">
                                <form id="login-form" class="form" action="login.php" method="POST">
                                    <h3 class="text-center text-info">Login</h3>
                                    <div class="form-group">
                                        <label for="username" class="username">Username:</label><br>
                                        <input type="usuario" name="usuario" id="username" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="password">Password:</label><br>
                                        <input type="password" name="senha" id="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="remember-me" class="text-info"><span>Me Lembre</span> <span><input id="remember-me" name="Lembrar" type="checkbox"></span></label><br>
                                        <input type="submit" name="Logar" class="btn btn-info btn-md" value="Entrar">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 </body>
 </html>