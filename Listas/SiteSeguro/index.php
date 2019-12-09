<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="arquivosExternos/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="estiloProprio.css">
    <link href="arquivosExternos/favicon.ico" rel="icon">
    <title>Login</title>
</head>

<body class="text-center">
    <div class="container-fluid mx-auto w-50 cabeca row navbar navbar-expand-sm px-5">
        <h3 class="navbar-text col-sm-6">Login</h3>

        <ul class="navbar-nav col-sm-6">
            <li class="nav-item">
                <a class="nav-link" href="criarUsuario.php">Novo por aqui? Cadastre-se!</a>
            </li>
        </ul>
    </div>

    <form class="w-50 mx-auto mt-5 p-5 shadow rounded fundoForm clearfix" action="areaSeguraLogin.php" method="POST">
        <div class="form-group">
            <label class="float-left textoGrande" for="usuario">Usuário</label>
            <input name="usuario" type="text" class="form-control form-control-lg shadow" placeholder="Ex.: jubarte@netuno.com" id="usuario">
        </div>
        <div class="form-group">
            <label class="float-left textoGrande" for="senha">Senha</label>
            <input name="senha" type="password" class="form-control form-control-lg shadow" placeholder="Ex.: ********" id="senha">
        </div>
        <button type="submit" class="btn shadow float-right">Submit</button>
    </form>

    <script src="arquivosExternos/jquery-3.3.1.slim.min.js"></script>
    <script src="arquivosExternos/popper.min.js"></script>
    <script src="arquivosExternos/bootstrap.min.js"></script>
</body>

</html>