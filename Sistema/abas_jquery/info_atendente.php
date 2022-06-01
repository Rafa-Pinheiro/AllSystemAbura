<?php include_once('../conection/conexao.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" >
        <link rel="stylesheet" type="text/css" href="css/estiloAtendente.css">

        <title>Tela Atendente</title>

    </head>
    <body>
        
    <div class="container">
            <ul class="tab_navigation">
                <li>ABA 1</li>
                <li>ABA 2</li>
                <li>ABA 3</li>
            </ul>
            <div class="tab_container_area">
                <div class="tab_container">

                <form action="" method="POST">
                        
                        <center>
                            <label>Endereço</label><br>
                                <input type="text" name="cidadeLocal" placeholder="Insira a cidade" readonly>
                                <input type="text" name="bairroLocal" placeholder="Insira o bairro" readonly><br>
                                <input type="text" name="ruaLocal" placeholder="Insira a rua" readonly>
                                <input type="number" name="numeroLocal" placeholder="Informe o n°" readonly><br><br>
                        </center>

                    </form>

                </div>

                <div class="tab_container">

                <form action="recebe_atendente.php" method="POST">
                        
                        <center>
                        <label>Campos de nome</label><br>
                                <input type="text" name="nomeCompleto" placeholder="Nome completo"required><br>
                                <input type="text" name="nomeSocorrido" placeholder="Nome do socorrido" ><br>
                                <input type="number" name="faixaEtaria" placeholder="Digite a faixa etária do socorrido" style="width: 205px;" required><br><br>
                            
                            <label>Possui Comorbidades</label><br>
                                <input type="radio" name="coms" value="s" required>Sim<br>
                                <input type="radio" name="coms" value="n" required>Não<br><br>
                            
                            <input type="number" name="telContato" id="telefoneContato" placeholder="Digite um telefone para Contato" style="width: 203px;">
                            <textarea name="descricaoSimples" placeholder="Insira a descrição" required></textarea>

                            <input type="submit" value="Enviar">
                        </center>

                    </form>

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


        <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>

</html>