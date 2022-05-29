<?php
include_once('../conection/conexao.php');

    $nomeCompleto = $_POST['nomeCompleto'];
    $nomeSocorrido = $_POST['nomeSocorrido'];
    $faixaEtaria = $_POST['faixaEtaria'];
    $coms = $_POST['coms']; 
    $cidadeLocal = $_POST['cidadeLocal'];
    $bairroLocal = $_POST['bairroLocal'];
    $ruaLocal = $_POST['ruaLocal'];
    $numeroLocal = $_POST['numeroLocal']; 
    $descricaoSimples = $_POST['descricaoSimples']; 


    $insereEndereco = "INSERT INTO tb_endereco (nm_cidade, nm_bairro, nm_rua, nr_numero)
    VALUES ('".$cidadeLocal."', '".$bairroLocal."', '".$ruaLocal."', '".$numeroLocal."')";

    if ($lista = $mysqli->query($insereEndereco)){
		?> <script>	window.location.href = "atendente.php"; </script> <?php 
	} else {
		echo $mysqli->error;
	} 
    
   $insereNomes = "INSERT INTO tb_atendimento (nm_solicitante, nm_socorrido, ds_faixa_etaria_socorrido, ds_descricao_atendente, st_comorbidade) 
	VALUES ('".$nomeCompleto."', '".$nomeAcidentado."', '".$faixaEtaria."','".$descricaoSimples."', '".$coms."')";
    
    if ($lista = $mysqli->query($insereNomes)){
		?> <script>	window.location.href = "atendente.php"; </script> <?php 
	} else {
        echo $mysqli->error;
	} 

     