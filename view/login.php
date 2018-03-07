<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Estoque</title>
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <h1>Controle de Estoque</h1>
        <?php
            if ($_POST){
                include '../vendor/autoload.php';
                $u = new \App\Model\Usuario();
                $u->setEmail($_POST['email']);
                $u->setSenha($_POST['senha']);
                $uDAO = new \App\DAO\UsuarioDAO();
                if ($uDAO->login($u))
                    header("Location: produto-pesquisar.php");
                else
                    echo "<div class='alert-danger'>Email ou senha incorreta!</div>";
            }
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" placeholder="nome.sobrenome@gmail.com" class="form-control">
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" class="form-control">
            </div>
            <input type="submit" value="Logar" class="btn btn-success col-12">
        </form>
    </div>
</body>
</html>