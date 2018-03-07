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
<?php
include '../Vendor/autoload.php';
$p = new \App\Model\Produto();
$p->setId($_GET['id']);

$pDAO = new \App\DAO\ProdutoDAO();
if ($pDAO->excluir($p))
    header("Location:produto-pesquisar.php?msg=1");