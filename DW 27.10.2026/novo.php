<?php
require __DIR__ . '/../autoload.php';
use App\DAO\ProdutoDAO;
use App\Model\{ProdutoFisico, ProdutoDigital};
use App\Database\Conexao;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $n  = trim($_POST['nome']);
  $pr = (float)$_POST['preco'];
  $e  = (int)$_POST['estoque'];

  $p = $_POST['tipo'] === 'digital'
     ? new ProdutoDigital(null, $n, $pr, $e, trim($_POST['link']))
     : new ProdutoFisico(null, $n, $pr, $e, (float)$_POST['peso']);

  (new ProdutoDAO(Conexao::get()))->inserir($p);
  header('Location: index.php');
  exit;
}
?>
<form method="post">
  Nome <input name="nome" required>
  Tipo <select name="tipo">
    <option value="fisico">Físico</option>
    <option value="digital">Digital</option>
  </select>
  Peso <input name="peso" type="number" step="0.001">
  Link <input name="link" type="text">
  Preço <input name="preco" type="number" step="0.01" required>
  Estoque <input name="estoque" type="number" required>
  <button>Salvar</button>
</form>