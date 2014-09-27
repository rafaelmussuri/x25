<?php

include_once 'classes\Categoria.class.php';
include_once 'classes\ConexaoBD.php';

$objCategoria = new Categoria();

$objCategoria->setNome($_POST['categoria']);

$objCategoria->insereCategoria();

header('Location: index.php');
?>