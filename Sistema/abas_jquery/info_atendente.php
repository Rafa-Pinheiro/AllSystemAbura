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
                <form action="recebe_atendente.php" method="POST">
                    
                    <center>
                    <label>Campos de nome</label><br>
                            <input type="text" name="nomeCompleto" placeholder="Nome completo"required><br>
                            <input type="text" name="nomeSocorrido" placeholder="Nome do socorrido" ><br>
                            <input type="number" name="faixaEtaria" placeholder="Digite a faixa etária do socorrido" style="width: 205px;" required><br><br>
                        
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


    <!-- SCRIPTS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

</body>
</html>