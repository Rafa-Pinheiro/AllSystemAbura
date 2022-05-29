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
    <!-- <link rel="stylesheet" href="../css/estilo.css"> -->

	<title>Cadastrar</title>
</head>

<body>

	<div class="container">
		< class="row">
		
		<h2>Cadastrar Aluno</h2>

		
			<a href="javascript:history.go(-1)">VOLTAR</a>
            <a href="encerrar_session.php"><img src="../assets/seta.png" height="50px" width="50px">Sair da conta</a>
    

		<?php include('../conection/conexao.php');
			$consulta = "SELECT * FROM tb_cargo";
			$result = $mysqli->query($consulta);
		

			$sql = "SELECT * FROM tb_funcionario";
			if ($lista = $mysqli->query($sql)) {
		?>


				<form class="form-cadastrar" action="inserir_form.php" method="POST">
					
					
						<label>RM</label>
						<input type="number" class="input-cadastrar" name="rm_fun" placeholder="RM" required>
						<label>NOME</label>
						<input type="text" class="input-cadastrar" name="name_fun" placeholder="Nome Completo" required>
						<label>CPF</label>
						<input type="number" class="input-cadastrar" name="cpf" placeholder="CPF" required>
						<label>CRM</label>
						<input type="number" class="input-cadastrar" name="crm_fun" placeholder="CRM" required>
						<label>DATA DE NASCIMENTO</label>
						<input type="date" class="input-cadastrar" name="date_nasc" required>
						<label>CNH</label>
						<input type="number" class="input-cadastrar" name="cnh" placeholder="CNH">
						<label>VENCIMENTO DA CNH</label>
						<input type="date" class="input-cadastrar" name="vencimento_cnh" placeholder="Vencimento da CNH">
						<label>SENHA</label>
						<input type="password" class="input-cadastrar" name="senha" placeholder="Senha" required>
						
						<label>CARGO</label>
						<select class="input-cadastrar" name="cd_cargo" required>
							<?php
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

						
							<button class="btn btn-lg btn-block bg-danger col-4 text-white mb-5" type="submit">INSERIR</button>
						
				</form>
				

			<?php
			}
			?>
		</div>
	</div>
</body>

</html>