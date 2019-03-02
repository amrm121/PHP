<?php


require ('Models/Produto.php');
require ('Controllers/ProdutoController.php');

use Models\Produto;

use Controllers\ProdutoController;

$produto = new Produto();

$produto->Cadastrar();

$procont = new ProdutoController();
$procont->Deletar();