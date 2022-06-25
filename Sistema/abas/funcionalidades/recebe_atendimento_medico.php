<!-- recebe os valores do textarea, nivel de prioridade do caso e tipo de ambulância  -->
<?php
include_once('../../conection/conexao.php');

    $descricaoDetalhada = $_POST['descricaoDetalhada'];
    $prioridade_caso = $_POST['prioridade_caso'];
    $tipo_ambulancia = $_POST['tipo_ambulancia'];

   $insereDadosMedico = "UPDATE INTO tb_atendimento (ds__descricao_medico) 
    VALUES ('".$descricaoDetalhada."')";
    
    if ($lista = $mysqli->query($insereDadosMedico)){
		?> <script>	window.location.href = "info_medico.php"; </script> <?php 
	} else {
    echo $mysqli->error;
	} 
