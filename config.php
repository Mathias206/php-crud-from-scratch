<?php

/**
 * configuracao para conexao com o banco de dados
 */

$host = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "teste";
$dsn = "mysql:dbname=$dbname;host=$host";
$optnions = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

?>  