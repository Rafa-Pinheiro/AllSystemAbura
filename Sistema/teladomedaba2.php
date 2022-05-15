<?php include('conexao.php') ?>
<!DOCTYPE html>
	<html lang="pt-BR" dir="ltr">
		<head class="fonte">
	    	<meta charset="utf-8">
    			

	        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

					  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

				  <link rel="stylesheet" href="medaba2.css">

			<title>Tela do Médico</title>

   		</head>

	<body class="fonte">

	    	<ul class="navbar">

	    		<li ><a href="#"><img class="renatinha" alt="Renatinha, logo do sistema. Em cor totalmente branca mostrando apenas a cabeça da axolote (logo)." src="img/axolote.png"></a></li>
	    			<li ><a id="aba1" href="teladomedaba1.php">Aba1</a></li>
	    				<li ><a id="aba2" href="teladomedaba2.php">Aba2</a></li>
	    					<li ><a id="aba3" href="teladomedaba3.php">Aba3</a></li>

	    	</ul>

	  	<main>

	  		<label class="s1">*</label> <p class="letra"> Descrição detalhada</p>
	        		<textarea></textarea>

	        		<table>

	  					<tr>

	  		 				<td>	

							<select name="ambulancia2" class="campos letrat distancia distancia3">

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

	  		 				<select name="ambulancia" class="campos letrat distancia2 distancia3">

    							<option value="volvo">Tipo de Ambulância</option>
    								<option value="A">A</option>
   										<option value="B">B</option>
    										<option value="C">C</option>

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
				    	<header class="w3-container w3-pale-blue" >
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
				 	<img src="img/enfeite_azul.png" id="canto">

	</body>

	<script src="motor.js"></script>

</html>