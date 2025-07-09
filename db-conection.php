<?php

$username = 'root';
$password = '19junho04';

try {
  $pdo = new PDO('mysql:host=localhost;dbname=sistema_mvc', $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
