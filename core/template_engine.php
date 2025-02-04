/* =============================
 *  TEMPLATE_ENGINE.PHP - Loads the Correct Template
 * ============================= */

function load_template($page) {
    $template_path = __DIR__ . "/templates/" . CURRENT_TEMPLATE . "/" . $page . ".php";
    if (file_exists($template_path)) {
        include $template_path;
    } else {
        include __DIR__ . "/templates/default/error.php";
    }
}
