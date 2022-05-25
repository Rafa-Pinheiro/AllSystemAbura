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
		<link rel="stylesheet" href="../css/aba2atendente.css">

		<title>Tela do Atendente</title>
	</head>

	<body class="fonte">

		<!-- NAVEGAÇÃO -->
		<ul class="navbar">
			<li><a href="#"><img class="renatinha" alt="Renatinha, logo do sistema. Em cor totalmente branca mostrando apenas a cabeça da axolote (logo)." src="../assets/axolote.png"></a></li>
			<li><a id="aba1" href="teladoatendenteaba1.php">Aba1</a></li>
			<li><a id="aba2" href="teladoatendenteaba2.php">Aba2</a></li>
			<a href="../crud_e_login/encerrar_session.php"><span class="span-sair">sair</span></a>
		]</ul>

		<!-- SELECT -->
		<main>
			<a href="../crud_e_login/encerrar_session.php"><img src="../assets/seta.png" height="50px" width="50px">Sair da conta</a>
			
			<table>
				<tr>
					<td> <select name="ambulancia" id="select1" class="campos distancia2 distancia3">
							<option value="volvo">Tipo de Ambulância</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
						</select>
					</td>
				</tr>

				<tr>
					<td> <select name="ambulancia2" id="select2" class="campos distancia distancia3">
							<option value="volvo">Qtd.Ocorrência</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</td>
				</tr>
			</table>
		</main>
		<!-- .FINAL DO SELECT -->

		<!-- ENGRENAGEM -->
		<div class="container">
			<img src="../assets/modal.gif" onclick="document.getElementById('id01').style.display='block'" alt="Avatar" id="image">
		</div>

		<!-- INÍCIO MODAL -->
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
					<i id="edit" class="fa-solid fa-pen-to-square">
						<h1 id="Aparencia">Aparência</h1>
					</i>
					<div>
						<h2 id="ampliarn">Ampliar fonte</h2>
						<input type="checkbox" class="checkbox2" id="chk2" name="idd">
						<label class="label2" for="chk2">
							<div class="bola2"></div>
						</label>
					</div>

					<div>
						<h2 id="escuron">modo escuro</h2>
						<input type="checkbox" class="checkbox" id="chk" name="id">
						<label class="label" for="chk">
							<div class="bola"></div>
						</label>
					</div>

					<script>
						function dark() {
							document.body.classList.toggle('dark');
							document.querySelector('.navbar').classList.toggle('dark');
							document.querySelector('.customers').classList.toggle('dark');
							document.querySelector('#qntd').classList.toggle('dark');
							document.querySelector('#cabecalho').classList.toggle('dark');
							document.querySelector('#select1').classList.toggle('dark');
							document.querySelector('#select2').classList.toggle('dark');
							document.querySelector('#numerores').classList.toggle('dark');
							document.querySelector('#textarea').classList.toggle('dark');
							document.querySelector('#canto').classList.toggle('dark');
						}
						const chk = document.getElementById('chk')
						chk.addEventListener('change', () => {
							dark();
						});

						function ampli() {
							document.body.classList.toggle('ampli');
							document.querySelector('#select1').classList.toggle('ampli');
							document.querySelector('#select2').classList.toggle('ampli');
							document.querySelector('.camp').classList.toggle('ampli');
							document.querySelector('#e1').classList.toggle('ampli');
							document.querySelector('#e2').classList.toggle('ampli');
							document.querySelector('#e3').classList.toggle('ampli');
							document.querySelector('#e4').classList.toggle('ampli');
							document.querySelector('#e5').classList.toggle('ampli');
							document.querySelector('#e6').classList.toggle('ampli');
							document.querySelector('#e7').classList.toggle('ampli');
							document.querySelector('#e8').classList.toggle('ampli');
							document.querySelector('#e9').classList.toggle('ampli');
							document.querySelector('#e10').classList.toggle('ampli');
							document.querySelector('#e12').classList.toggle('ampli');
							document.querySelector('#e13').classList.toggle('ampli');
							document.querySelector('.customers').classList.toggle('ampli');
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
		<!-- .FIM MODAL -->

		<!-- IMG LATERAL -->
		<img src="../img/enfeite.png" id="canto">


		<div id="qntd">
			<p id="qtd">QNTD.AMBULÂNCIA</p>
		</div>

		<!-- TABELA PRINCIPAL -->
		<div class="distancia4">
			<div id="tabela">
				<table class="customers">
					<th id="cabecalho"> Ambulâncias </th>
					<tr class="camp">
						<td class="amb">exemplo</td>
					</tr>
					<tr class="camp">
						<td id="e1" class="amb">exemplo</td>
					</tr>
					<tr class="camp">
						<td id="e2" class="amb">exemplo</td>
					</tr>
					<tr class="camp">
						<td id="e3" class="amb">exemplo</td>
					</tr>
					<tr class="camp">
						<td id="e4" class="amb">exemplo</td>
					</tr>
					<tr class="camp">
						<td id="e5" class="amb">exemplo</td>
					</tr>
					<tr class="camp">
						<td id="e6" class="amb">exemplo</td>
					</tr>
					<tr class="camp">
						<td id="e7" class="amb">exemplo</td>
					</tr>
					<tr class="camp">
						<td id="e8" class="amb">exemplo</td>
					</tr>
					<tr class="camp">
						<td id="e9" class="amb">exemplo</td>
					</tr>
					<tr class="camp">
						<td id="e10" class="amb">exemplo</td>
					</tr>
					<tr class="camp">
						<td id="e11" class="amb">exemplo</td>
					</tr>
					<tr class="camp">
						<td id="e12" class="amb">exemplo</td>
					</tr>
					<tr class="camp">
						<td id="e13" class="amb">exemplo</td>
					</tr>
				</table>
			</div>
		</div>
		<!-- .FINAL TABELA PRINCIPAL -->

		<!-- SCRIPTS -->
		<script src="../js/motor.js"></script>
		<script src="../js/script.js"></script>
		<script src="https://kit.fontawesome.com/c9619274ba.js" crossorigin="anonymous"></script>

	</body>
</html>