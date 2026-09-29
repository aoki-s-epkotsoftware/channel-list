<?php
const DB_HOST = 'php8-2-db-host'; // .envファイルの DB_HOST_NAME を参照
const DB_PORT = 3306; // docker-compose.ymlファイルの services.db.ports を参照 （右側に記載されているポート番号）
const DB_DATABASE = 'channel'; // docker/db/sql/init.sql を参照
const DB_USERNAME = 'root';
const DB_PASSWORD = 'root'; // .envファイルの DB_ROOT_PASSWORD を参照
const DB_CHARSET = 'utf8mb4';
const DB_OPTIONS = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
];//接続オプション

$dsn = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_DATABASE . ';charset=' . DB_CHARSET;
try {
    $pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD, DB_OPTIONS);
} catch (PDOException $e) {
    echo 'DB接続失敗' . $e->getMessage();
    exit;
}
