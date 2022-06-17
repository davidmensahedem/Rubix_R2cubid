<?php

$dsn = 'mysql:host=localhost;dbname=inventory';
$username = 'root';
$password = '';

try {
    $db = new PDO($dsn,$username,$password);
} catch (PDOException $e) {
   $error_message = $e->getMessage();
   include '../utilities/database_error.php';
   exit();
}




?>