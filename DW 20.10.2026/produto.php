<?php
abstract class Produto {
  public function __construct(protected string $nome, protected float $preco) {}
  abstract public function frete(): float;
  public function descricao(): string {
    return "{$this->nome}: R$ {$this->preco}";
  }
}

class ProdutoDigital extends Produto {
  public function __construct(string $nome, float $preco, private float $pesoKg) {
    parent::__construct($nome, $preco);
  }

  public function descricao(): string {
    return parent::descricao() . " (download)";
  }

  public function frete(): float {
    return 0;
  }
}

class ProdutoFisico extends Produto {
  public function __construct(string $nome, float $preco, private float $pesoKg) {
    parent::__construct($nome, $preco);
  }

  public function frete(): float {
    return 5.0;
  }
}

$t = new ProdutoFisico("Tênis", 249.9, 1.2);
echo $t->descricao();
$e = new ProdutoDigital("<br>E-book PHP", 39.9, 0.2);
echo $e->descricao();