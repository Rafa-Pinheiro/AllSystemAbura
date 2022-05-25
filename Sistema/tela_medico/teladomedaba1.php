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
<html lang="pt-BR" dir="ltr">

	<head class="fonte">
		<!-- TAGS METAS -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- BOOTSTRAP AND CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="../css/medaba1.css">

		<title>Tela do Médico</title>
	</head>

	<body class="fonte">

		<!-- NAVEGAÇÃO -->
		<ul class="navbar">
			<li><a href="#"><img class="renatinha" alt="Renatinha, logo do sistema. Em cor totalmente branca mostrando apenas a cabeça da axolote (logo)." src="../assets/axolote.png"></a></li>
			<li><a id="aba1" href="teladomedaba1.php">Aba1</a></li>
			<li><a id="aba2" href="teladomedaba2.php">Aba2</a></li>
			<li><a id="aba3" href="teladomedaba3.php">Aba3</a></li>
		</ul>

		<!-- CONTEÚDO PRINCIPAL -->
		<main>                                                                 
			<form>
				<a href="../crud_e_login/encerrar_session.php"><img src="../assets/seta.png" height="50px" width="50px">Sair da conta</a>
				
				<input id="distancia" class="campos" type="text" name="nome" placeholder="Nome Completo" required readonly>
				<input class="campos2" type="text" name="nome" placeholder="Nome Completo do acidentado" required readonly>
				<input class="campos idade" id="idde" type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" name="numerores" placeholder="Informe a faixa etária" required readonly>

				<h3 class="letrac letrah3">Possui Comorbidades?</h3>

				<input class="rd" type="radio" id="sim" value="sim" name="comorbidade" readonly>
				<label class="radio" for="sim">Sim</label>
				<input class="rd" type="radio" id="nao" value="nao" name="comorbidade" readonly>
				<label class="radio" for="nao">Não</label>

				<h2 class="letrac letrah2">Localização</h2>

				<input class="campos" type="text" id="rua" name="rua" placeholder="Informe a rua" required readonly>
				<input class="campos2" type="text" id="bairro" name="bairro" placeholder="Informe o bairro" required readonly>
				<input class="campos cidade" type="text" id="cidade" name="cidade" placeholder="Informe a cidade" required readonly>
				<input id="numerores" type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" name="numerores" placeholder="Informe o n°" required readonly>
				<h4 class="letrac letrah4"> Descrição </h4>
				<textarea id="textarea" readonly></textarea>

			</form>
		</main>
		<!-- .FINAL CONTEÚDO PRINCIPAL -->

		<!-- ENGRENAGEM -->
		<div class="container">
			<img src="../assets/modal.gif" onclick="document.getElementById('id01').style.display='block'" alt="Avatar" id="image">
		</div>

		<!-- INÍCIO MODAL -->
		<div id="id01" class="w3-modal">
			<div class="w3-modal-content w3-card-4 w3-animate-zoom">

				<header class="w3-container w3-pale-blue">
					<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-pale-blue w3-xlarge w3-display-topright">&times;</span>
					<h2>Opções</h2>
				</header>

				<div class="w3-bar w3-border-bottom">
					<button class="tablink w3-bar-item w3-button" onclick="abrir(event, 'telas')">Tela</button>
					<button class="tablink w3-bar-item w3-button" onclick="abrir(event, 'ajuste')">Ajustes</button>
					<button class="tablink w3-bar-item w3-button" onclick="abrir(event, 'contato')">Fale Conosco</button>
				</div>

				<div id="telas" class="w3-container city">
					<i id="edit" class="fa-solid fa-pen-to-square"><h1 id="Aparencia">Aparencia</h1></i>
					<div>
						<h2 id="ampliar">Ampliar fonte</h2>
						<input type="checkbox" class="checkbox2" id="chk2" name="idd">
						<label class="label2" for="chk2">
							<div class="bola2"></div>
						</label>
					</div>

					<div>
						<h2 id="escuro">modo escuro</h2>
						<input type="checkbox" class="checkbox" id="chk" name="id" >
						<label class="label" for="chk">
							<div class="bola"></div>
						</label>
					</div>

					<script>
						function dark(){
							document.body.classList.toggle('dark');
							document.querySelector('.navbar').classList.toggle('dark');
							document.querySelector('.campos').classList.toggle('dark');
							document.querySelector('.campos2').classList.toggle('dark');
							document.querySelector('#idde').classList.toggle('dark');
							document.querySelector('#bairro').classList.toggle('dark');
							document.querySelector('#rua').classList.toggle('dark');
							document.querySelector('#cidade').classList.toggle('dark');
							document.querySelector('#numerores').classList.toggle('dark');
							document.querySelector('#textarea').classList.toggle('dark');
						}
						const chk = document.getElementById('chk')
						chk.addEventListener('change', () => {
							dark();
						});

						function ampli(){
							document.body.classList.toggle('ampli');
							document.querySelector('.campos').classList.toggle('ampli');
							document.querySelector('.campos2').classList.toggle('ampli');
							document.querySelector('#idde').classList.toggle('ampli');
							document.querySelector('#rua').classList.toggle('ampli');
							document.querySelector('#bairro').classList.toggle('ampli');
							document.querySelector('#cidade').classList.toggle('ampli');
							document.querySelector('#numerores').classList.toggle('ampli');
							document.querySelector('#textarea').classList.toggle('ampli');
						}
						const chk2 = document.getElementById('chk2')
						chk2.addEventListener('change', () => {
							ampli();
						});
					</script>
				</div>

				<div id="ajuste" class="w3-container city">
					<h1>Algum problema? Nos comunique!</h1>
					<p>Equipe: Abura </p>
					<p>Data de criação: 24/05/2022 </p><br>
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
		<!-- .FINAL MODAL -->

		<!-- IMG LATERAL -->
		<img src="../img/enfeite_azul.png" id="canto">

		<!-- SCRIPTS -->
		<script src="../js/motor.js"></script>
		<script src="https://kit.fontawesome.com/c9619274ba.js" crossorigin="anonymous"></script>

	</body>
</html>
