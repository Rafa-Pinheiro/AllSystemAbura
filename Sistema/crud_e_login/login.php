<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP AND CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Entrar</title>
</head>

<body id="body-entrar">

    <div class="entrar-container">
        <div class="row">
            <div class="col-3 seta-entrar">
                <a href="home.php"><img src="seta.png" height="50px" width="50px"></a>
            </div>
            <div class="col-6 form-entrar">
                <div id="form-entrar">
                    <form action="testLogin.php" method="post">
                        <h1 id="h1-entrar">Entrar</h1>
                        <input type="text" class="input-entrar" name="email" placeholder="Usuário">
                        <input type="password" class="input-entrar" name="senha" placeholder="Senha">
                        <input type="submit" class="submit-entrar" name="submit" value="Enviar">
                        <br><br>
                        <p>USUÁRIOS DE TESTE: funcionario, <br> admin <br> SENHAS DE TESTE: 123</p>
                    </form>
                </div>
            </div>
            <div class="col-3 logo-entrar">
                <img src="../../Logo/SEM_EFEITOS.png" alt="logo" height="370px" width="400px">
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