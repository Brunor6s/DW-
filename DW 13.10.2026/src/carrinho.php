<?php
class Carrinho {
  private array $itens = []; // cada item: ['produto'=>Produto, 'qtd'=>int]

  public function adicionar(Produto $p, int $qtd = 1): void {
    if (!$p->temEstoque($qtd)) throw new Exception("Sem estoque");
    $this->itens[] = ['produto' => $p, 'qtd' => $qtd];
  }
  public function total(): float {
    $t = 0;
    foreach ($this->itens as $i) $t += $i['produto']->getPreco() * $i['qtd'];
    return $t;
  }
}