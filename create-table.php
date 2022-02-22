<?php

//connect to database
 $pdo = require 'connect.php';


$statements = [
    'CREATE TABLE authors( 
        list_id   INT NOT NULL,
        todo  VARCHAR(100) NOT NULL, 
        user_id VARCHAR(50) NOT NULL
        )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;',
 	'CREATE TABLE `user` (
         `userId` int(5) NOT NULL,
         `username` varchar(32) NOT NULL,
         `fullName` varchar(64) NOT NULL
         ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;'];

 //Execute SQL Statement
 foreach ($statements as $statement){
     $pdo->exec($statement);
 }