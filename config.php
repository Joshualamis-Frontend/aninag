<?php
// Show errors (turn OFF later in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Timezone
date_default_timezone_set('Asia/Manila');

// Database credentials
$host = "sql12.freesqldatabase.com";
$user = "sql12812974";
$pass = "BjDitZFDhE";
$db   = "sql12812974";
$port = 3306;

// Create connection
$con = mysqli_connect($host, $user, $pass, $db, $port);

// Check connection
if (!$con) {
    die("❌ Database connection failed: " . mysqli_connect_error());
}

// Set charset
mysqli_set_charset($con, "utf8mb4");

// Sanitize helper
function sanitize_input($con, $data) {
    return mysqli_real_escape_string($con, trim($data));
}

// Logs directory
define('LOG_DIR', __DIR__ . '/logs/');
if (!file_exists(LOG_DIR)) {
    mkdir(LOG_DIR, 0755, true);
}
?>
