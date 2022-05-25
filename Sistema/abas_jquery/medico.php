<?php
    $nome = $_POST['nomeCompleto'];
    $nomeAcidentado = $_POST['nomeSocorrido'];
    $faixaEtaria = $_POST['faixaEtaria'];
    $comorbidades = $_POST['coms'];
    $cidade = $_POST['cidadeLocal'];
    $bairro = $_POST['bairroLocal'];
    $rua = $_POST['ruaLocal'];
    $numero = $_POST['numeroLocal'];
    $descricao = $_POST['descricao'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/estiloAtendente.css">

        <title>Tela do Médico</title>

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
                    <form method="POST" style="margin-top: 20px">

                        <center>
                            <label>Campos de nome</label><br>
                                <input type="text" name="nomeCompleto" placeholder="Nome completo" value="<?php echo $nome ?>" style="text-align: center;" readonly><br>
                                <input type="text" name="nomeSocorrido" placeholder="Nome do socorrido" value="<?php echo $nomeAcidentado ?>" style="text-align: center;" readonly><br>
                                <input type="number" name="faixaEtaria" placeholder="Digite a faixa etária do socorrido" value="<?php echo $faixaEtaria ?>" style="width: 205px; text-align: center;" readonly><br><br>
                            
                            <label>Possui Comorbidades</label><br>
                                <input type="text" name="comorbs" value="<?php if($comorbidades == "não"){echo $comorbidades;} else { echo $comorbidades;} ?>" style="text-align: center;" readonly><br><br>

                            <label>Endereço</label><br>
                                <input type="text" name="cidadeLocal" placeholder="Insira a cidade" value="<?php echo $cidade ?>" style="margin-left: 10px; text-align: center;" readonly>
                                <input type="text" name="bairroLocal" placeholder="Insira o bairro" value="<?php echo $bairro ?>" style="margin-left: 10px; text-align: center;" readonly><br>
                                <input type="text" name="ruaLocal" placeholder="Insira a rua" value="<?php echo $rua ?>" style="margin-left: 10px; text-align: center;" readonly>
                                <input type="number" name="numeroLocal" placeholder="Informe o n°" value="<?php echo $numero ?>" style="margin-left: 10px; text-align: center;" readonly><br><br>

                                <textarea name="descricao" style="text-align: center;" readonly><?php echo htmlspecialchars($descricao); ?></textarea>
                        </center>

                     </form>
                </div>

                <div class="tab_container">

                    <main>
                        <label>*</label> <p>Descrição detalhada</p>
                        <textarea id="textarea" ></textarea>

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