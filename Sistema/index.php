<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Raylla S." />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="assets/favicon/site.webmanifest">

	 <!-- BOOTSTRAP AND CSS -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
	
    <title>Entrar</title>

</head>

<body id="body-entrar">

<!-- <script>
	alert("Insira o banco de dados p/ que tudo funcione!");
</script> -->

<div class="entrar-container">
        <div class="row">
            <div class="col-3 seta">
                <a href="#"><img src="assets/seta.png" height="50px" width="50px"></a>
            </div>
            <div class="col-6 form-entrar">
                <div id="form-entrar">
					<form class="form-signin" action="crud_e_login/login.php" method="POST">
						<img class="mb-4" src="img/login.png" alt="img-login" width="110" height="120" />

						<input type="text" name="rm" class="input-entrar" placeholder="RM" required autofocus />
						<input type="password" name="senha" id="inputPassword" class="input-entrar" placeholder="Senha" required />
						<button class="submit-entrar" type="submit">Entrar</button>

						<p>ATENDENTE: RM = 2, SENHA = 123</p>
						<p>MEDICO: RM = 3, SENHA = 123</p>
						<p>ADMIN: RM = 4, SENHA = 123</p>
						</form>
                </div>
            </div>

            <div class="col-3 logo-entrar">
                <img src="../Logo/SEM_EFEITOS.png" alt="logo" height="370px" width="400px">
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    
    <!-- JQUERY -->
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>

</body>
</html>