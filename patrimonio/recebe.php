<?php
    //Incluido a conexao
    include_once 'conexao.php'; //Recebe os dados dos arquivo conexão

    //Recebendo os dados  do formulário
    $HostName = $_POST['HostName'];
    $status = $_POST['status'];
    $Equipamento = $_POST['equipamento'];
    $Modelo = $_POST['modelo'];
    $Técnico = $_POST['tecnico'];
    $Atualização = $_POST['atualizacao'];
    $NS = $_POST['ns'];
    $Patrimonio = $_POST['Patrimonio'];


    //montando a Query
    $sql = "INSERT INTO `equipamento`(`cadastro_HostName`,`cadastro_status`,`cadastro_equipamento`,`cadastro_modelo`,`cadastro_tecnico`,`cadastro_atualizacao`,`cadastro_ns`,`cadastro_patrimonio`) VALUES ('$HostName','$status','$Equipamento','$Modelo','$Tecnico',' $Atualização',' $NS','$Patrimonio');";

    //Enviado os dados para o BD

    $result = mysqli_query ($conn, $sql) or die("Alguem erro ocorreu na Inserção.<br>".mysqli_error($conn));

    if ($result) {
        header("location: listagem.php");
    }

?>
