<?php
class Conta {
  private float $saldo = 0;

  public function depositar(float $valor): void {
    if ($valor <= 0) {
      throw new Exception("Valor invalido");
    }
    $this->saldo += $valor;
  }

  public function sacar(float $valor): void {
    if ($valor <= 0) {
      throw new Exception("Valor invalido");
    }
    if ($valor > $this->saldo) {
      throw new Exception("Saldo insuficiente");
    }
    $this->saldo -= $valor;
  }

  public function getSaldo(): float {
    return $this->saldo;
  }
}