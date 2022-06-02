<?php
include '../conection/conexao.php';

extract($_POST);

if (isset($_POST['rmSend']) && isset($_POST['nomeSend']) && isset($_POST['cpfSend']) && isset($_POST['crmSend']) && isset($_POST['cnhSend']) && isset($_POST['venccnhSend']) && isset($_POST['senhaSend']) && isset($_POST['nascSend']) && isset($_POST['cargoSend'])) {
    $sql = "INSERT INTO tb_funcionario (cd_rm_funcionario, nm_funcionario, cd_cpf, cd_crm_medico, nr_cnh, dt_vencimento_cnh, ds_senha, dt_nasc, nm_cargo)
    VALUES ('$rmSend', '$nomeSend', '$cpfSend', '$crmSend', '$cnhSend', '$venccnhSend', '$senhaSend', '$nascSend', '$cargoSend')";

    $result = mysqli_query($mysqli,$sql);
}

?>