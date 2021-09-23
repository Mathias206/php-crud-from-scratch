<?php

/**
 * abre um conexao via PDO para criar
 * um novo banco de dados uma tabela com uma estrutua
 */


require 'config.php';

try {
    $connection = new PDO("mysql:host=$host", $username, $password, $options);
    $sql = file_get_contents("data/init.sql");
    $connection->exec($sql);

    echo "Banco de dados criado com sucesso!";
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}


 ?>