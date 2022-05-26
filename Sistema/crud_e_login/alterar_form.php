<?php include('../conection/conexao.php');

	$rmOriginal = $_POST['original'];
	$rm_fun = $_POST['rm_fun'];
	$nm_fun = $_POST['nm_fun'];
	$cpf = $_POST['cpf'];
	$crm_fun = $_POST['crm_fun'];
	$cnh = $_POST['cnh'];
	$vencimento_cnh = $_POST['vencimento_cnh'];
	$senha = $_POST['senha'];
	$date_nasc = $_POST['date_nasc'];
	$cargo = $_POST['cargo'];

	$alterar = "UPDATE tb_funcionario SET cd_rm_funcionario = '".$rm_fun."', nm_funcionario = '".$nm_fun."', cd_cpf = '".$cpf."', cd_crm_medico = '".$crm_fun."', nr_cnh = '".$cnh."', dt_vencimento_cnh = '".$vencimento_cnh."', ds_senha = '".$senha."', dt_nasc = '".$date_nasc."', id_cargo = '".$cargo."' WHERE cd_rm_funcionario = '".$rmOriginal."';";

	if ($result = $mysqli->query($alterar)) {

		?>
		<script> window.location.href = 'admin.php'; </script>
		<?php

	} else {
		echo $mysqli->error;

	}

?>