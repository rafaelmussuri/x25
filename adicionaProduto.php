<?php

include_once 'classes\Produto.class.php';

$produto = new Produto();

$produto->setIdProduto($_POST['idProduto']);
$produto->setNome($_POST['produto']);
$produto->setValor($_POST['valor']);
$produto->setIdCategoria($_POST['idCategoria']);

var_dump($_POST);

$produto->salvarProduto();

//header('Location: index.php?pagina=cadastrarProduto');
?>