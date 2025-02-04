/* =============================
 *  INDEX.PHP - Main Entry Point
 * ============================= */

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/router.php';
require_once __DIR__ . '/template_engine.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
load_template($page);
