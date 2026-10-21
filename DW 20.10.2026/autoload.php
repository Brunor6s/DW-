<?php
spl_autoload_register(function (string $classe): void {
    $prefixo = 'App\\';

    if (strncmp($classe, $prefixo, strlen($prefixo)) !== 0) {
        return;
    }

    $arquivo = __DIR__ . '/' . str_replace('\\', '/', substr($classe, strlen($prefixo))) . '.php';

    if (is_file($arquivo)) {
        require $arquivo;
    }
});