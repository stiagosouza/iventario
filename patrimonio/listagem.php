<?php
		include_once'conexao.php';
		$sql = "SELECT * FROM `equipamento`";

		$result = mysqli_query ($conn, $sql) or die("Alguem erro ocorreu na Inserção.<br>".mysqli_error($conn));

		$equipamento;
		while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			$equipamento[] = $linha;
		}
?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Cadastros</title>

         <!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<!-- font-awesome -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">

	</head>

	<style>

		body{
			background: linear-gradient(to right,skyblue,dodgerblue);
          }
		</style>
 <body>

	<div class="container">
				<div class="row">
					<div class="col-1"></div>
					<div class="col-10">
						<hr><h3  class="text-center"><strong>Equipamentos Fujiday</strong> </h3><hr>
						<br><br>
						<table id="myTable" class="text-center table table-striped">
						
							<thead class="text-center thead-dark">
								<th> Name </th>
								<th> Status </th>
								<th> Equipamento</th>
								<th> Modelo </th>
								<th>Tecnico </th>
								<th> Atualização</th>
								<th> NS </th>
								<th> Patrimônio </th>
							</thead>
							<tbody>
								
								
							<?php foreach ($equipamento as $e): ?>
								<tr>
									<td><?=$e['cadastro_HostName'];?></td>
									<td><?=$e['cadastro_status'];?></td>
									<td><?=$e['cadastro_equipamento'];?></td>
									<td><?=$e['cadastro_modelo'];?></td>
									<td><?=$e['cadastro_tecnico'];?></td>
									<td><?=$e['cadastro_atualizacao'];?></td>
									<td><?=$e['cadastro_ns'];?></td>
									<td><?=$e['cadastro_patrimonio'];?></td>
									
								    <td><a href="delete.php?id=<?=$e['id_cadastro'];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
									
								</tr>
							
							   <?php endforeach; ?>	
							</tbody>
						</table>
						<br><br>
								<a href="logout.php" class="btn btn-warning btn-md" > SAIR </a>
								<a href="form.php" class="btn btn-primary"> Cadastrar Outro </a>
						
					</div>
					<div class="col-1"></div>
				</div>
			</div>
			

			<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
			<script type="text/javascript" src="//cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>

			<script type="text/javascript">
				$(document).ready( function () {
					$('#myTable').DataTable();
				});
			</script>	

  </body>

</html>