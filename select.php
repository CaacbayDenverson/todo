<?php

$pdo = require('connect.php');


// using query 
$sql = 'SELECT list_id, name from authors';


$statement = $pdo->query($sql);

$authors = $statement->fetchAll(PDO::FETCH_ASSOC); // for array


if($authors){
    foreach($authors as $author)  {
        echo $author['list_id'].' ';
        echo $author['name'].'<br>';
    }
}
