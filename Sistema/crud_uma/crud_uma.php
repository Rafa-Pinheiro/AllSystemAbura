<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Ambulâncias</title>
</head>

<body>

    <div class="container my-3">
        <h1 class="text-center">Ambulâncias</h1>
        <button type="button" class="btn btn-dark my-3" data-toggle="modal" data-target="#completeModal">
            Adicionar
        </button>
        <div id="displayDataTable"></div>
    </div>

    <!-- Modal de Cadastro -->
    <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastrar Ambulância</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                <div class="form-group">
                    <label for="placa">Placa</label>
                    <input type="text" class="form-control" id="placa" placeholder="Placa do veículo">
                </div>
                <div class="form-group">
                    <label for="chassi">Chassi</label>
                    <input type="text" class="form-control" id="chassi" placeholder="Chassi do veículo">
                </div>
                <div class="form-group">
                    <label for="fabricacao">Ano de Fabricação</label>
                    <input type="number" class="form-control" id="fabricacao" placeholder="Ano de fabricação">
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <input type="text" class="form-control" id="tipo" placeholder="Tipo da ambulância">
                </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" onclick="adduma()">Salvar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim do Modal de Cadastro -->

    <!-- Modal de Edição -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Cadastro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                <div class="form-group">
                    <label for="updateplaca">Placa</label>
                    <input type="text" class="form-control" id="updateplaca" placeholder="Placa do veículo">
                </div>
                <div class="form-group">
                    <label for="updatechassi">Chassi</label>
                    <input type="text" class="form-control" id="updatechassi" placeholder="Chassi do veículo">
                </div>
                <div class="form-group">
                    <label for="updatefabricacao">Ano de Fabricação</label>
                    <input type="text" class="form-control" id="updatefabricacao" placeholder="Ano de fabricação">
                </div>
                <div class="form-group">
                    <label for="updatetipo">Tipo</label>
                    <input type="text" class="form-control" id="updatetipo" placeholder="Tipo da ambulância">
                </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" onclick="updateDetails()">Alterar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    <input type="hidden" id="hiddendata">
                </div>
            </div>
        </div>
    </div>
    <!-- Fim do Modal de Edição -->



    <!-- SCRIPTS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            displayData();
        });

        function displayData() {
            var displayData="true";

            $.ajax({
                url: 'display.php',
                type: 'post',
                data:{
                    displaySend: displayData
                },
                success: function(data, status) {
                    $('#displayDataTable').html(data);
                }
            });
        }

        function adduma() {
          var placaAdd=$('#placa').val();
          var chassiAdd=$('#chassi').val();
          var fabricacaoAdd=$('#fabricacao').val();
          var tipoAdd=$('#tipo').val();

          $.ajax({
            url: 'cadastrar.php',
            type: 'post',
            data:{
                placaSend: placaAdd,
                chassiSend: chassiAdd,
                fabricacaoSend: fabricacaoAdd,
                tipoSend: tipoAdd,
            },
            success: function (data,status) {
                //console.log(status);
                $('#completeModal').modal('hide');
                displayData();
            }
          });
        }

        // Deleção
        function DeleteUma(deleteid) {
            $.ajax({
                url: 'delete.php',
                type: 'post',
                data:{
                    deletesend: deleteid
                },
                success: function(data, status) {
                    displayData();
                }
            });
        }

        // Alteração
        function GetDetails(updateid) {
            $('#hiddendata').val(updateid);
            $.post('update.php',{updateid:updateid},function(data, status){
                var umaid = JSON.parse(data);
                $('#updateplaca').val(umaid.cd_placa);
                $('#updatechassi').val(umaid.nr_chassi);
                $('#updatefabricacao').val(umaid.dt_ano_fabricacao);
                $('#updatetipo').val(umaid.nm_tipo);
            });

            $('#updateModal').modal('show');
        }

        //Eevento onclick do EDITAR
        function updateDetails() {
            var updateplaca = $('#updateplaca').val();
            var updatechassi = $('#updatechassi').val();
            var updatefabricacao = $('#updatefabricacao').val();
            var updatetipo = $('#updatetipo').val();
            var hiddendata = $('#hiddendata').val();

            $.post('update.php',{
                updateplaca: updateplaca,
                updatechassi: updatechassi,
                updatefabricacao: updatefabricacao,
                updatetipo: updatetipo,
                hiddendata: hiddendata,
            },function(data, status) {
                $('#updateModal').modal('hide');
                displayData();
            });
        }
    </script>
</body>

</html>