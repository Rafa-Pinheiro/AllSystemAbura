<?php
	session_start();
	include('../conection/conexao.php');

	if (isset($_POST['rm'])) {

	    $rm = $_POST['rm'];
	    $senha = $_POST['senha'];

	    $sql = "SELECT * FROM tb_funcionario WHERE cd_rm_funcionario = '".$rm."' AND ds_senha = '".$senha."'";

	    if ($res = $mysqli->query($sql)) {

	        if ($res->num_rows == 1) {

	            while ($linha = $res->fetch_object()) {

	                $_SESSION['rm'] = $linha->cd_rm_funcionario;
	                $_SESSION['senha'] = $linha->ds_senha;
	                $_SESSION['cargo'] = $linha->nm_cargo;

	                if ($linha->nm_cargo == "motorista") {
	                    ?> <script> window.location.href = "../abas_jquery/pagina_atendente.php"; </script> <?php

	                } elseif ($linha->nm_cargo == "atendente") {
	                	?> <script> window.location.href = "../abas_jquery/pagina_atendente.php"; </script> <?php

					} elseif ($linha->nm_cargo == "medico") {
	                	?> <script> window.location.href = "../abas_jquery/check_ocorren_medico.php"; </script> <?php

					} elseif ($linha->nm_cargo == "administrador") {
	                	?> <script> window.location.href = "../crud_funcionario/crud_funcionario.php"; </script> <?php

	                } 
	            }
	        }
	    }
	}

?> 