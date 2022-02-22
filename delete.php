<?php

$pdo = require('connect.php');

$list_id = 1;


$sql= 'DELETE from authors where list_id = :list_id';
$statement = $pdo->prepare($sql);
$statement->bindParam(':list_id', $list_id);

if($statement->execute()) {
    echo 'Data deleted';
}
