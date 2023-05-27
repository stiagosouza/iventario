<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>


<?php
session_start();
if(isset($_SESSION['Fujiday']) == false){
   header("location: index.php?msg=acesso_nao_permetido");
}
echo "Você ja esta logado!"
?>
<br><br>
<a href="form.php" class="btn btn-info btn-md"> Cadastrar </a>
<a href="listagem.php" class="btn btn-info btn-md"> Listar </a>
<a href="logout.php" class="btn btn-info btn-md" > SAIR </a>