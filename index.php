<?php
require 'db.php';

$name = "John";
$users = ["Alice", "Bob", "Charlie"];

foreach ($users as $user) {
    echo "User: $user<br>";
}

if ($name == "John") {
    echo "Welcome, John!";
}

function greet($name) {
    echo "Hello, $name!";
}

greet("Visitor");
?>
<html>
<head>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <form method="POST" action="form_handler.php">
        <input type="text" name="email" placeholder="Email">
        <button type="submit">Submit</button>
    </form>
    <input type="range" id="slider">
    <script src="assets/script.js"></script>
</body>
</html>
