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

    <!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="../assets/favicon/site.webmanifest">
    
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" >
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Tela Atendente</title>

</head>
<body>
    <!-- NAVIGATION -->
    
    <nav class="navbar navbar-expand navbar-light navbar-ocorrencia">
        <img src="../assets/img/axolote.png" id="img-axolote" width="60" height="42" alt="Abura">
        <ul class="tab_navigation navAbas">
        <li>ABA 1</li>
        <li>ABA 2</li>
        </ul>
        <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
        <a href="../conection/encerrar_session.php"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">SAIR</button></a>
    </nav>

    <!-- FIM NAVIGATION -->    
            
        <div class="container mt-4">
            <div class="tab_container" id="abaUm">
            <div class="col-md-10">
                <div class="form-group">
                    <label class="titulos" id="tituloEnde">Informações Iniciais</label>
                    <div class="row mb-5">
                        <div class="col-lg col-md-6">
                            <label class="atendente-labels" for="nomeCompleto">Nome completo</label>
                            <input type="text" id="nomeCompleto" class="form-control atendente-inputs" placeholder="Insira o nome completo" required>
                        </div>
                        <div class="col-lg col-md-6 mt-2">
                            <label class="atendente-labels" for="nomeSocorrido">Nome do socorrido</label>
                            <input type="text" id="nomeSocorrido" class="form-control atendente-inputs" placeholder="Insira o nome do socorrido">
                        </div>
                        <div class="col-lg col-md mt-2">
                            <label class="atendente-labels" for="faixaEtaria">Faixa etária do socorrido</label>
                            <input type="number" id="faixaEtaria" class="form-control atendente-inputs" placeholder="Insira a faixa etária" required>
                        </div>
                    </div>

                    <label class="titulos" id="tituloEnde">Endereço</label>
                    <div class="row">
                        <div class="col-sm">
                            <label class="atendente-labels" for="cidadeLocal">Cidade</label>
                            <input type="text" id="cidadeLocal" class="form-control atendente-inputs" placeholder="Insira a cidade" required>
                        </div>
                        <div class="col-sm">
                            <label class="atendente-labels" for="bairroLocal">Bairro</label>
                            <input type="text" id="bairroLocal" class="form-control atendente-inputs" placeholder="Insira o bairro" required>
                        </div>
                    </div>

                    <div class="row mb-5 mt-2">
                        <div class="col-sm">
                            <label class="atendente-labels" for="ruaLocal">Rua</label>
                            <input type="text" id="ruaLocal" class="form-control atendente-inputs" placeholder="Insira a rua" required>
                        </div>
                        <div class="col-sm">
                            <label class="atendente-labels" for="numeroLocal">Número</label>
                            <input type="number" id="numeroLocal" class="form-control atendente-inputs" placeholder="Insira o n°" required>
                        </div>
                    </div>
                                  
                    <label class="titulos" id="tituloComs">Detalhes</label>
                    <div class="row">
                        <div class="col-sm">
                            <label class="atendente-labels" for="coms">O socorrido possui comorbidades?</label>
                            <input type="text" id="coms" class="form-control atendente-inputs" placeholder="Comorbidades" required>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm">
                            <label class="atendente-labels" for="descBasica">Descrição</label>
                            <textarea id="descBasica" class="form-control atendente-inputs" placeholder="Insira a descrição" maxlength="80" rows="4" required></textarea>
                        </div>
                    </div>

                    <input type="submit" class="btn btn-success mt-4 px-5 py-2" onclick="addCadastroAtendimento();" id="botaoCad" value="Enviar">
                </div>
                </div>

                <div class="tab_container" id="abaDois">
                    <main>
                        <table>
                            <tr>
                                <td> 
                                    <select name="ambulancia" id="selectUm">
                                        <option value="volvo">Tipo de Ambulância</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td> <select name="ambulancia2" id="selectDois">
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

            <!-- MODAL CONFIGS -->    
            <img src="../assets/img/modal.gif" onclick="document.getElementById('id01').style.display='block'" alt="Engrenagem" id="image" style="display: block; width: 150px; height: 150px; margin-top: -20px; margin-left: 100%;">
            
            <div id="id01" class="w3-modal">
			<div class="w3-modal-content w3-card-4 w3-animate-zoom">

				<header class="w3-container w3-pale-green">
					<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-pale-green w3-xlarge w3-display-topright">&times;</span>
					<h2>Opções</h2>
				</header>

				<div class="w3-bar w3-border-bottom">
					<button class="tablink w3-bar-item w3-button" onclick="abrir(event, 'telas')">Tela</button>
					<button class="tablink w3-bar-item w3-button" onclick="abrir(event, 'ajuste')">Ajustes</button>
					<button class="tablink w3-bar-item w3-button" onclick="abrir(event, 'contato')">Fale Conosco</button>
				</div>

				<div id="telas" class="w3-container city">
					<i id="edit" class="fa-solid fa-pen-to-square"><h1 id="Aparencia">Aparência</h1></i>
					<div class="row">
                        <input type="checkbox" class="checkbox2" id="chk2" name="idd"><label class="amplia_escurece">Ampliar Fontes</label>
					</div>

					<div class="row">
                        <input type="checkbox" class="checkbox" id="chk" name="id">	<label class="amplia_escurece">Modo Escuro</label>
					</div>

					<script>

                        document.getElementsByClassName("tablink")[0].click();

                        function abrir(evt, cityName) {
                            var i, x, tablinks;
                            x = document.getElementsByClassName("city");
                            for (i = 0; i < x.length; i++) {
                                x[i].style.display = "none";
                            }
                            tablinks = document.getElementsByClassName("tablink");
                            for (i = 0; i < x.length; i++) {
                                tablinks[i].classList.remove("w3-light-grey");
                            }
                            document.getElementById(cityName).style.display = "block";
                            evt.currentTarget.classList.add("w3-light-grey");
                        }

						function dark(){
							document.body.classList.toggle('dark');
                            document.querySelector('#selectUm').classList.toggle('dark');
                            document.querySelector('#selectDois').classList.toggle('dark');
                            document.querySelector('#abaUm').classList.toggle('dark');
                            document.querySelector('#abaDois').classList.toggle('dark');
                            document.querySelector('#botaoCad').classList.toggle('dark');
                            document.querySelector('#tituloEnde').classList.toggle('dark');
                            document.querySelector('#tituloNomes').classList.toggle('dark');
                            document.querySelector('#tituloComs').classList.toggle('dark');
							document.querySelector('#cidadeLocal').classList.toggle('dark');
							document.querySelector('#ruaLocal').classList.toggle('dark');
							document.querySelector('#bairroLocal').classList.toggle('dark');
							document.querySelector('#numeroLocal').classList.toggle('dark');
							document.querySelector('#nomeCompleto').classList.toggle('dark');
							document.querySelector('#nomeSocorrido').classList.toggle('dark');
							document.querySelector('#faixaEtaria').classList.toggle('dark');
							document.querySelector('#coms').classList.toggle('dark');
							document.querySelector('#descBasica').classList.toggle('dark');
							document.querySelector('#canto').classList.toggle('dark');
						}
						const chk = document.getElementById('chk')
						chk.addEventListener('change', () => {
							dark();
						})

						function ampli(){
							document.body.classList.toggle('ampli');
                            document.querySelector('#selectUm').classList.toggle('ampli');
                            document.querySelector('#selectDois').classList.toggle('ampli');
                            document.querySelector('#botaoCad').classList.toggle('ampli');
                            document.querySelector('#tituloEnde').classList.toggle('ampli');
                            document.querySelector('#tituloNomes').classList.toggle('ampli');
                            document.querySelector('#tituloComs').classList.toggle('ampli');
							document.querySelector('#cidadeLocal').classList.toggle('ampli');
							document.querySelector('#ruaLocal').classList.toggle('ampli');
							document.querySelector('#bairroLocal').classList.toggle('ampli');
							document.querySelector('#numeroLocal').classList.toggle('ampli');
							document.querySelector('#nomeCompleto').classList.toggle('ampli');
							document.querySelector('#nomeSocorrido').classList.toggle('ampli');
							document.querySelector('#faixaEtaria').classList.toggle('ampli');
							document.querySelector('#coms').classList.toggle('ampli');
							document.querySelector('#descBasica').classList.toggle('ampli');
							document.querySelector('#canto').classList.toggle('ampli');
						}
						const chk2 = document.getElementById('chk2')
						chk2.addEventListener('change', () => {
							ampli();
						});

					</script>

				    </div>
					<div id="ajuste" class="w3-container city">
						<h1>Algum problema? Nos comunique!</h1>
						<p>Equipe: Abura</p>
						<p>Data de criação: 24/05/2022</p>
					</div>

					<div id="contato" class="w3-container city">
						<h2>Informações de Contato</h2>
						<i class="fa-solid fa-phone">Telefone:40028922 </i>
						<i class="fa-brands fa-whatsapp">Whatsapp:13982192428 </i>
						<i class="fa-solid fa-at">E-mail:abura@gmail.com </i>
					</div>

					<div class="w3-container w3-light-grey w3-padding">
						<button class="w3-button w3-right w3-white w3-border" onclick="document.getElementById('id01').style.display='none'">fechar</button>
					</div>
			        </div>
		        </div>
            <!-- FIM MODAL CONFIGS -->
        </div>

    <!-- SCRIPTS -->
    <script>

        function addEndereco() {

          var cidadeAdd=$('#cidadeLocal').val();
          var bairroAdd=$('#bairroLocal').val();
          var ruaAdd=$('#ruaLocal').val();
          var numeroAdd=$('#numeroLocal').val();

          $.ajax({
            url: 'funcionalidades/recebe_atendimento_endereco.php',
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
          var descBasicaAdd=$('#descBasica').val();
          var comorbidadesAdd=$('#coms').val();
          

          $.ajax({
            url: 'funcionalidades/recebe_atendente.php',
            type: 'POST',
            data:{
                nomeComplSend: nomeComplAdd,
                nomeSocorrSend: nomeSocorrAdd,
                faixaEtariaSend: faixaEtariaAdd,
                descBasicaSend: descBasicaAdd,
                comorbidadesSend: comorbidadesAdd,
            },
            success: function () {
                console.log('foi sim');
            }
          });
        }

        function addCadastroAtendimento(){
            addEndereco();
            addDados();
        }
    </script>


    <!-- SCRIPT -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/script.js"></script>
        <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js" defer></script>
        <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css" />
        <script src="../js/motor.js"></script>
	<!-- FIM SCRIPT -->

</body>
</html>