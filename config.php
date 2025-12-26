<?php
// Error reporting (turn off in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Timezone
date_default_timezone_set('Asia/Manila');

// Database config from ENV
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$db   = getenv('DB_NAME');
$port = getenv('DB_PORT') ?: 3306;

// Connect
$con = mysqli_connect($host, $user, $pass, $db, $port);

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($con, "utf8mb4");

// Sanitize helper
function sanitize_input($con, $data) {
    return mysqli_real_escape_string($con, trim($data));
}

// Logs
define('LOG_DIR', __DIR__ . '/../logs/');
if (!file_exists(LOG_DIR)) {
    mkdir(LOG_DIR, 0755, true);
}
?>
