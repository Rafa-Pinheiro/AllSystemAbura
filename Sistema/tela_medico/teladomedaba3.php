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
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

		<!-- MAPQUEST -->
	    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js" defer></script>
	    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css" />

		<!-- SCRIPT -->
	    <script src="../js/motor.js"></script>
	    
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
		<link rel="stylesheet" href="../css/medaba3.css">

		<title>Tela do Médico</title>
	</head>

	<body class="fonte">

		<!-- NAVEGAÇÃO -->
		<ul class="navbar">
			<li><a href="#"><img class="renatinha" alt="Renatinha, logo do sistema. Em cor totalmente branca mostrando apenas a cabeça da axolote (logo)." src="../assets/axolote.png"></a></li>
			<li><a id="aba1" href="teladomedaba1.php">Aba1</a></li>
			<li><a id="aba2" href="teladomedaba2.php">Aba2</a></li>
			<li><a id="aba3" href="teladomedaba3.php">Aba3</a></li>
			<a href="../crud_e_login/encerrar_session.php"><span class="span-sair">sair</span></a>
		</ul>

		<!-- DIV MAPA -->
		<div id="map"></div>

		<form action="" class="form-group form" method="get">

			<a href="../crud_e_login/encerrar_session.php"><img src="../assets/seta.png" height="50px" width="50px">Sair da conta</a>
			<div class="row">
				<label for="uma" id="amb" class="col-sm-2 col-form-label offset-sm-8">Nível da ambulância</label>
			</div>
			<div class="row">
					<select class="form-control col-sm-3 offset-md-8" name="uma" id="uma">
						<option value="" selected>Selecione</option>
						<option value="A">Tipo A</option>
						<option value="B">Tipo B</option>
						<option value="C">Tipo C</option>
						<option value="D">Tipo D</option>
					</select>
				</div>

		</form>

		<!-- ENGRENAGEM -->
		<div class="container">
			<img src="../assets/modal.gif" onclick="document.getElementById('id01').style.display='block'" alt="Avatar" id="image">
		</div>

		<!-- INICIO MODAL -->
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

				<div id="ajuste" class="w3-container city">
					<h1>Algum problema? Nos comunique!</h1>
					<p>Equipe: Abura </p>
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
		<!-- .FINAL DO MODAL -->

		<!-- https://netbeans.apache.org/kb/docs/php/configure-php-environment-ubuntu_pt_BR.html#specifyDocumentRoot  -SITE DE CONFIGURAÇÃO DO LAMP NO LINUX- -->
		<!-- https://www.youtube.com/watch?v=twLFmELptnQ -ALTERAÇÃO DE DIRETÓRIO NO APACHE2 LINUX-->

		<!-- SCRIPTS -->
		<script src="../js/motor.js"></script>
		<link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css" />
		<script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
		<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
		
	</body>
</html>