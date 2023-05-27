<?php
    //Incluido a conexao
    include_once 'conexao.php'; //Recebe os dados dos arquivo conexão

    //Deletando os dados  do formulário
    if (isset($_GET['id'])){

  
        //montando a Query
        $sql = "DELETE FROM `equipamento` WHERE  id_cadastro = ". $_GET['id'];

        //Enviado os dados para o BD

        $result = mysqli_query ($conn, $sql) or die("Alguem erro ocorreu na Inserção.<br>".mysqli_error($conn));

        if ($result) {
            header("location: listagem.php");
        }
    }else{
        echo "Não existe ID para ser excluido!";
    }

?>
