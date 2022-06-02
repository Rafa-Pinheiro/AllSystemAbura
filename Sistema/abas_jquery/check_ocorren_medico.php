<?php
include_once('../conection/conexao.php');

    
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" >
        <link rel="stylesheet" type="text/css" href="css/estiloAtendente.css" >

        <title>Tela do Médico</title>

    </head>
    <body>
        
        <div class="container">
            <ul class="tab_navigation">
                <li>ABA 1</li>
                <li>ABA 2</li>
            </ul>
            <div class="tab_container_area">
                <div class="tab_container">
                    <form method="POST" style="margin-top: 20px">

                        <!-- codigo aba um -->

                        <center>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Chamado</th>
                                        <th scope="col">Nome Socorrido</th>
                                        <th scope="col">Descrição Básica do Caso</th>
                                        <th scope="col">Comorbidades</th>
                                    </tr>
                                </thead>
                                <tbody>
							<?php
							include('../conection/conexao.php');
							$consulta = "SELECT * FROM tb_atendimento";
							$result = $mysqli->query($consulta);

							while ($row = $result->fetch_object()) {
								echo "<tr>";
								echo "<td> $row->cd_atendimento </td>";
								echo "<td> $row->nm_socorrido </td>";
								echo "<td> $row->ds_descricao_atendente </td>";
								echo "<td> $row->st_comorbidade </td>";
							    }
							?>
						</tbody>
                            </table>
                        </center>

                     </form>
                </div>

                <div class="tab_container">
                    <form method="POST" style="margin-top: 20px">

                        <!-- codigo aba dois -->

                        <center>

                        </center>

                     </form>
                </div>    
            </div>
        </div>


        <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>

</html>