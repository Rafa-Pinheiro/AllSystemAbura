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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" >
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../css/style.css" >

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
                <form method="GET" style="margin-top: 20px">

                    <!-- CÓDIGO ABA 1 -->
                    <center>
                    <label>Endereço</label><br>
                            <input type="text" name="" placeholder="Insira a cidade" required readonly>
                            <input type="text" name="" placeholder="Insira o bairro" required readonly><br>
                            <input type="text" name="" placeholder="Insira a rua" required readonly>
                            <input type="number" name="" placeholder="Informe o n°" readonly><br><br>

                    <label>Campos de nome</label><br>
                            <input type="text" name="" placeholder="Nome completo" required readonly><br>
                            <input type="text" name="" placeholder="Nome do socorrido" readonly><br>
                            <input type="number" name="" placeholder="Digite a faixa etária do socorrido" style="width: 205px;" required readonly><br><br>
                        
                        <label>Possui Comorbidades</label><br>
                            <input type="text" name="" placeholder="Sim ou Não" readonly>
                        
                        <textarea name="" placeholder="Insira a descrição" required readonly></textarea>
                    </center>
                    
                 </form>
            </div>
            <div class="tab_container">
                <form action="" method="POST" style="margin-top: 20px">
                    <!-- CÓDIGO ABA DOIS -->
                    <center>
                        <textarea name="descricaoDetalhada" placeholder="Insira uma descrição detalhada do caso" required></textarea><br>

                        <label>Nivel de Prioridade</label>
                        <select name="prioridade_caso">
                            <option value="1">Sem Risco de Vida</option>
                            <option value="2">Pouca Taxa de Gravidade</option>
                            <option value="3">Gravidade Intermediária</option>
                            <option value="4">Gravidade Elevada</option>
                            <option value="5">Extrema Urgência</option>
                        </select><br>

                        <label>Tipo de Ambulância</label>
                        <select name="tipo_ambulancia">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>

                        <button type="submit">Enviar Dados</button>
                    </center>
                 </form>
            </div>    
            <div class="tab_container">
                <form method="POST" style="margin-top: 20px">
                    <!-- CÓDIGO ABA TRÊS -->
                    <center>
                        MAPA PARA VER AMBULÂNCIAS
                    </center>
                 </form>
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