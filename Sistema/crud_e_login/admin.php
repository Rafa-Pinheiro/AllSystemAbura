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

	<!-- BOOTSTRAP AND CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="../css/style.css"> -->

	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/button.css">
	<link rel="stylesheet" href="../css/records.css">
	<link rel="stylesheet" href="../css/modal.css">
	<script src="../js/main.js" defer></script>

	<title>Admin - Registros</title>

	<style>
		body {
			text-align: center;
		}
		table {
			borderborder-radius: 8px;
		}
	</style>
</head>

<body>

	<div class="modal" tabindex="-1" id="add_registro">
		<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
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
						<input type="text" class="modal-field" name="genero" placeholder="Gênero" required>

						<select class="modal-field" name="cd_cargo" required>
							<?php
								echo "<option></option>";
								while ($row = $result->fetch_object()) {
									if ($row->cd_cargo == 1) {
										echo "<option value='".$row->cd_cargo."'> $row->nm_cargo </option>";
									}
									elseif ($row->cd_cargo == 2) {
										echo "<option value='".$row->cd_cargo."'> $row->nm_cargo </option>";
									}
									elseif ($row->cd_cargo == 3) {
										echo "<option value='".$row->cd_cargo."'> $row->nm_cargo </option>";
									}
									elseif ($row->cd_cargo == 4) {
										echo "<option value='".$row->cd_cargo."'> $row->nm_cargo </option>";
									}
									elseif ($row->cd_cargo == 5) {
										echo "<option value='".$row->cd_cargo."'> $row->nm_cargo </option>";
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

	<header>
		<h1 class="header-title">Cadastro de Funcionários</h1>
		<!-- <span class="bg-danger"><a href="../crud_e_login/encerrar_session.php" id="span-sair"><span> -->
	</header>

	<main>
		<button type="button" class="button blue mobile" onclick="exibir_add_registro()">Adicionar</button>
		<table class="records">
			<thead>
				<tr>
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
					
						echo "<td>
							<a href='alterar.php?funcionario=".$row->cd_rm_funcionario."'><button type='submit' id='alterar' class='button green''>EDITAR</button></a>
							<a href='apagar.php?funcionario=".$row->cd_rm_funcionario."'><button type='submit' id='excluir' class='button red'>EXCLUIR</button></a>
							</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>

	</main>

	<footer>
		Copyright &copy; Eu.
	</footer>

	<?php
	$mysqli->close();
	?> 

	<!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <!-- JQUERY -->
    <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>

	<script>
    function exibir_add_registro() {
        var modal = document.getElementById("add_registro");
        var modal_add = new bootstrap.Modal(modal);
        modal_add.show();
    }
	</script>

</body>
</html>