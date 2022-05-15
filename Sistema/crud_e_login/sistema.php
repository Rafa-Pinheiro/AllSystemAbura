<?php
    session_start();
    include_once('conexao.php');
    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

    $sql = "SELECT * FROM tb_funcionarios ORDER BY cd_rm_funcionario DESC";
    $result = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        while ($user_data = mysqli_fecht_assoc($result)) {
            echo "<tr>";
            echo "<tr>".$user_data['id']."</tr>";
            echo "<tr>".$user_data['nome']."</tr>";
            echo "<tr>".$user_data['senha']."</tr>";
            echo "<tr>".$user_data['cpf']."</tr>";
            echo "<tr>".$user_data['cnh']."</tr>";
            echo "<tr>".$user_data['cargo']."</tr>";
            echo "<tr>";
        }
    ?>
  </tbody>
</table>
    </div>
</body>
</html>