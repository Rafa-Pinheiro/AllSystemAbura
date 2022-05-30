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
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/button.css">
	<link rel="stylesheet" href="../css/records.css">
	<link rel="stylesheet" href="../css/modal.css"> 
	<script src="../js/main.js" defer></script>

	<title>Admin - Registros</title>
</head>

<body>
	<header>
		<h1 class="header-title">Cadastro de Funcionários</h1>
		<!-- <span class="bg-danger"><a href="../crud_e_login/encerrar_session.php" id="span-sair"><span> -->
	</header>

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
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
						<i class="material-icons">&#xE147;</i>
						<button type="button" class="btn btn-green" onclick="exibir_add_registro()">Cadastrar</button>
						</a>
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
								<a href='admin.php?funcionario=".$row->cd_rm_funcionario."' class='edit' data-toggle='modal'><button type='submit' id='alterar' onclick='exibir_add_registro()'><i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></button></a>
								<a href='apagar.php?funcionario=".$row->cd_rm_funcionario."' class='delete' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Delete'>&#xE872;</i><button type='submit' id='excluir'></button></a>
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
						<input type="radio" class="modal-field" name="ic_genero" value="f">
						<input type="radio" class="modal-field" name="ic_genero" value="m">

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
						
					<!----  MODAL PARA CONFIRMAR DELEÇÃO --------->
			<div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
			<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title">Delete Employees</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<div class="modal-body">
			<p>Are you sure you want to delete this Records</p>
			<p class="text-warning"><small>this action Cannot be Undone,</small></p>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			<button type="button" class="btn btn-success">Delete</button>
			</div>
			</div>
			</div>
			</div>

						<!----edit-modal end---------> 
					
					
					</div>
				</div>
				
			
			<!------ FIM DO CONTEÚDO PRINCIPAL -----------> 
			


			<!----footer-design------------->
			<?php
			$mysqli->close();
			?> 

			<footer class="footer">
			<div class="container-fluid">
				<div class="footer-in">
					<p class="mb-0">&copy 2022. Eu</p>
				</div>
			</div>
			</footer>




			</div>

			</div>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="../js/jquery-3.3.1.slim.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery-3.3.1.min.js"></script>

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



	<script>
    function exibir_add_registro() {
        var modal = document.getElementById("add_registro");
        var modal_add = new bootstrap.Modal(modal);
        modal_add.show();
    }
	</script>


	<script type="text/javascript">
	$(document).ready(function(){
	$(".xp-menubar").on('click',function(){
	$("#sidebar").toggleClass('active');
	$("#content").toggleClass('active');
	});
	
	$('.xp-menubar,.body-overlay').on('click',function(){
		$("#sidebar,.body-overlay").toggleClass('show-nav');
	});
	
	});
	</script>

</body>
</html>