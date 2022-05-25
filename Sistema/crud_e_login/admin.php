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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">

	<title>Admin - Registros</title>
</head>

<body>
	<h1>Registros</h1>
		<div class="col-3 seta">
            <a href="encerrar_session.php"><img src="../assets/seta.png" height="50px" width="50px"></a>
        </div>

		<div>
			<a href="inserir.php">
				<img style="width: 3vw; height: 6vh;" src="../img/adicionar.png">
				<span id="insert">Inserir novo registro</span>
			</a>

			<?php
				include('conectar.php');
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
						</tr>
					</thead>

					<style>
						body {
						background-color: rgb(20, 147, 220);
						}
						.table-bg {
						background-color: rgba(0,0,0,0.5);
						border-radius: 5px;
						}

						tr, th {
						text-align: center;
						}
					</style>

					<tbody>
					<?php

					while ($row = $result->fetch_object()) {
						echo "<tr>";
							echo "<th> $row->cd_rm_funcionario </th>";
							echo "<th> $row->nm_funcionario </th>";
							echo "<th> $row->cd_cpf </th>";
							echo "<th> $row->cd_crm_medico </th>";
							echo "<th> $row->nr_cnh </th>";
							echo "<th> $row->dt_vencimento_cnh </th>";
							echo "<th> $row->ds_senha </th>";
							echo "<th> $row->dt_nasc </th>";
							echo "<th> $row->id_cargo </th>";
						echo "</tr>";
					?>

				<br>
				<a href="php/apagar.php?funcionario=<?php echo "$row->cd_rm_funcionario"; ?>"><img style="width: 2vw; height: 4vh;" src="../img/excluir.png" alt="Deletar registro"></a> 
				<a href="php/alterar.php?funcionario=<?php echo "$row->cd_rm_funcionario"; ?>"><img style="width: 2vw; height: 4vh;" src="../img/editar.png" alt="Alterar registro"></a> 
		
				<?php
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