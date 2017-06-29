<?php
    $dsn = 'mysql:host=sql1.njit.edu;dbname=oah5';
    $username = 'oah5';
    $password = 'QT7llkLg';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>