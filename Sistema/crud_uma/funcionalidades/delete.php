<?php
include '../../conection/conexao.php';

if (isset($_POST['deletesend'])) {
    $unique = $_POST['deletesend'];

    $sql = "DELETE FROM tb_ambulancia WHERE cd_ambulancia=$unique";
    $result = mysqli_query($mysqli, $sql);
}

?>