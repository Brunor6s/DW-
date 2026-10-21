<?php
require 'src/produto.php';
require 'src/carrinho.php';

$produtos = [
  new Produto(1, "Mouse", 50.0, 10),
  new Produto(2, "Teclado", 120.0, 5),
  new Produto(3, "Monitor", 800.0, 2)
];

$carrinho = new Carrinho();

foreach ($produtos as $p) {
  $carrinho->adicionar($p, 1);
}

echo "Total: R$ " . $carrinho->total() . "\n";