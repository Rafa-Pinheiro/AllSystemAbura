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
	                $_SESSION['cargo'] = $linha->id_cargo;
	    
	                if ($linha->id_cargo == 1) {
	                    ?> <script> window.location.href = "../tela_atendente/teladoatendenteaba1.php"; </script> <?php

	                } elseif ($linha->id_cargo == 2) {
	                	?> <script> window.location.href = "../tela_atendente/teladoatendenteaba1.php"; </script> <?php

					} elseif ($linha->id_cargo == 3) {
	                	?> <script> window.location.href = "../tela_medico/teladomedaba1.php"; </script> <?php
					
					} elseif ($linha->id_cargo == 4) {
	                	?> <script> window.location.href = "admin.php"; </script> <?php
					
					} elseif ($linha->id_cargo == 5) {
	                	?> <script> window.location.href = "admin.php"; </script> <?php

	                } else {
	                	echo $result->error;

	                }
	            }
	        }
	    }
	}

?>