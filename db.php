<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=testdb", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB error: " . $e->getMessage());
}
?>
