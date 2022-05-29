<?php include_once('../conection/conexao.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

                <form action="recebe_atendimento_endereco.php" method="POST">
                        
                        <center>
                            <label>Endereço</label><br>
                                <input type="text" name="cidadeLocal" placeholder="Insira a cidade" required>
                                <input type="text" name="bairroLocal" placeholder="Insira o bairro" required><br>
                                <input type="text" name="ruaLocal" placeholder="Insira a rua" required>
                                <input type="number" name="numeroLocal" placeholder="Informe o n°" ><br><br>
                        </center>

                        <input type="submit" value="Enviar">

                    </form>

                    <form action="recebe_atendente.php" method="POST">
                        
                        <center>
                            <label>Campos de nome</label><br>
                                <input type="text" name="nomeCompleto" placeholder="Nome completo"required><br>
                                <input type="text" name="nomeSocorrido" placeholder="Nome do socorrido" ><br>
                                <input type="number" name="faixaEtaria" placeholder="Digite a faixa etária do socorrido" required><br><br>
                            
                            <label>Possui Comorbidades</label><br>
                                <input type="radio" name="coms" value="s" required>Sim<br>
                                <input type="radio" name="coms" value="n" required>Não<br><br>

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