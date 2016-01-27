<?php
/**
 * Fmkj Framework
 *
 * Index
 *
 * Loading the whole application
 *
 */
$start = microtime(true);
include_once('Config/parameters.php');

define('__ROOT__', dirname(dirname(__FILE__)) . $dir_project); // On d�finit le chemin du projet
define('__BOOTSTRAP__', $dir_bootstrap); // On d�finit le chemin du dossier de Bootstrap
define('__VIEWS__', $dir_views); // On d�finit le chemin du dossier des vues
define('__NAME_APPLICATION__', $name_application); // On d�finit le nom de l'application
define('__URL_LOCAL__', $dir_project);
define('__CONTROLLERS_PATH__', $dir_controllers);

define('__DB_HOST__', $db_host); // On d�finit l'host de la base de donn�e
define('__DB_NAME__', $db_name); // On d�finit le nom de la base de donn�e
define('__DB_USER__', $db_user); // On d�finit l'utilisateur de la base de donn�e
define('__DB_PASSWORD__', $db_password); // On d�finit le mot de passe de la base de donn�e

define("__ENV_MODE__", $env);

require_once(__ROOT__.'Sys/EnvController.class.php');
$Env = new Sys\Controllers\Env();

require_once(__ROOT__.'Sys/BaseController.class.php');
require_once(__ROOT__.'Sys/RouteController.class.php');
require_once(__ROOT__.'Sys/FormController.class.php');

include_once(__ROOT__.'App/Route/route.php');

$end = microtime(true);
$timeExec = $end - $start;

echo $Env->debugbar($load->getRoute(), $timeExec);