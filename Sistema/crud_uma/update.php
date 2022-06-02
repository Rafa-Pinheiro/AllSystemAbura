<?php
include '../conexão/connect.php';

if (isset($_POST['updateid'])) {
    $uma_id = $_POST['updateid'];

    $sql = "SELECT * FROM tb_ambulancia WHERE cd_ambulancia=$uma_id";
    $result = mysqli_query($mysqli, $sql);
    $response = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $response = $row;
    }
    echo json_encode($response);
} else {
    $response['status']=200;
    $response['messege']="Inválido";
}

// Editar query
if (isset($_POST['hiddendata'])) {
    $uniqueid = $_POST['hiddendata'];
    $placa = $_POST['updateplaca'];
    $chassi = $_POST['updatechassi'];
    $fabricacao = $_POST['updatefabricacao'];
    $tipo = $_POST['updatetipo'];

    $sql = "UPDATE tb_ambulancia SET cd_placa='$placa', nr_chassi='$chassi', dt_ano_fabricacao='$fabricacao', nm_tipo='$tipo' WHERE cd_ambulancia=$uniqueid";
    $result = mysqli_query($mysqli, $sql);
}