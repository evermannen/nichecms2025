/* =============================
 *  INDEX.PHP - Main Entry Point
 * ============================= */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/core/router.php';
require_once __DIR__ . '/core/template_engine.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
load_template($page);
