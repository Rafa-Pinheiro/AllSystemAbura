<?php include('conexao.php') ?>
<!DOCTYPE html>
	<html lang="pt-BR" dir="ltr">
		<head class="fonte">
	    	<meta charset="utf-8">
    			

	        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

					  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

				  <link rel="stylesheet" href="aba2atendente.css">

	    	<title>Tela do Atendente</title>

		</head>

	<body class="fonte">

	    	<ul class="navbar">

	    		<li ><a href="#"><img class="renatinha" alt="Renatinha, logo do sistema. Em cor totalmente branca mostrando apenas a cabeça da axolote (logo)." src="img/axolote.png"></a></li>
	    			<li ><a id="aba1" href="teladoatendenteaba1.php">Aba1</a></li>
	       				<li ><a id="aba2" href="teladoatendenteaba2.php">Aba2</a></li>

	    	</ul>
	  	<main>

	  				<table>

	  					<tr>

	  		 				<td>	<select name="ambulancia" id="select1" class="campos distancia2 distancia3">

    							<option value="volvo">Tipo de Ambulância</option>
    								<option value="A">A</option>
   										<option value="B">B</option>
    										<option value="C">C</option>

									</select>

							</td>	
						</tr>

						<tr>

							<td>	<select name="ambulancia2" id="select2" class="campos distancia distancia3">

    							<option value="volvo">Qtd.Ocorrência</option>
    								<option value="1">1</option>
   										<option value="2">2</option>
    										<option value="3">3</option>
    										
    								</select>
							</td>	

						</tr>

						</table>

	    			</main>
	    			
				<div class="container">
					<img src="img/modal.gif" onclick="document.getElementById('id01').style.display='block'" alt="Avatar" id="image">

				</div>

				<div id="id01" class="w3-modal">
					<div class="w3-modal-content w3-card-4 w3-animate-zoom">
				    	<header class="w3-container w3-pale-green" >
				            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-pale-green w3-xlarge w3-display-topright">&times;</span>
				                                     <h2>Opções</h2>
				       </header>

				<div class="w3-bar w3-border-bottom">
				    <button class="tablink w3-bar-item w3-button" onclick="abrir(event, 'telas')">Tela</button>
				    	<button class="tablink w3-bar-item w3-button" onclick="abrir(event, 'ajuste')">Ajustes</button>
				    		<button class="tablink w3-bar-item w3-button" onclick="abrir(event, 'contato')">Fale Conosco</button>
				</div>

					<div id="telas" class="w3-container city">
				    	<div class="switch__container">
				    	<h1 id="escuro">modo escuro</h1>
				    <div>
							<input type="checkbox" class="checkbox" id="chk" name="">
								<label class="label" for="chk">
						<div class="bola"></div>
								</label>
					</div>
   							
							<script type="text/javascript">
									
									function dark( ){
									document.body.classList.toggle('dark');
									document.querySelector('.navbar').classList.toggle('dark');
									document.querySelector('.customers').classList.toggle('dark');
									document.querySelector('#qntd').classList.toggle('dark');
									document.querySelector('#cabecalho').classList.toggle('dark');
									document.querySelector('#select1').classList.toggle('dark');
									document.querySelector('#select2').classList.toggle('dark');
									document.querySelector('#cidade').classList.toggle('dark');
									document.querySelector('#numerores').classList.toggle('dark');
									document.querySelector('#textarea').classList.toggle('dark');
									document.querySelector('#canto').classList.toggle('dark');




									}
									const chk = document.getElementById('chk')


									chk.addEventListener('change', () => {
										dark();
									})	

									
								</script>
							
			</div>
				    		
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
				 	<img src="img/enfeite.png" id="canto">

<div id="qntd"><p id="qtd">QNTD.AMBULÂNCIA</p></div>

				 	<div class="distancia4">
						<div id="tabela">
							
							<table class="customers">

										<th id="cabecalho"> Ambulâncias </th>

											<tr class="camp">
												<td class="amb">exemplo</td>
											</tr>

											<tr class="camp">
												<td class="amb">exemplo</td>
											</tr>

											<tr class="camp">
												<td class="amb">exemplo</td>
											</tr>

											<tr class="camp">
												<td class="amb">exemplo</td>
											</tr>

											<tr class="camp">
												<td class="amb">exemplo</td>
											</tr>

											<tr class="camp">
												<td class="amb">exemplo</td>
											</tr>

											<tr class="camp">
												<td class="amb">exemplo</td>
											</tr>
											<tr class="camp">
												<td class="amb">exemplo</td>
											</tr>

											<tr class="camp">
												<td class="amb">exemplo</td>
											</tr>

											<tr class="camp">
												<td class="amb">exemplo</td>
											</tr>

											<tr class="camp">
												<td class="amb">exemplo</td>
											</tr>

											<tr class="camp">
												<td class="amb">exemplo</td>
											</tr>

											<tr class="camp">
												<td class="amb">exemplo</td>
											</tr>

											<tr class="camp">
												<td class="amb">exemplo</td>
											</tr>
  
  
							</table>
						</div>
					</div>

	</body>
	
	<script src="motor.js"></script>
	<script src="script.js"></script>

</html>