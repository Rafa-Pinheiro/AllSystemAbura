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

	<title>Alterar</title>
</head>

<body>

	<div class="box-alterar">
		<div class="col-3 seta">
			<a href="admin.php">Voltar para ADMIN</a>
            <a href="encerrar_session.php"><img src="../assets/seta.png" height="50px" width="50px">Sair da conta</a>
        </div>
		<h2>Alterar</h2>

		<?php include('conectar.php');

		$rm = $_GET['funcionario'];
		$sql = "SELECT * FROM tb_funcionario WHERE cd_rm_funcionario = $rm";

		if ($lista = $mysqli->query($sql)) {
			while ($item_lista = $lista->fetch_object()) {
		?>

				<center>
					<span id="id" class="span-rm">RM</span>: <span class='nome'><?php echo $item_lista->cd_rm_funcionario ?></span>
				</center>

				<form class="form-signin" action="alterar_form.php" method="POST">

					<input type="hidden" name="original" value="<?php echo $item_lista->cd_rm_funcionario ?>">
					<input type="number" class="input-cadastrar" name="rm_fun" placeholder="RM" value="<?php echo $item_lista->cd_rm_funcionario ?>">
					<input type="text" class="input-cadastrar" name="name_fun" placeholder="Nome Completo" value="<?php echo $item_lista->nm_funcionario ?>">
					<input type="date" class="input-cadastrar" name="date_nasc" value="<?php echo $item_lista->dt_nasc ?>">
					<input type="number" class="input-cadastrar" name="cpf" placeholder="CPF" value="<?php echo $item_lista->cd_cpf ?>">
					<input type="number" class="input-cadastrar" name="crm_fun" placeholder="CRM" value="<?php echo $item_lista->cd_crm_medico ?>">
					<input type="number" class="input-cadastrar" name="cnh" placeholder="CNH" value="<?php echo $item_lista->nr_cnh ?>">
					<input type="date" class="input-cadastrar" name="vencimento_cnh" placeholder="Vencimento da CNH" value="<?php echo $item_lista->dt_vencimento_cnh ?>">
					<input type="password" class="input-cadastrar" name="senha" placeholder="Senha" value="<?php echo $item_lista->ds_senha ?>">
					<input type="number" class="input-cadastrar" name="cargo" placeholder="Cargo" value="<?php echo $item_lista->id_cargo ?>">

					<!-- <select class="input-cadastrar" name="" id="">
						<option value="Motorista" name="cargo_name">Motorista</option>
						<option value="Atendente" name="cargo_name">Atendente</option>
						<option value="Médico" name="cargo_name">Médico</option>
						<option value="Administrador" name="cargo_name">Administrador</option>
						<option value="Moderador" name="cargo_name">Moderador</option>
					</select> -->

					<button class="btn btn-lg btn-block" type="submit">ALTERAR</button>
					<a href="javascript:history.go(-1)">VOLTAR</a>
				</form>

		<?php
			}
		}

		?>
	</div>

</body>

</html>