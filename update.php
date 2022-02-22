<?php 

$pdo = require('connect.php');

$data = [
    'list_id' => 0,
    'name' => 'Denver'
];

$sql = 'UPDATE authors
        SET name = :name
        WHERE list_id = :list_id';
    
$statement = $pdo->prepare($sql);

$statement->bindParam(':name', $data['name']);
$statement->bindParam(':list_id', $data['list_id']);

;
if($statement->execute()){
    echo 'Updated successfully';
}else{
    echo 'Failed to update';
}