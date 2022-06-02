<?php
include_once('../conection/conexao.php');

    $nomeCompleto = $_POST['nomeCompleto'];
    $nomeSocorrido = $_POST['nomeSocorrido'];
    $faixaEtaria = $_POST['faixaEtaria'];
    $coms = $_POST['coms']; 
    $descricaoSimples = $_POST['descricaoSimples']; 

   $insereNomes = "INSERT INTO tb_atendimento (nm_solicitante, nm_socorrido, ds_faixa_etaria_socorrido, ds_descricao_atendente, st_comorbidade) 
    VALUES ('".$nomeCompleto."', '".$nomeSocorrido."', '".$faixaEtaria."', '".$descricaoSimples."', '".$coms."')";
    
    if ($lista = $mysqli->query($insereNomes)){
		?> <script>	window.location.href = "ende_atendimento.php"; </script> <?php 
	} else {
    echo $mysqli->error;
	} 
?>