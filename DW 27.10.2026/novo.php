<?php require __DIR__ . '/../autoload.php'; use App\Database\Conexao;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $stmt = Conexao::get()->prepare('
INSERT INTO produtos (nome, preco, estoque) 
VALUES (:n, :p, :e)'
  );
  $stmt->execute([
     ':n' => trim($_POST['nome']), 
 ':p' => (float)$_POST['preco'], 
 ':e' => (int)$_POST['estoque']
  ]);
  header('Location: index.php'); exit;
}
?>
<form method="post">
  Nome <input name="nome" required>
  Preço <input name="preco" type="number" step="0.01" required>
  Estoque <input name="estoque" type="number" required>
  <button>Salvar</button>
</form>
