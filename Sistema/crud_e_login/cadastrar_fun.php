<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP AND CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="estilo.css">

    <title>Cadastrar Funcionário</title>
</head>

<body id="body-cadastrar">

    <div class="cadastrar-container">
        <div class="row">
            <div class="col-3 seta">
                <a href="home.php"><img src="seta.png" height="50px" width="50px"></a>
            </div>
            <div class="col-6 form-cadastrar">
                <div id="form-cadastrar">
                    <form action="testLogin.php" method="post">
                        <h1 id="h1-cadastrar">Cadastrar Funcionário</h1>
                        <input type="text" class="input-cadastrar" name="name_fun" placeholder="Nome Completo">
                        <input type="date" class="input-cadastrar" name="date_nasc">
                        <input type="number" class="input-cadastrar" name="rm_fun" placeholder="RM">
                        <input type="number" class="input-cadastrar" name="cpf" placeholder="CPF">
                        
                        <select class="input-cadastrar" name="" id="">
                            <option value="">Motorista</option>
                            <option value="">Atendente</option>
                            <option value="">Médico</option>
                            <option value="">Administrador</option>
                            <option value="">Moderador</option>
                        </select>

                        <input type="number" class="input-cadastrar" name="cnh" placeholder="CNH">
                        <input type="text" class="input-cadastrar" name="categoria_cnh" placeholder="Categoria da CNH">
                        <input type="date" class="input-cadastrar" name="vencimento_cnh" placeholder="Vencimento da CNH">
                        <input type="password" class="input-cadastrar" name="senha" placeholder="Senha">
                        <input type="submit" class="submit-cadastrar" name="submit" value="Cadastrar">
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