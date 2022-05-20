<?php include('conexao.php') ?>
<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head class="fonte">
	<meta charset="utf-8">


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css" />

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<link rel="stylesheet" href="medaba3.css">

	<title>Tela do Médico</title>

</head>

<body class="fonte">

	<ul class="navbar">

		<li><a href="#"><img class="renatinha" alt="Renatinha, logo do sistema. Em cor totalmente branca mostrando apenas a cabeça da axolote (logo)." src="assets/axolote.png"></a></li>
		<li><a id="aba1" href="teladomedaba1.php">Aba1</a></li>
		<li><a id="aba2" href="teladomedaba2.php">Aba2</a></li>
		<li><a id="aba3" href="teladomedaba3.php">Aba3</a></li>

	</ul>
	<div id="map"></div>
			<form action="" class="form-group form" method="get">
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
	<main>
	</main>
	<div class="container">
		<img src="assets/modal.gif" onclick="document.getElementById('id01').style.display='block'" alt="Avatar" id="image">

	</div>

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
				<h1>Aqui vai o titulo</h1>
				<p>Conteudo</p>
				<p>Conteudo</p>
			</div>

			<div id="ajuste" class="w3-container city">
				<h1>Aqui vai o titulo</h1>
				<p>Conteudo</p>
				<p>Conteudo</p>
			</div>

			<div id="contato" class="w3-container city">
				<h1>Aqui vai o titulo</h1>
				<p>Conteudo</p><br>
			</div>

			<div class="w3-container w3-light-grey w3-padding">
				<button class="w3-button w3-right w3-white w3-border" onclick="document.getElementById('id01').style.display='none'">fechar</button>
			</div>

		</div>

	</div>
	<!-- https://netbeans.apache.org/kb/docs/php/configure-php-environment-ubuntu_pt_BR.html#specifyDocumentRoot  -SITE DE CONFIGURAÇÃO DO LAMP NO LINUX- -->
	<!-- https://www.youtube.com/watch?v=twLFmELptnQ -ALTERAÇÃO DE DIRETÓRIO NO APACHE2 LINUX-->
</body>

<script src="motor.js"></script>

</html>