<?php
require __DIR__ . '/../src/produto.php';
require __DIR__ . '/../src/carrinho.php';

$produtos = [
  new Produto(1, "Caneta", 2.5, 100),
  new Produto(2, "Caderno", 15.0, 20)
];

$carrinho = new Carrinho();
$carrinho->adicionar($produtos[0], 4);
$carrinho->adicionar($produtos[1], 2);

echo "Total: R$ " . $carrinho->total() . "\n";

try {
  $carrinho->adicionar($produtos[1], 50);
} catch (Exception $e) {
  echo "Erro: " . $e->getMessage() . "\n";
}