<?php

require "../common.php";
require "../config.php";

try {
    $connection = new PDO($dsn, $username, $password, $optnions);
    $sql = "SELECT * FROM users";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}

require "templates/header.php";
?>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email Address</th>
            <th>Age</th>
            <th>Location</th>
            <th>Date</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($result as $row) {?>
            <td><?php echo escape($row["id"]); ?></td>
            <td><?php echo escape($row["firstname"]); ?></td>
            <td><?php echo escape($row["lastname"]); ?></td>
            <td><?php echo escape($row["email"]); ?></td>
            <td><?php echo escape($row["age"]); ?></td>
            <td><?php echo escape($row["location"]); ?></td>
            <td><?php echo escape($row["date"]); ?> </td> 
            <td><a href="update-single-user.php?id=<?php echo escape($row["id"]); ?>">Edit</a></td>
            <td><a href="delete-single-user.php?id=<?php echo escape($row["id"]); ?>">Delete</a></td>

        </tr>
       <?php } ?>

       </tbody>
</table>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php" ?>