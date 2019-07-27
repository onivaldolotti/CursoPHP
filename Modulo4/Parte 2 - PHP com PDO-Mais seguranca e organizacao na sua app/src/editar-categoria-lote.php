<?php require_once 'autoload.php';

$categoria = new Categoria();
$lista = $categoria->listar();

foreach ($lista as $linha) {
	$novaCategoria = new Categoria($linha['id']);
	$novaCategoria->nome = "Categoria ".$novaCategoria->nome;
	$novaCategoria->atualizar();
}
$nova_lista_de_categoria = $categoria->listar();
echo '<pre>';
print_r($nova_lista_de_categoria);
echo '</pre>';
