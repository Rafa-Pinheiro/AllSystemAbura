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

$sql = "SELECT * FROM tb_funcionario";
$result = $con->query($sql);

/* print_r($result); */

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

    <center><title>SISTEMA</title></center>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>    

    <h1>SISTEMA</h1>
    <a href="sair.php">Sair</a>

    <div>
      <div class="m-5">
        <table class="table text-white table-bg">

          <thead>
            <tr>
              <th scope="col">CÓDIGO</th>
              <th scope="col">NOME</th>
              <th scope="col">SENHA</th>
              <th scope="col">CPF</th> 
              <th scope="col">CNH</th> 
              <th scope="col">CARGO</th>
            </tr>
          </thead>

          <style>
            body {
              background-color: rgb(20, 147, 220);
            }
            .table-bg {
              background-color: rgba(0,0,0,0.5);
              border-radius: 5px;
            }

            tr, th {
              text-align: center;
            }
          </style>

          <tbody>
            <?php

while ($user_data = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<th>" . $user_data['cd_rm_funcionario'] . "</th>";
  echo "<th>" . $user_data['nm_funcionario'] . "</th>";
  echo "<th>" . $user_data['ds_senha'] . "</th>";
  echo "<th>" . $user_data['cd_cpf'] . "</th>";
  echo "<th>" . $user_data['nr_cnh'] . "</th>";
  echo "<th>" . $user_data['id_cargo'] . "</th>";
  echo "</tr>";
}

?>
          </tbody>

        </table>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>