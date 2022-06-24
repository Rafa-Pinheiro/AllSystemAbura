<?php

//conexao banco

$host = "localhost";
$usuario = "rafa";
$senha = "usbw";
$bd = "db_abura";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->error)
    echo "Erro de Conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>
