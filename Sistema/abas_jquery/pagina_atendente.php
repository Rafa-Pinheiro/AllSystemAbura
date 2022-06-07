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
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Tela Atendente</title>

</head>
<body>
    <!-- NAVIGATION -->
    
    <nav class="navbar navbar-expand navbar-light navbar-ocorrencia">
        <a class="navbar-brand" href="#">
        <img src="../assets/axolote.png" width="66" height="48" alt="logo-abura">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
        <a href="../conection/encerrar_session.php"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">SAIR</button></a>
    </nav>

    <!-- FIM NAVIGATION -->    

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
                            <input type="number" id="numeroLocal" placeholder="Informe o n°" required><br><br>

                            <label>Campos de nome</label><br>
                            <input type="text" id="nomeCompleto" placeholder="Nome completo"required><br>
                            <input type="text" id="nomeSocorrido" placeholder="Nome do socorrido" ><br>
                            <input type="number" id="faixaEtaria" placeholder="Digite a faixa etária do socorrido" style="width: 255px;" max="130" required><br><br>
                        
                        <label>Possui Comorbidades</label><br>
                            <input type="text" id="coms" placeholder="O Socorrido Possui Comorbidades?" style="width: 270px;" required><br>
                        
                        <textarea id="descBasica" placeholder="Insira a descrição" maxlength="80" required></textarea>

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

            <!-- MODAL CONFIGS -->    
            <img src="../assets/modal.gif" onclick="document.getElementById('id01').style.display='block'" alt="Avatar" id="image" style="display: block; width: 150px; height: 150px; margin-top: -20px; margin-left: 100%;">
            
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
					<i id="edit" class="fa-solid fa-pen-to-square"><br><br><h1 id="Aparencia">Aparência</h1></i>
					<div class="row">
                        <input type="checkbox" class="checkbox2" id="chk2" name="idd">
						<h2 id="ampliar">Ampliar fonte</h2>
						<label class="label2" for="chk2">
							<div class="bola2"></div>
						</label>
					</div>

					<div class="row">
                        <input type="checkbox" class="checkbox" id="chk" name="id" >	
                        <h2 id="escuro">modo escuro</h2>
					
						<label class="label" for="chk">
							<div class="bola"></div>
						</label>
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

						function dark( ){
							document.body.classList.toggle('dark');
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
							document.querySelector('.campos').classList.toggle('ampli');
							document.querySelector('.campos2').classList.toggle('ampli');
							document.querySelector('#faixa_etaria').classList.toggle('ampli');
							document.querySelector('#rua').classList.toggle('ampli');
							document.querySelector('#bairro').classList.toggle('ampli');
							document.querySelector('#cidade').classList.toggle('ampli');
							document.querySelector('#numerores').classList.toggle('ampli');
							document.querySelector('#desc').classList.toggle('ampli');
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
						<p>Data de criação: 24/05/2022</p><br>
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
          var descBasicaAdd=$('#descBasica').val();
          var comorbidadesAdd=$('#coms').val();
          

          $.ajax({
            url: 'recebe_atendente.php',
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <!-- MAPQUEST -->
    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js" defer></script>
	    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css" />
		<!-- FIM MAPQUEST -->

		<!-- SCRIPT -->
	    <script src="../js/motor.js"></script>
		<!-- FIM SCRIPT -->

</body>
</html>