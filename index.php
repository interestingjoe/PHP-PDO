<?php
    $host = 'localhost';
    $username = 'root';
    $password = 'Password4Me!';
    $db_name = 'helloworld';
    $dsn = 'mysql:host=' . $host . ';dbname=' . $db_name;

    $pdo = new PDO($dsn, $username, $password);
    $statement = $pdo->query('SELECT * FROM test');

?>