<?php
session_start();
include_once('../conection/conexao.php');
if ((!isset($_SESSION['rm']) == true) and (!isset($_SESSION['senha']) == true)) {
	unset($_SESSION['rm']);
	unset($_SESSION['senha']);
	header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <title>Funcionários</title>

</head>

<body>

    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand navbar-light bg-dark">
        <a class="navbar-brand" href="#">
            <img src="../assets/axolote.png" width="66" height="48" alt="logo-abura">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        OPÇÕES DE CRUD
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Funcionários</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../crud_uma/crud_uma.php">Ambulâncias</a>
                    </div>
                </li>
            </ul>   
        </div>
        <a href="../conection/encerrar_session.php"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">SAIR</button></a>
    </nav>
    <!-- FIM NAVIGATION -->

    <div class="container my-3">
        <h1 class="text-center h1-titulo mt-5">Funcionários</h1>
        <button type="button" class="btn btn-dark my-3" data-toggle="modal" data-target="#completeModal">
            Adicionar
        </button>
        <div id="displayDataTable"></div>
    </div>

    <!-- Modal de Cadastro -->
    <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content p-5">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastrar Funcionários</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                <div class="form-group">
                    <label for="rm">RM</label>
                    <input type="number" class="form-control" id="rm" placeholder="RM">
                </div>
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Nome completo">
                </div>
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="number" class="form-control" id="cpf" placeholder="CPF">
                </div>
                <div class="form-group">
                    <label for="crm">CRM</label>
                    <input type="number" class="form-control" id="crm" placeholder="CRM">
                </div>
                <div class="form-group">
                    <label for="cnh">CNH</label>
                    <input type="number" class="form-control" id="cnh" placeholder="CNH">
                </div>
                <div class="form-group">
                    <label for="venccnh">Venc. da CNH</label>
                    <input type="date" class="form-control" id="venccnh" placeholder="Venc. da CNH">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="text" class="form-control" id="senha" placeholder="Senha">
                </div>
                <div class="form-group">
                    <label for="nasc">Nascimento</label>
                    <input type="date" class="form-control" id="nasc" placeholder="Data de Nascimento">
                </div>
                <div class="form-group">
                    <label for="cargo">Cargo</label>
                    <input type="text" class="form-control" id="cargo" placeholder="Cargo">
                </div>

                </div>
                <div class="modal-footer mx-auto mt-3">
                    <button type="button" class="btn btn-dark" onclick="addfuncionario()">Salvar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim do Modal de Cadastro -->

    <!-- Modal de Edição -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content p-5">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detalhes do Cadastro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                <div class="form-group">
                    <label for="updaterm">RM</label>
                    <input type="number" class="form-control" id="updaterm" placeholder="RM">
                </div>
                <div class="form-group">
                    <label for="updatenome">Nome</label>
                    <input type="text" class="form-control" id="updatenome" placeholder="Nome completo">
                </div>
                <div class="form-group">
                    <label for="updatecpf">CPF</label>
                    <input type="number" class="form-control" id="updatecpf" placeholder="CPF">
                </div>
                <div class="form-group">
                    <label for="updatecrm">CRM</label>
                    <input type="number" class="form-control" id="updatecrm" placeholder="CRM">
                </div>
                <div class="form-group">
                    <label for="updatecnh">CNH</label>
                    <input type="number" class="form-control" id="updatecnh" placeholder="CNH">
                </div>
                <div class="form-group">
                    <label for="updatevenccnh">Venc. da CNH</label>
                    <input type="date" class="form-control" id="updatevenccnh" placeholder="Venc. da CNH">
                </div>
                <div class="form-group">
                    <label for="updatesenha">Senha</label>
                    <input type="text" class="form-control" id="updatesenha" placeholder="Senha">
                </div>
                <div class="form-group">
                    <label for="updatenasc">Data de Nascimento</label>
                    <input type="date" class="form-control" id="updatenasc" placeholder="Data de Nascimento">
                </div>
                <div class="form-group">
                    <label for="updatecargo">Cargo</label>
                    <input type="text" class="form-control" id="updatecargo" placeholder="Cargo">
                </div>

                </div>
                <div class="modal-footer mx-auto mt-3">
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

        function addfuncionario() {
          var rmAdd=$('#rm').val();
          var nomeAdd=$('#nome').val();
          var cpfAdd=$('#cpf').val();
          var crmAdd=$('#crm').val();
          var cnhAdd=$('#cnh').val();
          var venccnhAdd=$('#venccnh').val();
          var senhaAdd=$('#senha').val();
          var nascAdd=$('#nasc').val();
          var cargoAdd=$('#cargo').val();

          $.ajax({
            url: 'cadastrar.php',
            type: 'post',
            data:{
                rmSend: rmAdd,
                nomeSend: nomeAdd,
                cpfSend: cpfAdd,
                crmSend: crmAdd,
                cnhSend: cnhAdd,
                venccnhSend: venccnhAdd,
                senhaSend: senhaAdd,
                nascSend: nascAdd,
                cargoSend: cargoAdd,
            },
            success: function (data,status) {
                //console.log(status);
                $('#completeModal').modal('hide');
                displayData();
            }
          });
        }

        // Deleção
        function DeleteFun(deleteid) {
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
                var funid = JSON.parse(data);
                $('#updaterm').val(funid.cd_rm_funcionario);
                $('#updatenome').val(funid.nm_funcionario);
                $('#updatecpf').val(funid.cd_cpf);
                $('#updatecrm').val(funid.cd_crm_medico);
                $('#updatecnh').val(funid.nr_cnh);
                $('#updatevenccnh').val(funid.dt_vencimento_cnh);
                $('#updatesenha').val(funid.ds_senha);
                $('#updatenasc').val(funid.dt_nasc);
                $('#updatecargo').val(funid.nm_cargo);
            });

            $('#updateModal').modal('show');
        }

        //Eevento onclick do EDITAR
        function updateDetails() {
            var updaterm = $('#updaterm').val();
            var updatenome = $('#updatenome').val();
            var updatecpf = $('#updatecpf').val();
            var updatecrm = $('#updatecrm').val();
            var updatecnh = $('#updatecnh').val();
            var updatevenccnh = $('#updatevenccnh').val();
            var updatesenha = $('#updatesenha').val();
            var updatenasc = $('#updatenasc').val();
            var updatecargo = $('#updatecargo').val();
            var hiddendata = $('#hiddendata').val();

            $.post('update.php',{
                updaterm: updaterm,
                updatenome: updatenome,
                updatecpf: updatecpf,
                updatecrm: updatecrm,
                updatecnh: updatecnh,
                updatevenccnh: updatevenccnh,
                updatesenha: updatesenha,
                updatenasc: updatenasc,
                updatecargo: updatecargo,
                hiddendata: hiddendata,
            },function(data, status) {
                $('#updateModal').modal('hide');
                displayData();
            });
        }
    </script>
</body>
</html>