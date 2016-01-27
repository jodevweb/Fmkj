<?php
/**
 * Fmkj Framework
 *
 * BaseController
 *
 */
namespace Sys\Controllers;

use Sys\Controllers\Route;
abstract class Base
{
    // Path du dossier de bootstrap
    const PATH_BOOTSTRAP = __BOOTSTRAP__;

    // Path du dossier des vues
    const PATH_VIEWS = __VIEWS__;

    // Nom de l'application
    const NAME_APPLICATION = __NAME_APPLICATION__;

    // Url du projet
    const URL_PATH = __URL_LOCAL__;

    public static function view()
    {
        include_once(__ROOT__.'vendor/autoload.php');

        $loader = new \Twig_Loader_Filesystem(__VIEWS__); // Dossier contenant les templates
        $twig = new \Twig_Environment($loader, array(
            'cache' => __VIEWS__.'/cache/',
            'auto_reload' => true
        ));
        $twig->addExtension(new \Twig_Extensions_Extension_Text());
        $twig->addExtension(new \Twig_Extensions_Extension_I18n());
        $twig->addExtension(new \Twig_Extensions_Extension_Intl());
        $twig->addExtension(new \Twig_Extensions_Extension_Array());
        $twig->addExtension(new \Twig_Extensions_Extension_Date());

        $twig->addGlobal('app_name', __NAME_APPLICATION__);
        $path = array('views' => __VIEWS__, 'url' => __URL_LOCAL__, 'bootstrap' => __BOOTSTRAP__);
        $twig->addGlobal('path', $path);
        $route = array('only' => 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
        $twig->addGlobal('route', $route);

        return $twig;
    }

    public static function db()
    {
        $bddCo = new \PDO('mysql:host='.__DB_HOST__.';dbname='.__DB_NAME__, __DB_USER__, __DB_PASSWORD__, array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8, lc_time_names = 'fr_FR'"));
        return $bddCo;
    }

    public static function clear_empty_value($string)
    {
        $string = str_replace($string, ' ', '');

        return $string;
    }
}