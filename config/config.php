/* =============================
 *  CONFIG.PHP - Database Config & Global Settings
 * ============================= */
 
define('DB_HOST', 'your-database-host');
define('DB_USER', 'your-database-username');
define('DB_PASS', 'your-database-password');
define('DB_NAME', 'your-database-name');

define('DEFAULT_TEMPLATE', 'default'); // Fallback template folder

define('BASE_URL', 'https://' . $_SERVER['HTTP_HOST'] . '/'); // Auto-detect base URL

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($mysqli->connect_error) {
    die("Database connection failed: " . $mysqli->connect_error);
}
