<?php 
	include('conectar.php');

	// Comando para deletar o registro no banco
	$deletar = "DELETE FROM tb_funcionario WHERE cd_rm_funcionario = " . $_GET['funcionario'];

	if ($result = $mysqli->query($deletar)) { // Se conseguir executar o comando, o registro será excluído
		?>
		<script>
			window.location.href = '../admin.php'
		</script>
		<?php
	} else { // Senão, apresentará um erro
		echo $result->error;
	}

 ?>