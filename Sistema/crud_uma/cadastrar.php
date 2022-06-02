<?php
include '../conection/conexao.php';

extract($_POST);

if (isset($_POST['placaSend']) && isset($_POST['chassiSend']) && isset($_POST['fabricacaoSend']) && isset($_POST['tipoSend'])) {
    $sql = "INSERT INTO tb_ambulancia (cd_placa, nr_chassi, dt_ano_fabricacao, nm_tipo)
    VALUES ('$placaSend', '$chassiSend', '$fabricacaoSend', '$tipoSend')";

    $result = mysqli_query($mysqli,$sql);
}

?>