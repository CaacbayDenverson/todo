<?php

$pdo = require 'connect.php';

//Sample data
$name = 'Santa Claus';

$sql = 'INSERT INTO authors(name) VALUES (:name)';
$statement = $pdo->prepare($sql);
$statement->execute([
    ':name' => $name,
        
]);

$list_id = $pdo->lastInsertId();

echo 'The Author id '. $list_id .' was inserted';
