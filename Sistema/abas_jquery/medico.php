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
                <li>ABA 3</li>
                <li>ABA 4</li>
            </ul>
            <div class="tab_container_area">
                <div class="tab_container">
                    <form method="POST" style="margin-top: 20px">

                        <center>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Chamado</th>
                                        <th scope="col">Nome Socorrido</th>
                                        <th scope="col">Descrição Básica do Caso</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Numero do atendimento</th>
                                        <td>Nome</td>
                                        <td>Desc</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Numero do atendimento</th>
                                        <td>Nome</td>
                                        <td>Desc</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Numero do atendimento</th>
                                        <td>Nome</td>
                                        <td>Desc</td>
                                    </tr>
                                </tbody>
                            </table>
                        </center>

                     </form>
                </div>
                <div class="tab_container">
                    <form method="POST" style="margin-top: 20px">

                        <center>
                            <label>Campos de nome</label><br>
                                <input type="text" name="nomeCompleto" placeholder="Nome completo" value="" readonly><br>
                                <input type="text" name="nomeSocorrido" placeholder="Nome do socorrido" value="" readonly><br>
                                <input type="number" name="faixaEtaria" placeholder="Digite a faixa etária do socorrido" value="" style="width: 238px;" readonly><br><br>
                            
                            <label>Possui Comorbidades</label><br>
                                <input type="text" name="comorbs" value="" placeholder="sim ou não" readonly><br><br>

                            <label>Endereço</label><br>
                                <input type="text" name="cidadeLocal" placeholder="Insira a cidade" value="" readonly>
                                <input type="text" name="bairroLocal" placeholder="Insira o bairro" value="" readonly><br>
                                <input type="text" name="ruaLocal" placeholder="Insira a rua" value="" readonly>
                                <input type="number" name="numeroLocal" placeholder="Informe o n°" value="" readonly><br><br>

                                <input type="number" name="telContato" id="telefoneContato" placeholder="Digite um telefone para Contato" style="width: 238px;" readonly>
                                <textarea name="descricao" style="text-align: center;" readonly>aaa</textarea>
                        </center>

                     </form>
                </div>

                <div class="tab_container">

                    <main>
                        <label>*</label> <p>Descrição detalhada</p>
                        <textarea id="textarea" name="descricaoDetalhada" ></textarea>

                        <table>
                            <tr>
                                <td>
                                    <select name="ambulancia2" id="select1">
                                        <option value="prioridade">Prioridade</option>
                                        <option value="semgravidade">Sem gravidade</option>
                                        <option value="poucograve">Pouco grave</option>
                                        <option value="grave">Grave</option>
                                        <option value="muitograve">Muito grave</option>
                                        <option value="extremamentegrave">Extremamente grave</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <select name="ambulancia" id="select2">
                                        <option value="volvo">Tipo de Ambulância</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </main>

                </div>    
            </div>
        </div>


        <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>

</html>