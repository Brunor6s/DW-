<?php
require __DIR__ . '/autoload.php';
use App\Model\{Produto, ProdutoFisico, ProdutoDigital};
use App\DAO\ProdutoDAO;
use App\Database\Conexao;


$pdo = Conexao::get();
$dao = new ProdutoDAO($pdo);

$f = fopen('storage/produtos.csv', 'w');
fputcsv($f, ['id', 'nome', 'preco']);   // cabeçalho
foreach ($dao->listar() as $p) {
  fputcsv($f, [$p->getId(), $p->getNome(), $p->getPreco()]);
}
fclose($f);

$f = fopen('storage/produtos.csv', 'r');
if (!$f) exit('Não foi possível abrir');
while (($linha = fgetcsv($f)) !== false ) {
    echo "{$linha[1]} custa R$ {$linha[2]}";
}
fclose($f);
