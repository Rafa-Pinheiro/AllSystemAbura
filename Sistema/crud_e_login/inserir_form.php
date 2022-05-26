<?php include('../conection/conexao.php');

	$rm = $_POST['rm_fun'];
	$nome = $_POST['name_fun'];
	$cpf = $_POST['cpf'];
	$crm_fun = $_POST['crm_fun'];
	$cnh = $_POST['cnh'];
	$vencimento_cnh = $_POST['vencimento_cnh'];
	$senha = $_POST['senha'];
	$date_nasc = $_POST['date_nasc'];
	$cargo = $_POST['cargo'];
	
	/* fazer post do select de profissão */

	$inserir = "INSERT INTO tb_funcionario (cd_rm_funcionario, nm_funcionario, cd_cpf, cd_crm_medico, nr_cnh, dt_vencimento_cnh, ds_senha, dt_nasc, id_cargo) 
	VALUES ('". $rm ."', '". $nome ."', '". $cpf ."', '". $crm_fun."', '". $cnh ."', '". $vencimento_cnh ."', '". $senha ."', '". $date_nasc ."', '". $cargo ."')";

	if ($lista = $mysqli->query($inserir)) {
		?> <script>	window.location.href = "admin.php"; </script> <?php 

	} else {
		echo $mysqli->error;
	}
?>