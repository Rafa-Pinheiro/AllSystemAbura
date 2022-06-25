<?php
include_once('../../conection/conexao.php');

extract($_POST);

if (isset($_POST['nomeComplSend']) && ($_POST['faixaEtariaSend']) && ($_POST['descBasicaSend']) && ($_POST['comorbidadesSend'])) {
  $sql = "INSERT INTO tb_atendimento (nm_solicitante, nm_socorrido, ds_faixa_etaria_socorrido, ds_descricao_atendente, st_comorbidade)
  VALUES ('$nomeComplSend', '$nomeSocorrSend', '$faixaEtariaSend', '$descBasicaSend', '$comorbidadesSend')";

  $result = mysqli_query($mysqli,$sql);
}

