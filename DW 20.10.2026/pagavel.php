<?php
interface Pagavel {
    public function pagar(float $valor): bool;
}

class Pix implements Pagavel {
    public function pagar(float $valor): bool {
        echo "Pix de R$ $valor";
 
        return true;
        }
}

class Cartao implements Pagavel {
    public function pagar(float $valor): bool {
        echo "Cartao de R$ $valor";
        return true;
    }
}

class ProdutoComDesconto extends ProdutoFisico {
    public $desconto;

    public function __construct(string $nome, float $preco, float $desconto) {
        parent::__construct($nome, $preco, $desconto);
        $this->desconto = $desconto;
    }

    public function total(): float {
        return $this->preco - ($this->preco * $this->desconto / 100);
    }
}

$itens = [
    new ProdutoFisico("Mouse", 100, 0.2),
    new ProdutoComDesconto("Teclado", 200, 10)
];

foreach ($itens as $item) {
    echo "{$item->nome}: R$ {$item->total()}<br>";
}