<?php
class Cliente {
  private string $nome;
  private string $email;

  public function __construct(string $nome, string $email) {
    $this->nome = $nome;
    $this->setEmail($email);
  }

  public function getNome(): string {
    return $this->nome;
  }

  public function setNome(string $nome): void {
    $this->nome = $nome;
  }

  public function getEmail(): string {
    return $this->email;
  }

  public function setEmail(string $email): void {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      throw new Exception("Email invalido");
    }
    $this->email = $email;
  }
}