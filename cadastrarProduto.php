<?php
include_once 'classes\Categoria.class.php';
include_once 'classes\Produto.class.php';

$objCategoria = new Categoria();
$listaCategoria = $objCategoria->buscarCategoria();

$objProduto = new Produto();
$listaProduto = $objProduto->listarProduto();
?>

<fieldset>
    <legend>Cadastrar Produto</legend>
    <form>
        <label>Nome: </label>
        <input type="text" name="produto">
        <br>
        <label>Valor: </label>
        <input type="text" name="valor">
        <br>
        <label>Categoria</label>
        <select name="idCategoria">
            <option></option>
            <?php foreach ($listaCategoria as $categoria) { ?>
                <option value="<?php echo $categoria['idCategoria']; ?>"><?php echo $categoria['nome']; ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="SALVAR">
    </form>
</fieldset>

<table border="1">
    <thead>
    <th>Nome</th>
    <th>Valor</th>
    <th>Categoria</th>
</thead>
<tbody>
    <?php foreach ($listaProduto as $produto) { ?>
        <tr>
            <td><?php echo $produto['nome'] ?></td>
            <td><?php echo $produto['valor'] ?></td>
            <td><?php echo $produto['Nome'] ?></td>
            <td>
                <a href="excluirProduto.php?id=<?php echo $prod['idProduto'] ?>">
                    <img src="https://www.netiq.com/documentation/idm402/policy_designer/graphics/icon_delete_n.png"/>
                </a>
                <a href="alterarProduto.php?&idProduto=<?php echo $prod['idProduto'] ?>">
                    <img src="http://oscardias.com/wp-content/uploads/2012/07/edit.png"/>
                </a>
            </td>
        </tr>
    <?php } ?>
</tbody>
</table>