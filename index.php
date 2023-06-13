<?php

spl_autoload_register(function ($className) {
    $classFile = __DIR__ . '/' . $className . '.php';
    if (file_exists($classFile)) {
        require_once $classFile;
    }
});

$configFilePath = __DIR__ . '/config.php';

$configData = require $configFilePath;

$databaseConfig = $configData['database'];

$dbConnection = DatabaseConnection::getInstance($databaseConfig);

$pdo = $dbConnection->getConnection();

if ($pdo) {
    echo 'Spojeni';
} else {
    echo 'Greška';
}