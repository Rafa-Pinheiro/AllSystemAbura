<?php
include '../../conection/conexao.php';

if (isset($_POST['updateid'])) {
    $fun_id = $_POST['updateid'];

    $sql = "SELECT * FROM tb_funcionario WHERE cd_funcionario=$fun_id";
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