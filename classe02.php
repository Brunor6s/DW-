<?php

class Animal {
    const tipo = "animal";

    public function emitirSom(): void{
        echo "Som de algo";
    }
}

class cachorro extends Animal {
    public funciton emitirSom(): void{
        parent::emitirSom();
        echo " e latindo";
    }
}

$c = new Cachorro();
$C->emitirSom();