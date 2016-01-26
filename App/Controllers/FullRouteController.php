<?php
/**
 * Fmkj Framework
 *
 * FullRouteController
 *
 * Exemple Controller
 * Showing all routes available
 *
 */
namespace Controllers\FullRouteController;

use Fmkj\Controllers\Base;

class FullRoute extends Base
{
    public function allrouteRoute()
    {
        $AllControllers = array_diff(scandir(__ROOT__ . __CONTROLLERS_PATH__), array('..', '.'));
        foreach ($AllControllers as $Controllers) {
            $Class = substr($Controllers, 0, strlen($Controllers) - 14);
            $Fichier = substr($Controllers, 0, strlen($Controllers) - 4);
            require_once(__ROOT__ . __CONTROLLERS_PATH__ . '/' . $Fichier . '.php');

            $RouteAll = get_class_methods('\\Controllers\\' . $Fichier . '\\' . $Class);

            foreach($RouteAll as $Routes)
            {
                if (strpos($Routes, 'Route'))
                {
                    echo substr($Routes, 0, strlen($Routes) - 5) . '<br />';
                }
            }
        }
    }
}