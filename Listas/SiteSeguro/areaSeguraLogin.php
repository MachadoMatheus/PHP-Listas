<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "dados";
$porta = "3306";
$usuarioForm = $_POST['usuario'];
$senhaForm = $_POST['senha'];

/* Especificamente para bancos de dados MariaDB é necessário passar por parâmetro
     * também a porta do servidor, pois existem 2 servidores instalados (MySQL e MariaDB).
     * Se a porta não for passada por parâmetro, o PHP tentará se conectar com o MySQL (servidor padrão)
     */
$mysqli = new mysqli($host, $usuario, $senha, $bd, $porta); //cria um objeto do tipo mysqli

/* Para todo início de conexão SQL recomenda-se verificar a conexão,
     * usa-se o errno para ter certeza que não ocorreu nenhum erro da comunicação com o servidor
     */
if ($mysqli->connect_errno) {
    echo "Ocorreu um erro na conexão: " . $mysqli->connect_errno, '<br>', $mysqli->connect_error;
    echo "<script> alert('Ocorreu um erro na conexão com o servidor'); </script>";
}

//String de consulta SQL
$consulta = "SELECT senha FROM login WHERE usuario=\"" . $usuarioForm . "\"";
/**A consulta SQL é enviada para ser processada pelo servidor
 * 
 */
$resultado = $mysqli->query($consulta);
$arrayResultado = mysqli_fetch_array($resultado);

$saidaUsuario = "<h1 class='w-50 mx-auto mt-5 p-5 shadow rounded fundoForm clearfix";

if (empty($arrayResultado)) {
    $saidaUsuario .= " bg-danger'>Usuário Inexistente!!!</h1>";
} else if ($arrayResultado["senha"] == $senhaForm) {
    $saidaUsuario .= " bg-success'>Seja bem-vindo " . $usuarioForm . "!!!</h1>";
} else {
    $saidaUsuario .= " bg-warning'>Senha Incorreta " . $usuarioForm . "!!!</h1>";
}


//fecha a conexão
$mysqli->close();
?>

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
                <a class="nav-link" href="index.php">Voltar</a>
            </li>
        </ul>
    </div>

    <?php echo $saidaUsuario; ?>

    <script src="arquivosExternos/jquery-3.3.1.slim.min.js"></script>
    <script src="arquivosExternos/popper.min.js"></script>
    <script src="arquivosExternos/bootstrap.min.js"></script>
</body>

</html>