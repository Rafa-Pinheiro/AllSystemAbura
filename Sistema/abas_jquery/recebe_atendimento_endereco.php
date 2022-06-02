<?php
include_once('../conection/conexao.php');

  $cidadeLocal = $_POST['cidadeLocal'];
  $bairroLocal = $_POST['bairroLocal'];
  $ruaLocal = $_POST['ruaLocal'];
  $numeroLocal = $_POST['numeroLocal'];

  $insereEndereco = "INSERT INTO tb_endereco (nm_cidade, nm_bairro, nm_rua, nr_numero)
    VALUES ('".$cidadeLocal."', '".$bairroLocal."', '".$ruaLocal."', '".$numeroLocal."')";

    if ($lista = $mysqli->query($insereEndereco)){
		?> <script>	window.location.href = "info_atendente.php"; </script> <?php 
	} else {
		echo $mysqli->error;
	} 