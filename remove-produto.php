<?php 
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

$id = $_GET['id'];
removeProduto($conexao, $id);

header("Location: produto-lista.php?removido=true");
die();
?>

<p class="text-success">Produto <?=$id;?> removido!</p>

<?php
include("rodape.php");
?>