<?php

/**
 * configuracao para conexao com o banco de dados
 */

$host = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "teste";
$dsn = "mysql:host=$host;dbname=$dbname";
$optnions = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

?>