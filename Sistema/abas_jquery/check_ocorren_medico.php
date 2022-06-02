<?php
include_once('../conection/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" >
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../css/style.css" >

    <title>Tela do Médico</title>
</head>
<body>
    
    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand navbar-light bg-dark">
        <a class="navbar-brand" href="#">
            <img src="../assets/axolote.png" width="66" height="48" alt="logo-abura">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
        <a href="../conection/encerrar_session.php"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">SAIR</button></a>
    </nav>
    <!-- FIM NAVIGATION -->

    <div class="container my-3">
        <h1 class="text-center h1-crud mt-5 mb-2">Ocorrências</h1>
        <button type="button" class="btn btn-dark my-3" data-toggle="modal" onclick="exibirMapa()" data-target="#completeModal">
            Mapa
        </button>
    </div>

    <!-- CONTEÚDO PRINCIPAL -->
    <div class="container">
        <div class="div-table mb-5">
            <!-- CÓDIGO ABA 1 -->
            <table class="table table-striped mb-1">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome Socorrido</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Comorbidades</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $consulta = "SELECT * FROM tb_atendimento";
                    $result = $mysqli->query($consulta);
                    while ($row = $result->fetch_object()) {
                        echo "<tr>";
                        echo "<td> $row->cd_atendimento </td>";
                        echo "<td> $row->nm_socorrido </td>";
                        echo "<td> $row->ds_descricao_atendente </td>";
                        echo "<td> $row->st_comorbidade </td>";
                        echo "<td>
                                <button class='btn btn-dark' onclick='Visualizar('".$cd_atendimento."')'>Visualizar</button>
                                <button class='btn btn-danger' onclick='Atender('".$cd_atendimento."')'>Atender</button>
                            </td>";
                        }
                        ?>
				    </tbody>
                </table>
            </form>
        </div>
            <div class="tab_container">
                <form method="POST">
                    <!-- CÓDIGO ABA DOIS -->
                    
                 </form>
            </div> 
        </div>   
    </div>


    <!-- SCRIPTS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>