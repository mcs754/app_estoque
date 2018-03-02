<?php
include '../Vendor/autoload.php';
$p = new \App\Model\Produto();
$p->setId($_GET['id']);

$pDAO = new \App\DAO\ProdutoDAO();
if ($pDAO->excluir($p))
    header("Location:produto-pesquisar.php?msg=1");