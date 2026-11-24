<?php

require_once __DIR__ . '/../includes/init.php';

// try {

    $db1 = Database::connect();
    $db = Database::connect();

    var_dump($db1 === $db);
//     echo "Database connected successfully!";

// } catch (PDOException $e) {

//     error_log($e->getMessage());

//     echo "Database connection failed.";
// }