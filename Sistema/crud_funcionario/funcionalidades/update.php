<?php
include '../conection/conexao.php';

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

// Editar query
if (isset($_POST['hiddendata'])) {
    $uniqueid = $_POST['hiddendata'];
    $rm = $_POST['updaterm'];
    $nome = $_POST['updatenome'];
    $cpf = $_POST['updatecpf'];
    $crm = $_POST['updatecrm'];
    $cnh = $_POST['updatecnh'];
    $venccnh = $_POST['updatevenccnh'];
    $senha = $_POST['updatesenha'];
    $nasc = $_POST['updatenasc'];
    $cargo = $_POST['updatecargo'];

    $sql = "UPDATE tb_funcionario SET cd_rm_funcionario='$rm', nm_funcionario='$nome', cd_cpf='$cpf', cd_crm_medico='$crm', nr_cnh='$cnh', dt_vencimento_cnh='$venccnh', ds_senha='$senha', dt_nasc='$nasc', nm_cargo='$cargo' WHERE cd_funcionario=$uniqueid";
    $result = mysqli_query($mysqli, $sql);
}