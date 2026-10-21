<?php
require __DIR__ . '/../src/cliente.php';

$cliente = new Cliente("Maria", "maria@email.com");
echo $cliente->getNome() . " - " . $cliente->getEmail() . "\n";

$cliente->setNome("Maria Silva");
echo $cliente->getNome() . "\n";

try {
  $cliente->setEmail("email_errado");
} catch (Exception $e) {
  echo "Erro: " . $e->getMessage() . "\n";
}