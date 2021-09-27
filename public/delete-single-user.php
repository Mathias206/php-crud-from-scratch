<?php 

require "../config.php";
require "../common.php";

if (isset($_GET['id'])) {
    try {
        $connection = new PDO($dsn, $username, $password, $optnions);
        $id = $_GET['id'];
        $sql = "DELETE FROM users WHERE id = :id";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();

        echo "Usuário deletado com sucesso!";
    } catch(PDOException $error) {
        echo $sql . "<br>". $error->getMessage();
    }
} else {
    echo "Algo deu errado";
}

?>