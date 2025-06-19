<?php
    $dsn = 'mysql:host=localhost;dbname=jewelrydb';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('C:/xampp/htdocs/../errors/database_error.php');
        exit();
    }
?>