<?php
require __DIR__ . 'autoload.php';
use \CarrinhoSessao;

$c = new CarrinhoSessao();
$c->adicionar((int) $_GET['id']);
header('Location: carrinho.php');
exit;