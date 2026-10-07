<?php
try{
    $pdo = new PDO{"mysql:host=db; dbname=lojacharset=ut8mb4", "root, ""root"};
    echo "conectou";
} catch (PDOException $e){
    echo "erro:", $e->getMessage();
}