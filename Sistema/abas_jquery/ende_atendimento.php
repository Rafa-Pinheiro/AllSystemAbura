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
    <link rel="stylesheet" type="text/css" href="css/estiloAtendente.css">

    <title>Tela Atendente</title>

</head>
<body>
    
    <div class="container">
        <ul class="tab_navigation">
            <li>ABA 1</li>
            <li>ABA 2</li>
        </ul>
        <div class="tab_container_area">
            <div class="tab_container">
                    
                    <center>
                        <label>Endereço</label><br>
                            <input type="text" id="cidadeLocal" placeholder="Insira a cidade" required>
                            <input type="text" id="bairroLocal" placeholder="Insira o bairro" required><br>
                            <input type="text" id="ruaLocal" placeholder="Insira a rua" required>
                            <input type="number" id="numeroLocal" placeholder="Informe o n°" ><br><br>

                            <label>Campos de nome</label><br>
                            <input type="text" id="nomeCompleto" placeholder="Nome completo"required><br>
                            <input type="text" id="nomeSocorrido" placeholder="Nome do socorrido" ><br>
                            <input type="number" id="faixaEtaria" placeholder="Digite a faixa etária do socorrido" style="width: 205px;" required><br><br>
                        
                        <label>Possui Comorbidades</label><br>
                            <input type="text" id="coms" placeholder="O Socorrido Possui Comorbidades?" style="width: 258px;" required><br>
                        
                        <textarea id="descBasica" placeholder="Insira a descrição" required></textarea>

                        <input type="submit" onclick="addCadastroAtendimento();" value="Enviar">
                    </center>
                
            </div>

            <div class="tab_container">
                <main>
                    <table>
                        <tr>
                            <td> 
                                <select name="ambulancia" id="select1">
                                    <option value="volvo">Tipo de Ambulância</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td> <select name="ambulancia2" id="select2">
                                    <option value="volvo">Qtd.Ocorrência</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </main>
            </div>    
            
        </div>
    </div>


    <!-- SCRIPTS -->
    <script>

        function addEndereco() {
          var cidadeAdd=$('#cidadeLocal').val();
          var bairroAdd=$('#bairroLocal').val();
          var ruaAdd=$('#ruaLocal').val();
          var numeroAdd=$('#numeroLocal').val();

          $.ajax({
            url: 'recebe_atendimento_endereco.php',
            type: 'POST',
            data:{
                cidadeSend: cidadeAdd,
                bairroSend: bairroAdd,
                ruaSend: ruaAdd,
                numeroSend: numeroAdd,
            },
            success: function () {
                console.log('foi1');
            }
          });
        }
        
        function addDados() {
          var nomeComplAdd=$('#nomeCompleto').val();
          var nomeSocorrAdd=$('#nomeSocorrido').val();
          var faixaEtariaAdd=$('#faixaEtaria').val();
          var comorbidadesAdd=$('#coms').val();
          var descBasicaAdd=$('#descBasica').val();

          $.ajax({
            url: 'recebe_atendente.php',
            type: 'POST',
            data:{
                nomeComplSend: nomeComplAdd,
                nomeSocorrSend: nomeSocorrAdd,
                faixaEtariaSend: faixaEtariaAdd,
                comorbidadesSend: comorbidadesAdd,
                descBasicaSend: descBasicaAdd,
            },
            success: function () {
                console.log('foi2');
            }
          });
        }

        function addCadastroAtendimento(){
            addEndereco();
            addDados();
        }

    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

</body>
</html>