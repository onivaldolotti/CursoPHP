<?php require_once "autoload.php" ?>

<?php
	try {
		$id = $_GET['id'];
		$categoria = new Categoria($id);

		$categoria->excluir();

		header('Location: categorias.php');
	} catch (Exception $e) {
		Erro::trataErro($e);
	}
