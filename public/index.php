<?php

require_once __DIR__ . '/../includes/init.php';

try {
    $pdo = Database::getConnection();

    $message =  $pdo->query('SELECT DATABASE()')->fetchColumn();
    $status = 'success';
} catch (PDOException $e) {
    error_log($e->getMessage());

    http_response_code(500);

    $message = 'Database connection failed.';
    $status = "error";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>EliteFort</title>

    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>

    <main class="container">
        <h1>EliteFort<span>.</span></h1>

        <p>Connect. Share. Discover.</p>

        <div class="status <?= $status ?>">
            <?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?>
        </div>

        <small>Phase 01 — Project Initialization</small>
    </main>

</body>
</html>
