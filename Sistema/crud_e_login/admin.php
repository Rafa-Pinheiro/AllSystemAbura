<?php
session_start();
include_once('../conection/conexao.php');
if ((!isset($_SESSION['rm']) == true) and (!isset($_SESSION['senha']) == true)) {
	unset($_SESSION['rm']);
	unset($_SESSION['senha']);
	header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Raylla S." />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="../assets/favicon/site.webmanifest">

	<!-- BOOTSTRAP AND CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/estilo.css">

	<title>Admin - Registros</title>

	<style>
		h1 {
			text-align: center;
			margin-top: 20px;
			color: white;
		}
		.span-sair {
			background-color: #DC143C;
			color: white;
			font-size: x-large;
			padding: 8px;
			text-transform: uppercase;
			border-radius: 8px;
			text-decoration: none;
		}
		#span-sair {
			text-decoration: none;
		}

		#isso {
			margin-left: 50px;
			color: black;
		}
	</style>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Abura</a>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
					</li>
				</ul>
				<a href="../crud_e_login/encerrar_session.php" id="span-sair">
					<span class="span-sair">sair</span>
				</a>
			</div>
		</div>
	</nav>
	<h1>Registros</h1>

	<div>
		<a id="isso" href="cadastrar.php">
			<img style="width: 3vw; height: 6vh;" src="../img/adicionar.png">
			<span id="insert">Inserir novo registro</span>
		</a>

		<?php
		include('../conection/conexao.php');
		$consulta = "SELECT * FROM tb_funcionario";
		$result = $mysqli->query($consulta);
		?>

		<div class="m-5">
			<table class="table text-white table-bg">
				<thead>
					<tr>
						<th scope="col">RM</th>
						<th scope="col">NOME</th>
						<th scope="col">CPF</th>
						<th scope="col">CRM</th>
						<th scope="col">CNH</th>
						<th scope="col">VECIMENTO DA CNH</th>
						<th scope="col">SENHA</th>
						<th scope="col">NASCIMENTO</th>
						<th scope="col">CARGO</th>
						<th scope="col">OPÇÕES</th>
					</tr>
				</thead>

				<style>
					body {
						background-color: rgb(20, 147, 220);
					}

					.table-bg {
						background-color: rgba(0, 0, 0, 0.5);
						border-radius: 5px;
					}

					tr,
					th {
						text-align: center;
					}
				</style>

				<tbody>

					<?php
						while ($row = $result->fetch_object()) {
							echo "<tr>";
							echo "<td> $row->cd_rm_funcionario </td>";
							echo "<td> $row->nm_funcionario </td>";
							echo "<td> $row->cd_cpf </td>";
							echo "<td> $row->cd_crm_medico </td>";
							echo "<td> $row->nr_cnh </td>";
							echo "<td> $row->dt_vencimento_cnh </td>";
							echo "<td> $row->ds_senha </td>";
							echo "<td> $row->dt_nasc </td>";
							echo "<td> $row->id_cargo </td>";
							echo "<td>
									<a href='apagar.php?funcionario=".$row->cd_rm_funcionario."'><img style='width: 2vw; height: 4vh;' src='../img/excluir.png' alt='Deletar registro'></a>
									<a href='alterar.php?funcionario=".$row->cd_rm_funcionario."'><img style='width: 2vw; height: 4vh;'' src='../img/editar.png' alt='Alterar registro'></a> 
								</td>";
							echo "</tr>";
						}
					?>

				</tbody>
			</table>
		</div>
	</div>

	<?php
	$mysqli->close();
	?>

</body>

</html>