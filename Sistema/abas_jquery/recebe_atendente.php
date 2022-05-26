<?php
include_once('../conection/conexao.php');

    $nome = $_POST['nomeCompleto'];
    $nomeAcidentado = $_POST['nomeSocorrido'];
    $faixaEtaria = $_POST['faixaEtaria'];
    $comorbidades = $_POST['coms'];
    $cidade = $_POST['cidadeLocal'];
    $bairro = $_POST['bairroLocal'];
    $rua = $_POST['ruaLocal'];
    $numero = $_POST['numeroLocal'];
    $descricaoSimples = $_POST['descricaoSimples'];

    
    $insereNomes = "INSERT INTO tb_atendimento (nm_solicitante, nm_socorrido, ds_faixa_etaria_socorrido, ds_descricao_atendente, st_comorbidade) 
	VALUES ('".$nome."', '".$nomeAcidentado."', '".$faixaEtaria."','".$descricaoSimples."', '".$comorbidades."')";
    
    $insereEndereco = "INSERT INTO tb_endereco (nm_cidade, nm_bairro, nm_rua, nr_numero) 
    VALUES ('".$cidade."', '".$bairro."', '".$rua."', '".$numero."')";

echo "saas";
    
    if ($lista = $mysqli->query($insereNomes)){
		?> <script>	window.location.href = "atendente.php"; </script> <?php 
	} else {
        echo $mysqli->error;
	}
    echo "vish";
    /* if ($lista = $mysqli->query($insereEndereco)){
		?> <script>	window.location.href = "atendente.php"; </script> <?php 
	} else {
		echo $mysqli->error;
	} */