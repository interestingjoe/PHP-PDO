<?php
    $host = 'localhost';
    $username = 'root';
    $password = 'xxxx';
    $db_name = 'helloworld';
    $dsn = 'mysql:host=' . $host . ';dbname=' . $db_name;

    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $statement = $pdo->query('SELECT * FROM test');

    while($row = $statement->fetch()) {
        echo $row->age . '<br>';
    }

?>