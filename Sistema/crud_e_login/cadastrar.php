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

	<title>Inserir</title>
</head>

<body>

	<div class="box-inserir">
		<h2>Cadastrar Aluno</h2>
		<div class="col-3 seta">
			<a href="admin.php">Voltar para ADMIN</a>
            <a href="encerrar_session.php"><img src="../assets/seta.png" height="50px" width="50px">Sair da conta</a>
        </div>

		<?php include('../conection/conexao.php');
			$consulta = "SELECT * FROM tb_cargo";
			$result = $mysqli->query($consulta);
		

			$sql = "SELECT * FROM tb_funcionario";
			if ($lista = $mysqli->query($sql)) {
		?>


				<form class="form-signin" action="inserir_form.php" method="POST">
					<input type="number" class="input-cadastrar" name="rm_fun" placeholder="RM">
					<input type="text" class="input-cadastrar" name="name_fun" placeholder="Nome Completo">
					<input type="number" class="input-cadastrar" name="cpf" placeholder="CPF">
					<input type="number" class="input-cadastrar" name="crm_fun" placeholder="CRM">
					<input type="date" class="input-cadastrar" name="date_nasc">
					<input type="number" class="input-cadastrar" name="cnh" placeholder="CNH">
					<input type="date" class="input-cadastrar" name="vencimento_cnh" placeholder="Vencimento da CNH">
					<input type="password" class="input-cadastrar" name="senha" placeholder="Senha">
					<input type="number" class="input-cadastrar" name="cargo" placeholder="Cargo">

					<select class="input-cadastrar" name="" id="">
						<?php
							while ($row = $result->fetch_object()) {
								echo "<option name='cargo_name'>$row->nm_cargo</option>";
							}
						?>
					</select>
			
					<button class="btn btn-lg btn-block" type="submit">INSERIR</button>
					<a href="javascript:history.go(-1)">VOLTAR</a>
				</form>

			<?php
			}
			?>
	</div>
</body>

</html>