<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Inventariado</title>
	
	<link rel="stylesheet" type="text/css" href="styles/normalize.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="styles\jquery-ui-1.10.3.custom.css">
	<link rel="stylesheet" type="text/css" href="styles/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">

	<script src="scripts/jquery-1.9.1.js"></script>
	<script src="scripts/functions.js"></script>
	<script src="scripts/prefixfree.min.js"></script>
	<script src="scripts/jquery.dataTables.js"></script>
	<script src="scripts/jquery-ui-1.10.3.custom.js"></script>
	<script src="scripts/jquery-barcode.js"></script>
</head>
<body>
	<div id="mainWrapper">
		<header>
			<h1>Sistema de Inventario</h1>
		</header>
		<nav>
			<ul class="nav nav-tabs">
				<li class="active"><a href="#">Registrar</a></li>
				<li><a href="#">Buscar</a></li>
			</ul>
		</nav>
		<header id="titleContent">Registrar Equipamento</header>
		<section>
			<article id="aRegister">
				<div class="row-fluid">
					<div class="span6">
						<?php include 'form.php'; ?>
					</div>
					<div class="span6">
						<div class="contentBarcode">
							<div class="barCode">
								<header><h4> Patrimônio </h4></header>
								<canvas id="registerBarcode" width="115" height="70"></canvas>
							</div>
							<a href="#" class="btn btn-primary">Guardar</a>
							<div class="alert"></div>
						</div>
					</div>
				</div>
			</article>
			<article id="aSearch">
				<table id="tSearch" cellspacing="1">
					<caption>Listado de artículos</caption>
					<thead>
						<tr>
							<th>Id</th>
							<th>Local</th>
							<th>Equipamento</th>
							<th>Modelo</th>
							<th>N/S</th>
							<th>marca</th>
							<th>Descrição</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>4</td>
							<td>Area 1</td>
							<td>Soldier</td>
							<td>Edgardo</td>
							<td>1234</td>
							<td>10</td>
							<td>Articulo y descripción</td>
						</tr>
						<tr>
							<td>6</td>
							<td>Area 2</td>
							<td>SoldierCorp</td>
							<td>Edgardo</td>
							<td>1234</td>
							<td>10</td>
							<td>Articulo y descripción</td>
						</tr>
					</tbody>
				</table>
				<div class="row-fluid">
					<div class="span6">
						<h3>Editar -<span></span></h3>
						Última atualização: <i></i>
						<?php include 'form.php'; ?>
					</div>
					<div class="span6">
						<div class="contentBarcode">
							<div class="barCode">
								<header><h4>Patrimônio</h4></header>
								<canvas id="searchBarcode" width="115" height="70"></canvas>
							</div>
							<a href="#" class="btn btn-primary">Guardar</a>
							<div class="alert"></div>
						</div>
					</div>
				</div>
			</article>
		</section>
	</div>
	<footer>
		<p>
			Fujiday
		</p>
	</footer>
</body>
</html>