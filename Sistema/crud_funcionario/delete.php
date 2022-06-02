<?php
include '../conexão/connect.php';

if (isset($_POST['deletesend'])) {
    $unique = $_POST['deletesend'];

    $sql = "DELETE FROM tb_funcionario WHERE cd_funcionario=$unique";
    $result = mysqli_query($mysqli, $sql);
}

?>