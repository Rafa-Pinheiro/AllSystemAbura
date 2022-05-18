<?php 

$host = "localhost";
$usuario = "root";
$senha = "usbw";
$bd = "db_abura";

$con = new con($host, $usuario, $senha, $bd);

if($con->connect_errno)
    echo "Erro de Conexão: (".$con->connect_errno.") ".$con->connect_error;
