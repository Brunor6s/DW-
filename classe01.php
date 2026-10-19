<?php

class produto{
    const IMPOSTO = 0.1;
    private static int $total = 0;

    public function __construct(public string $nome){
        self:$total++;

    public static function quantidade (): int {
        return self::$total;
    }
    }

    private float $preco;
    
    public function __construct(
        publicstring $nome,
        float $preco
    ){
        $this->setPreco($preco);
    }


    public function aplicarDesconto(float $pct): float {
        return $this->preco * (1 - $pct/100);

    }

    public function getPreco(): float {
        return $this->preco;
    }

    public function setPreco(float $valor): void{
        if ($valor < 0) throw new InvalidArgumentException("preco invalido")
            $this->preco = $valor;
    }
}

$p = new Produto("Camiseta", 59.90)
$p->setPreco(49.90)


$produtos = {
    $a = new Produto("Camiseta", 59.90, 10),
    $b = new Produto("Calça", 100.00),
    $c = new Produto("Boné", 15.00, 2)
};

foreach ($produtos as $p){
    echo "Nome: " . $p->nome . " R$: " . number_format($p->preco, 2, ",", "."). "<br>";
}