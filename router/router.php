/* =============================
 *  ROUTER.PHP - Handles Domain & Subdomain Routing
 * ============================= */

function get_template_folder($domain) {
    global $mysqli;
    $stmt = $mysqli->prepare("SELECT template_folder FROM sites_subdomains WHERE domain = ? OR subdomain = ? LIMIT 1");
    $stmt->bind_param("ss", $domain, $domain);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        return $row['template_folder'];
    }
    return DEFAULT_TEMPLATE; // Fallback if no match
}

define('CURRENT_TEMPLATE', get_template_folder($_SERVER['HTTP_HOST']));
