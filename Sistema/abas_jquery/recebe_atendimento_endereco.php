<?php
include_once('../conection/conexao.php');

extract($_POST);

if (isset($_POST['cidadeSend']) && isset($_POST['bairroSend']) && isset($_POST['ruaSend']) && isset($_POST['numeroSend'])) {
  $sql = "INSERT INTO tb_endereco (nm_cidade, nm_bairro, nm_rua, nr_numero)
  VALUES ('$cidadeSend', '$bairroSend', '$ruaSend', '$numeroSend')";

  $result = mysqli_query($mysqli,$sql);
}
