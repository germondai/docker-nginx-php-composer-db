<?php

$driver = getenv("DB_DRIVER");
$host = getenv("DB_HOST");
$dbname = getenv("DB_NAME");
$user = getenv("DB_USER");
$password = getenv("DB_PASSWORD");

$dsn = "$driver:host=$host;dbname=$dbname" . ($driver === "mysql" ? ";charset=utf8" : "");

try {
    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    echo "Connected to $driver successfully!";
} catch (PDOException $e) {
    echo "Connection failed: {$e->getMessage()}";
}
