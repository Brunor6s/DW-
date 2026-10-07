<?php
$nome = "";

if (isset($_POST["nome"])) {
    $nome = htmlspecialchars(trim($_POST["nome"]), ENT_QUOTES, "UTF-8");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>
    <h1>Formulário</h1>

    <form method="post">
        <label for="nome">Seu nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Seu nome" required>
        <button type="submit">Enviar</button>
    </form>

    <?php if ($nome != "") { ?>
        <p>Olá, <?php echo $nome; ?>!</p>
    <?php } ?>
</body>
</html>
