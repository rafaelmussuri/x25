<?php

class Produto {

    private $nome;
    private $valor;
    private $idCategoria;
    private $idProduto;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getValor($valor) {
        return $valor;
    }

    public function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    public function getIdCategoria() {
        return $this->idCategoria;
    }

    public function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
    }

    public function getIdProduto() {
        return $this->idProduto;
    }

    public function inserirProduto() {


        $sql = "INSERT INTO 'produtos'.'produto' ('nome', 'valor', 'categoria_idCategoria')"
                . "VALUE ('$this->nome','$this->valor','$this->idCategoria')";

        ConexaoBD::inserirBanco($sql);
    }

    public function listarProduto() {

        $sql = "SELECT nome,valor,Nome FROM produtos.produto
                        INNER JOIN produtos.categoria ON
                            produto.categoria_idCategoria = categoria.idCategoria;";

        ConexaoBD::listar($sql);
    }

    public function excluirProduto() {

        $sql = "DELETE FROM 'produtos'.'produto' WHERE idProduto = $this->idProduto";

        ConexaoBD::excluirBanco($sql);
    }

    public function listarProdutoId() {

        $sql = "SELECT * FROM produtos.produto WHERE idProduto = $this->idProduto";

        ConexaoBD::buscarPorId($sql);
    }

    public function alterarProduto() {

        $sql = "UPDATE produtos.produto SET
                nome = '$this->valor',
                    valor = '$this->valor',
                        categoria_idCategoria = '$this->idCategoria'
                            WHERE idProduto = $this->idProduto;";

        ConexaoBD::alterar($sql);
    }

    public function salvarProduto() {
        if ($this->idProduto == '') {
            $this->inserirProduto();
        } else {
            $this->alterarProduto();
        }
    }

}

?>
