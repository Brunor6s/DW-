<form method="post" enctype="multipart/form-data">
  <input type="file" name="foto" accept="image/*">
  <button>Enviar</button>
</form>

<?php
$f = $_FILES['foto'] ?? null;
if (!$f || $f['error'] !== UPLOAD_ERR_OK) exit('Falha no upload');
if ($f['size'] > 2 * 1024 * 1024) exit('Máximo 2 MB');
$mime = (new finfo(FILEINFO_MIME_TYPE))->file($f['tmp_name']);
$ext = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/webp' => 'webp'][$mime] ?? null;
if (!$ext) exit('Formato não permitido');

$novoNome = bin2hex(random_bytes(8)) . '.' . $ext;     // nome aleatório
$destino  = __DIR__ . '/uploads/' . $novoNome;
if (!move_uploaded_file($f['tmp_name'], $destino)) exit('Erro ao salvar');
// guardar $novoNome na coluna produtos.imagem
echo "Enviado: uploads/$novoNome";