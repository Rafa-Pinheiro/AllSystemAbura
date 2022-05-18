<?php
session_start();
    // print_r($_REQUEST);
    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        include_once('conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r($email);
        // print_r($senha);

        $sql = "SELECT * FROM tb_funcionario WHERE nm_funcionario = '$email' AND ds_senha = '$senha'";
        $result = $con->query($sql);

        // print_r($result);

        if (mysqli_num_rows($result) < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    
    } else {
        header('Location: login.php');
    }


?>