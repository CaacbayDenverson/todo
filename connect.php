<?php
require 'config.php';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

// try {
//     $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE ,  PDO::ERRMODE_WARNING);
//     if($pdo)
//     {
//         echo "Connect to database successfully";
//     }
//     //return $pdo;
// } catch (PDOException $e){
//     echo $e->getMessage();
// }

function connect($host, $db, $user, $password) {
 $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

     try {
         $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
         $pdo->setAttribute(PDO::ATTR_ERRMODE ,  PDO::ERRMODE_WARNING);
         return $pdo;
        //  if($pdo)
        //  {
        //     echo "Connect to database successfully";
        //  }
     } catch (PDOException $e){
         echo $e->getMessage();
     }

 }

 return connect($host, $db, $user, $password);