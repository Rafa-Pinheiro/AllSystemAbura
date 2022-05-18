<?php
    session_start();
    include_once('conexao.php');
    /* print_r($_SESSION); */
    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

    $sql = "SELECT * FROM tb_funcionarios";
    $result = $con->query($sql);

    print_r($result);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP AND CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>SISTEMA</title>
</head>
<body>
    <h1>SISTEMA</h1>
    <a href="sair.php">Sair</a>

    <div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">CD</th>
      <th scope="col">Nome</th>
      <th scope="col">Senha</th>
      <th scope="col">CPF</th> 
      <th scope="col">CNH</th> 
      <th scope="col">Cargo</th>
    </tr>
  </thead>
  <tbody>
    <?php
    print_r($result);
      /* while ($dado = $result->fetch_array()) {
        echo $dado["cd_rm_funcionario"];
        echo $dado["nm_funcionario"];
        echo $dado["ds_senha"];
        echo $dado["cd_cpf"];
        echo $dado["nr_cnh"];
        echo $dado["id_cargo"];
      } */



      /* while ($user_data = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<tr>".$user_data['cd_rm_funcionario']."</tr>";
          echo "<tr>".$user_data['nm_funcionario']."</tr>";
          echo "<tr>".$user_data['ds_senha']."</tr>";
          echo "<tr>".$user_data['cd_cpf']."</tr>";
          echo "<tr>".$user_data['nr_cnh']."</tr>";
          echo "<tr>".$user_data['id_cargo']."</tr>";
          echo "<tr>";
      } */
    ?>
  </tbody>
</table>
    </div>
</body>
</html>