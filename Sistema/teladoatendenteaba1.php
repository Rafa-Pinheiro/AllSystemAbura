<?php include('conexao.php') ?>
<!DOCTYPE html>
	<html lang="pt-BR" dir="ltr">
		<head class="fonte">
	    	<meta charset="utf-8">

	        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

					  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

				  <link rel="stylesheet" href="aba1atendente.css">

	    	<title>Tela do Atendente</title>

		</head>

	<body class="fonte">

	    	<ul class="navbar">

	    		<li ><a href="#"><img class="renatinha" alt="Renatinha, logo do sistema. Em cor totalmente branca mostrando apenas a cabeça da axolote (logo)." src="img/axolote.png"></a></li>
	    			<li ><a id="aba1" href="teladoatendenteaba1.php">Aba1</a></li>
	       				<li ><a id="aba2" href="teladoatendenteaba2.php">Aba2</a></li>

	    	</ul>

	  	<main>

	  		<form>

        		<label class="s1">*</label> <input id="distancia" class="campos" type="text" name="nome" placeholder="Nome Completo" required>

					<input class="campos2" id="distancia2" type="text" name="nome" placeholder="Nome Completo do acidentado" required>

			</form>


    	  	<form>

		 	<label class="n1">*</label>	<input id="faixa_etaria" class="campos idade" type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" name="numerores" placeholder="Informe a faixa etária" required>

        		<h3 class="letrac letrah3">Possui Comorbidades?</h3>

            	<input class="rd" type="radio" id="sim" value="sim" name="comorbidade">
            		<label class="radio" for="sim">Sim</label>
            	<input class="rd" type="radio" id="nao" value="nao" name="comorbidade">
             		<label class="radio" for="nao">Não</label>

        	</form>

                <h2 class="letrac letrah2">Localização</h2>

                <form>

        			<label class="s1">*</label> <input class="campos" type="text" name="rua" placeholder="Informe a rua" required>

        				<label class="s2">*</label> <input class="campos2" type="text" name="bairro" placeholder="Informe o bairro" required>

        		</form>

        				<form>

          					<label class="n1">*</label> <input class="campos cidade" type="text" name="cidade" placeholder="Informe a cidade" required>

          						<label class="s1">*</label> <input id="numerores" type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" name="numerores" placeholder="Informe o n°" required>

          				</form>


    		<h4 class="letrac letrah4"> <label class="s1">*</label> Descrição </h4>
	        	<textarea id="desc"></textarea>

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
				 	<img src="img/enfeite.png" id="canto">

	</body>

	<script src="motor.js"></script>
	<script src="script.js"></script>

</html>