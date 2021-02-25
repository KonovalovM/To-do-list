<?php
$config = include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";

$pdo = new \PDO(
    sprintf('mysql:host=%s;dbname=%s', $config['host'], $config['dbname']),
    $config['user'],
    $config['pass'],
);