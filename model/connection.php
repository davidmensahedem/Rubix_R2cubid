<?php

$dsn = 'mysql:host=localhost;dbname=r2cubid';
$username = 'root';
$password = '';

try {
    $db = new PDO($dsn,$username,$password);
} catch (PDOException $e) {
   $error_message = $e->getMessage();
//    include '../utilities/database_error.php';
   die($error_message);
   exit();
}




?>