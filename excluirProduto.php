<?php

include_once 'classes\ConexaoBD.php';
include_once 'classes\Produto.class.php';

$objProduto = new Produto();
$objProduto->setNome($_GET['idProduto']);
$objProduto->excluirProduto();

header('Location: cadastrarProduto.php');


