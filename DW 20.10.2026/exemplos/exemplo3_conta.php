<?php
require __DIR__ . '/../src/conta.php';

$conta = new Conta();

$conta->depositar(200);
echo "Saldo: " . $conta->getSaldo() . "\n";

$conta->sacar(50);
echo "Saldo: " . $conta->getSaldo() . "\n";

try {
  $conta->sacar(1000);
} catch (Exception $e) {
  echo "Erro: " . $e->getMessage() . "\n";
}

echo "Saldo final: " . $conta->getSaldo() . "\n";