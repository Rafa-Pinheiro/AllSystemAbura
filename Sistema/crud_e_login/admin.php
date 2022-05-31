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
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="../assets/favicon/site.webmanifest">


	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/custom.css">

	<!--google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


	<!--google material icon-->
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/button.css">
	<link rel="stylesheet" href="../css/records.css">
	<link rel="stylesheet" href="../css/modal.css">
	<script src="../js/main.js" defer></script>

	<title>Admin - Registros</title>

</head>

<body>

	<!-- NAVBAR -->
	<nav class="navbar navbar-light bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
			<img src="../assets/axolote.png" alt="" width="50" height="40">
			<span class="navbar-text">
				<a href="encerrar_session.php"><button class="btn btn-danger" type="button">SAIR</button></a>
      		</span>
			</a>
		</div>
	</nav>

	<!------ CONTEÚDO PRINCIPAL ----------->

	<div class="main-content">
		<div class="row">
			<div class="col-md-12">
				<div class="table-wrapper">

					<div class="table-title">
						<div class="row">
							<div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
								<h2 class="ml-lg-2">Registro de Funcionários</h2>
							</div>
							<div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
								<button type="button" class="btn btn-success botão" onclick="exibir_add_registro()">
									<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
										<i class="material-icons">&#xE147;</i>Cadastrar
									</a>
								</button>
								<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
									<i class="material-icons">&#xE15C;</i>
									<span>Delete</span>
								</a>
							</div>
						</div>
					</div>

					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th><span class="custom-checkbox">
										<input type="checkbox" id="selectAll">
										<label for="selectAll"></label></th>
								<th>RM</th>
								<th>NOME</th>
								<th>CPF</th>
								<th>CRM</th>
								<th>CNH</th>
								<th>VENC. DA CNH</th>
								<th>SENHA</th>
								<th>NASCIMENTO</th>
								<th>CARGO</th>
								<th>AÇÕES</th>
							</tr>
						</thead>

						<tbody>
							<?php
							include('../conection/conexao.php');
							$consulta = "SELECT * FROM tb_funcionario";
							$result = $mysqli->query($consulta);

							while ($row = $result->fetch_object()) {
								echo "<tr>";
								echo "<th><span class='custom-checkbox'>
									<input type='checkbox' id='checkbox1' name='option[]' value='1'>
									<label for='checkbox1'></label></th>";
								echo "<td> $row->cd_rm_funcionario </td>";
								echo "<td> $row->nm_funcionario </td>";
								echo "<td> $row->cd_cpf </td>";
								echo "<td> $row->cd_crm_medico </td>";
								echo "<td> $row->nr_cnh </td>";
								echo "<td> $row->dt_vencimento_cnh </td>";
								echo "<td> $row->ds_senha </td>";
								echo "<td> $row->dt_nasc </td>";

								if ($row->id_cargo == 1) {
									echo "<td>Motorista</td>";
								}
								if ($row->id_cargo == 2) {
									echo "<td>Atendente</td>";
								}
								if ($row->id_cargo == 3) {
									echo "<td>Médico</td>";
								}
								if ($row->id_cargo == 4) {
									echo "<td>Admin</td>";
								}
								if ($row->id_cargo == 5) {
									echo "<td>Abastecedor</td>";
								}

								echo "<th>
								<a href='#?funcionario=" . $row->cd_rm_funcionario . "' class='edit'><i class='material-icons' data-toggle='tooltip' title='Edit' onclick='exibir_alter_registro()'>&#xE254;</i></a>
								<a href='apagar.php?funcionario=" . $row->cd_rm_funcionario . "' class='delete'><i class='material-icons' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>
								</th>";
								echo "</tr>";
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<!-- MODAL CADASTRAR FUNCIONÁRIO -->
	<div class="modal" tabindex="-1" id="add_registro">
		<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Cadastrar Usuário</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<?php
					$consulta = "SELECT * FROM tb_cargo";
					$result = $mysqli->query($consulta);
					$sql = "SELECT * FROM tb_funcionario";
					if ($lista = $mysqli->query($sql)) {
					?>

						<form class="modal-form" action="inserir_form.php" method="POST">
							<input type="number" class="modal-field" name="rm_fun" placeholder="RM" required>
							<input type="text" class="modal-field" name="name_fun" placeholder="Nome Completo" required>
							<input type="number" class="modal-field" name="cpf" placeholder="CPF" required>
							<input type="number" class="modal-field" name="crm_fun" placeholder="CRM" required>
							<input type="date" class="modal-field" name="date_nasc" required>
							<input type="number" class="modal-field" name="cnh" placeholder="CNH">
							<input type="date" class="modal-field" name="vencimento_cnh" placeholder="Vencimento da CNH">
							<input type="password" class="modal-field" name="senha" placeholder="Senha" required>
							<input type="radio" class="modal-field" name="ic_genero" value="f">
							<input type="radio" class="modal-field" name="ic_genero" value="m">

							<select class="modal-field" name="cd_cargo" required>
								<?php
								echo "<option></option>";
								while ($row = $result->fetch_object()) {
									if ($row->cd_cargo == 1) {
										echo "<option value='" . $row->cd_cargo . "'> $row->nm_cargo </option>";
									} elseif ($row->cd_cargo == 2) {
										echo "<option value='" . $row->cd_cargo . "'> $row->nm_cargo </option>";
									} elseif ($row->cd_cargo == 3) {
										echo "<option value='" . $row->cd_cargo . "'> $row->nm_cargo </option>";
									} elseif ($row->cd_cargo == 4) {
										echo "<option value='" . $row->cd_cargo . "'> $row->nm_cargo </option>";
									} elseif ($row->cd_cargo == 5) {
										echo "<option value='" . $row->cd_cargo . "'> $row->nm_cargo </option>";
									}
								}
								?>
							</select>

							<div class="modal-footer content-center">
								<button type="reset" class="button red">LIMPAR</button>
								<button type="submit" class="button green">CADASTRAR</button>
							</div>
						</form>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
	<!---- FIM DO MODAL CADASTRAR FUNCIONÁRIO --------->

	<!----  MODAL PARA ALTERAR REGISTRO --------->
	<div class="modal fade" tabindex="-1" id="alter_registro" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">ALERTA DE EXCLUSÃO</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php
					$consulta = "SELECT * FROM tb_cargo";
					$result = $mysqli->query($consulta);
					$rm = $_GET['funcionario'];
					$sql = "SELECT * FROM tb_funcionario WHERE cd_rm_funcionario = $rm";

					if ($lista = $mysqli->query($sql)) {
						while ($item_lista = $lista->fetch_object()) {
					?>

					<form class="modal-form" action="alterar_form.php" method="POST">
						<input type="hidden" name="original" value="<?php echo $item_lista->cd_rm_funcionario ?>">
						<input type="number" class="input-cadastrar" name="rm_fun" placeholder="RM" value="<?php echo $item_lista->cd_rm_funcionario ?>">
						<input type="text" class="input-cadastrar" name="nm_fun" placeholder="Nome Completo" value="<?php echo $item_lista->nm_funcionario ?>">
						<input type="date" class="input-cadastrar" name="date_nasc" value="<?php echo $item_lista->dt_nasc ?>">
						<input type="number" class="input-cadastrar" name="cpf" placeholder="CPF" value="<?php echo $item_lista->cd_cpf ?>">
						<input type="number" class="input-cadastrar" name="crm_fun" placeholder="CRM" value="<?php echo $item_lista->cd_crm_medico ?>">
						<input type="number" class="input-cadastrar" name="cnh" placeholder="CNH" value="<?php echo $item_lista->nr_cnh ?>">
						<input type="date" class="input-cadastrar" name="vencimento_cnh" placeholder="Vencimento da CNH" value="<?php echo $item_lista->dt_vencimento_cnh ?>">
						<input type="password" class="input-cadastrar" name="senha" placeholder="Senha" value="<?php echo $item_lista->ds_senha ?>">
						<input type="number" class="input-cadastrar" name="cargo" placeholder="Cargo" value="<?php echo $item_lista->id_cargo ?>">

						<select class="modal-field" name="cd_cargo" required>
							<?php
							echo "<option></option>";
							while ($row = $result->fetch_object()) {
								if ($row->cd_cargo == 1) {
									echo "<option value='" . $row->cd_cargo . "'> $row->nm_cargo </option>";
								} elseif ($row->cd_cargo == 2) {
									echo "<option value='" . $row->cd_cargo . "'> $row->nm_cargo </option>";
								} elseif ($row->cd_cargo == 3) {
									echo "<option value='" . $row->cd_cargo . "'> $row->nm_cargo </option>";
								} elseif ($row->cd_cargo == 4) {
									echo "<option value='" . $row->cd_cargo . "'> $row->nm_cargo </option>";
								} elseif ($row->cd_cargo == 5) {
									echo "<option value='" . $row->cd_cargo . "'> $row->nm_cargo </option>";
								}
							}
							?>
						</select>

						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
							<button type="submit" class="btn btn-success">SALVAR</button>
						</div>
					</form>

					<?php
						}
					}

					?>
				</div>
			</div>
		</div>
	</div>
	<!---- FIM DO MODAL PARA ALTERAR REGISTRO --------->

	<!----  MODAL PARA CONFIRMAR DELEÇÃO --------->
	<div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">ALERTA DE EXCLUSÃO</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Deseja reamente excluir esse(s) registro(s)?</p>
					<p class="text-warning"><small>Os arquivos não poderão ser recuperados.</small></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="button" class="btn btn-success">Deletar</button>
				</div>
			</div>
		</div>
	</div>
	<!---- FIM DO MODAL PARA CONFIRMAR DELEÇÃO --------->

	<!------ FIM DO CONTEÚDO PRINCIPAL ----------->

	<?php
	$mysqli->close();
	?>

	<!----  FOOTER ------------->
	<footer class="footer">
		<div class="container-fluid">
			<div class="footer-in">
				<p class="mb-0">&copy 2022. Eu</p>
			</div>
		</div>
	</footer>


	<!-- SCRIPTS -->
	<script src="../js/jquery-3.3.1.slim.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery-3.3.1.min.js"></script>

	<script>
		function exibir_add_registro() {
			var modal = document.getElementById("add_registro");
			var modal_add = new bootstrap.Modal(modal);
			modal_add.show();
		}

		function exibir_alter_registro() {
			var modal = document.getElementById("alter_registro");
			var modal_add = new bootstrap.Modal(modal);
			modal_add.show();
		}

		$(document).ready(function() {
			$(".xp-menubar").on('click', function() {
				$("#sidebar").toggleClass('active');
				$("#content").toggleClass('active');
			});

			$('.xp-menubar,.body-overlay').on('click', function() {
				$("#sidebar,.body-overlay").toggleClass('show-nav');
			});

		});
	</script>

</body>

</html>