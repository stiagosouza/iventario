<?php
 
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cadastos</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
  </head>
  <body>

  <div class="container">
			<div class="row">
				<div class="col-1"></div>
				<div class="col-10">
					<hr><h3> Listagem dos Cadastros </h3><hr>
					<table id="myTable" class="table table-striped table-bordered">
						<thead>
							<th> Nome </th>
							<th> Email </th>
							<th> Endereço</th>
							<th> CPF </th>
							<th> Data Nascimento </th>
							<th> Contato </th>
							<th> Ações </th>
						</thead>
						<tbody>
							<?php foreach ($dados as $d): ?>
								<?php $cadastro = explode(" - ", $d); ?>
								<tr>
									<td><?=$cadastro[0];?></td>
									<td><?=$cadastro[1];?></td>
									<td><?=$cadastro[2];?></td>
									<td><?=$cadastro[3];?></td>
									<td><?=$cadastro[4];?></td>
									<td><?=$cadastro[5];?></td>
									<td>
										<a href="delete.php?id=<?=$c['id_cadastro'];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<div class="col-1"></div>
			</div>
		</div>

    <a href="form.php" class="btn btn-primary"> Cadastrar Outro </a>
		
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script type="text/javascript" src="//cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>

		<script type="text/javascript">
			$(document).ready( function () {
			    $('#myTable').DataTable();
			});
		</script>	

</body>

</html>