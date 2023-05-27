<?php

session_start();
if(isset($_SESSION['Fujiday']) == false){
   header("location: index.php?msg=acesso_nao_permetido");
}

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Cadastro Patrimônio Fujiday</title>
    <!-- Bootstrap -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <!-- font-awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">



</head>
<style>

body{
    background: linear-gradient(to right,skyblue,dodgerblue);
  }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-5">
                <hr class=" pr">
                <h3 class="text-center"><strong>Cadastro de Patrimônio</strong></h3>
                <hr>

                <form action="recebe.php" method="POST">
                    <div class="row">
                        <div class="col-6">
                            <label>Host Name </label><br>
                            <input type="text" class="form-control" name="HostName" placeholder="Informe  H/N"><br>
                        </div>
                        <div class="col-6"> 
                            <label>Status</label><br>
                            <input type="tex" class="form-control" name="status" placeholder="Ativo/Beckup/Desativado "><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label>Equipamento </label><br>
                            <input type="text" class="form-control" name="equipamento" placeholder=" Tipo de Equipamento"><br>
                        </div>      
                        <div class="col-6">
                            <label>Modelo</label><br>
                            <input type="text" class="form-control" name="modelo" placeholder="Informe o modelo"><br>
                        </div>

                    <label>Técnico Responsável </label><br>
                    <input type="text" class="form-control" name="tecnico" placeholder="Informe o Nome"><br>

                    <div class="row">
                        <div class="col-5">
                            <label>Atualização </label><br>
                            <input type="date" class="form-control" name="atualizacao"><br>
                        </div>

                        <div class="col-3">
                            <label> NS </label><br>
                            <input type="text" class="form-control" name="ns" placeholder=""><br>
                        </div>

                        <div class="col-3">
                            <label>Patrimônio </label><br>
                            <input type="text" class="form-control" name="Patrimonio" placeholder=""><br>
                        </div>


                    </div>

                    <div>
                        <p class="text-start ">
                            <button class="btn btn-success"> <i class="fa fa-send"></i> Enviar Dados </button>
                            <a href="listagem.php" class="btn btn-secondary"> Ver listagem </a>
                        </p>
                        
                    </div>
                </form>
            </div>

            <div class="col-6"></div>
        </div>
    </div>
</body>

</html>