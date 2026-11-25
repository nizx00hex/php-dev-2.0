
<?php

define('ROOT_PATH', dirname(__DIR__));

require_once ROOT_PATH . '/classes/Database.php';

$config = require ROOT_PATH . '/config/database.php';

$database = new Database($config);

$pdo = $database->getConnection();
