<?php

//conexao banco

$host = "localhost";
$usuario = "root";
$senha = "usbw";
$bd = "db_abura";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

// <<<<<<< HEAD
if($mysqli->error)
    echo "Erro de Conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
// =======
// if ($mysqli->connect_errno)
    // echo "Erro de Conexão: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

// >>>>>>> c17504cbcdfe2cb51644adde140ac432f36c1529

?>
