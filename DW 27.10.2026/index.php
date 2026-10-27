<?php require __DIR__ . '/../autoload.php'; use App\Database\Conexao;
$produtos = Conexao::get()->query('SELECT * FROM produtos ORDER BY id DESC')->fetchAll(); ?>
<a href="novo.php">+ Novo produto</a>
<table border="1">
  <tr>
<th>ID</th><th>Nome</th><th>Preço</th><th>Estoque</th><th></th>
  </tr>
  <?php foreach ($produtos as $p): ?>
  <tr>
    <td><?= $p['id'] ?></td><td><?= htmlspecialchars($p['nome']) ?></td>
    <td>R$ <?= number_format($p['preco'], 2, ',', '.') ?></td>
    <td><?= $p['estoque'] ?></td>
    <td>
<a href="editar.php?id=<?= $p['id'] ?>">Editar</a>
<a href="excluir.php?id=<?= $p['id'] ?>" onclick="return confirm('Excluir?')"> Excluir</a>
</td>
  </tr>
  <?php endforeach; ?>
</table>
