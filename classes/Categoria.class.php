<?php

include 'classes\ConexaoBD.php';

class Categoria {

    private $nome;
    private $idCategoria;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    public function getIdCategoria() {
        return $this->idCategoria;
    }

    public function insereCategoria() {

        $sql = "INSERT INTO `produtos`.`categoria` (`Nome`) 
                VALUES ('$this->nome')";

        ConexaoBD::inserirBanco($sql);
    }

    public function buscarCategoria() {

        $sql = "SELECT * FROM produtos.categoria;";

        ConexaoBD::listar($sql);
    }

    
    
}
