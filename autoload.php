<?php
/**
 * Fmkj Framework
 *
 * Index
 *
 * Loading the whole class
 *
 */

require_once('Config/modules.php');
define('MODULES', serialize($module));

if (empty($argv)) {
    require_once(__ROOT__ . 'Sys/EnvController.class.php');
    require_once(__ROOT__ . 'Sys/DatadonController.class.php');
    require_once(__ROOT__ . 'Sys/BaseController.class.php');
    require_once(__ROOT__ . 'Sys/RouteController.class.php');
    require_once(__ROOT__ . 'Sys/FormController.class.php');
    require_once(__ROOT__ . 'Sys/RequestController.class.php');
    include_once(__ROOT__ . 'App/Route/route.php');

    // Ajout des routes des modules
    if ($module['name']) {
        foreach ($module['name'] as $modules) {
            if (file_exists(__ROOT__ . 'App/Modules/' . $modules . '/Route/route.php')) {
                include_once(__ROOT__ . 'App/Modules/' . $modules . '/Route/route.php');
            }
        }
    }
} else {
    require_once('../Sys/EnvController.class.php');
    require_once('../Sys/DatadonController.class.php');
    require_once('../Sys/BaseController.class.php');
    require_once('../Sys/RouteController.class.php');
    require_once('../Sys/FormController.class.php');
    require_once('../Sys/RequestController.class.php');
}
