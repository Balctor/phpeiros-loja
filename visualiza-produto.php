<?php
include ("cabecalho.php");
include ("conecta.php");
include ("banco-produto.php");
include ("banco-categoria.php");


$id = $_POST["id"];
$produto = buscaProduto($conexao, $id);
$categoria_id = $produto['categoria_id'];

$categoria = buscaCategoria($conexao, $categoria_id);
$categoria_nome = $categoria['nome'];


?>

<div class="card">
    <div>
        <img  class="imagem-produto" src="src/produtos/img/<?=$produto['imagem']?>" alt="Card image cap">
    </div>	
    <div class="card-body">
            <h5 class="card-title"><?=$produto['nome'];?></h5>
        <p class="card-text"><?=$produto['descricao'];?></p>
    </div>
    <ul class="list-group">
        <li class="list-group-item"><strong>Preço: </strong><?=$produto['preco'];?></li>
        <li class="list-group-item"><strong>Categoria: </strong><?=$categoria_nome;?></li>
		<li class="list-group-item"><strong>Condição: </strong> <?=$produto['usado'] === '1' ? "Usada" : "Nova" ?></li>
    </ul>
    <div class="card-body">
        <a href="produto-lista.php"><button type="button" class="btn btn-info">Voltar</button></a>
    </div>
</div>

<?php include ("rodape.php"); ?>

