<?php
    $server = 'localhost';
    $database = 'cardapio';
    $user = 'root';
    $password = '';

    try {
        $connection = mysqli_connect($server, $user, $password, $database);
    } catch (mysqli_sql_exception $e) {
        exit('Connection failed: ' . $e->getMessage());
    }

?>