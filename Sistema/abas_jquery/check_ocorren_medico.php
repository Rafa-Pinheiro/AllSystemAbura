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
    <nav class="navbar navbar-expand navbar-light navbar-ocorrencia">
        <a class="navbar-brand" href="#">
            <img src="../assets/axolote.png" width="66" height="48" alt="logo-abura">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
        <a href="../conection/encerrar_session.php"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">SAIR</button></a>
    </nav>
    <!-- FIM NAVIGATION -->

    <div class="container my-3">
        <h1 class="text-center h1-titulo mt-5 mb-2">Ocorrências</h1>
        <button type="button" class="btn btn-ocorrencia text-white my-3" data-toggle="modal" onclick="exibirMapa()" data-target="mapaModal">
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
                        echo "<td class='td-tabela_ocorrencia'> $row->cd_atendimento </td>";
                        echo "<td class='td-tabela_ocorrencia'> $row->nm_socorrido </td>";
                        echo "<td class='td-tabela_ocorrencia'> $row->ds_descricao_atendente </td>";
                        echo "<td class='td-tabela_ocorrencia'> $row->st_comorbidade </td>";
                        echo "<td>
                                <button class='btn btn-ocorrencia text-white' onclick='visualizar('".$cd_atendimento."')'>Visualizar</button>
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

     <!-- Modal de Vizualização -->
     <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content p-5">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Visualizar ocorrência</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="form-group">
                    <label for="nomeSolicitante">Solicitante</label>
                    <input type="text" class="form-control" id="nomeSolicitante" placeholder="Nome Completo">
                </div>
                <div class="form-group">
                    <label for="nomeSocorrido">Socorrido</label>
                    <input type="text" class="form-control" id="nomeSocorrido" placeholder="Nome completo">
                </div>
                <div class="form-group">
                    <label for="faixaEtaria">Faixa etária</label>
                    <input type="number" class="form-control" id="faixaEtaria" placeholder="Faixa etária">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="number" class="form-control" id="descricao" placeholder="Descrição">
                </div>
                <div class="form-group">
                    <label for="comorbidade">Comorbidade</label>
                    <input type="number" class="form-control" id="comorbidade" placeholder="Comorbidade">
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="number" class="form-control" id="cidade" placeholder="Nome da cidade">
                </div>
                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input type="date" class="form-control" id="bairro" placeholder="Nome do bairro">
                </div>
                <div class="form-group">
                    <label for="rua">Rua</label>
                    <input type="text" class="form-control" id="rua" placeholder="Nome da rua">
                </div>
                <div class="form-group">
                    <label for="numero">N°</label>
                    <input type="date" class="form-control" id="numero" placeholder="Número da casa">
                </div>
                </div>
                <div class="modal-footer mx-auto mt-3">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim do Modal de Vizualização -->


    <!-- SCRIPTS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <script>

        // Visualizar
        function visualizar(updateid) {
            $('#hiddendata').val(updateid);
            $.post('update.php',{updateid:updateid},function(data, status){
                var ocorrenid = JSON.parse(data);
                $('#nomeSolicitante').val(ocorrenid.nm_solicitante);
                $('#nomeSocorrido').val(ocorrenid.nm_socorrido);
                $('#faixaEtaria').val(ocorrenid.ds_faixa_etaria_socorrido);
                $('#descricao').val(ocorrenid.ds_descricao_atendente);
                $('#comorbidade').val(ocorrenid.st_comorbidade);
                $('#cidade').val(ocorrenid.nm_cidade);
                $('#bairro').val(ocorrenid.nm_bairro);
                $('#rua').val(ocorrenid.nm_rua);
                $('#numero').val(ocorrenid.nr_numero);
            });

            $('#completeModal').modal('show');
        }

    </script>

</body>
</html>