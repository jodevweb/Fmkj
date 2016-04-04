<?php
/**
 * Fmkj Framework
 *
 * RouteController
 *
 */
namespace Sys\Controllers;

class Route extends Base
{
    public $url;
    public $urlClient;
    private $controller;
    private $method;
    private $param;
    private $bind;
    private $classOn;
    private $bindParamClient;
    private $bindParamRoute;
    private $urlTerminal;
    protected $modules;

    public function __construct() {
        if (!empty($_GET['url'])) {
            $this->urlClient = htmlentities($_GET['url'], ENT_QUOTES);
        } else {
            $this->urlClient = 'index';
        }
        $this->modules = unserialize(MODULES);
    }

    public function Route($url, $bind) {
        $this->url = substr($url, 1);
        $this->bind = $bind;
        $this->controller = $this->bind['controller'];
        $this->method = $this->bind['action'];

        $this->bindParamRoute = explode('/:', $this->url);
        $this->bindParamClient = explode('/', $this->urlClient);
        echo $this->Callback();
    }

    private function FileExisted() {
            if (is_file(__ROOT__ . __CONTROLLERS_PATH__ . '/' . $this->controller . 'Controller.php')) {
                return require_once(__ROOT__ . __CONTROLLERS_PATH__ . '/' . $this->controller . 'Controller.php');
            } else {
                if ($this->modules) {
                    foreach($this->modules['name'] as $modules) {
                        if (is_file(__ROOT__ . 'App/Modules/' . $modules . '/Controllers/' . $this->controller . 'Controller.php')) {
                            return require_once(__ROOT__ . 'App/Modules/' . $modules . '/Controllers/' . $this->controller . 'Controller.php');
                        } else {
                            $this->urlTerminal .= 'Fichier ' . $this->controller . 'Controller.php inexistant !';
                        }
                    }
                }
            }
    }

    private function ClassExisted() {

        $Fichier = $this->controller . 'Controller';

            if (class_exists('\\Controllers\\' . $Fichier . '\\' . $this->controller)) {
                $ClassFull = '\\Controllers\\' . $Fichier . '\\' . $this->controller;
                $this->classOn = new $ClassFull;
            } else {
                if ($this->modules) {
                    if (class_exists('\\Module\\Controllers\\' . $Fichier . '\\' . $this->controller)) {
                        $ClassFull = '\\Module\\Controllers\\' . $Fichier . '\\' . $this->controller;
                        $this->classOn = new $ClassFull;
                    } else {
                        $this->urlTerminal .= 'Class ' . $this->classOn . ' inexistante !';
                    }
                }
            }
    }

    private function Callback() {
        $ElementsRoute = explode('/', $this->bindParamRoute[0]);
        $routePremier = $this->bindParamRoute[0];

        unset($this->bindParamRoute[0]);
        $NbElements = count($ElementsRoute);

        $urlParam = '';
        for ($i = 0; $i < $NbElements; $i++) {
            $urlParam .= $this->bindParamClient[$i] . '/';
            unset($this->bindParamClient[$i]);
        }

        $urlParam = substr($urlParam, 0, -1);

        if ($urlParam == $routePremier) {

            if ($this->bindParamRoute AND $this->bindParamClient) {
                $this->param = [];
                $this->param = array_combine($this->bindParamRoute, $this->bindParamClient);
            }

            $this->FileExisted();
            $this->ClassExisted();


            $method = $this->method . 'Route';
            if (method_exists($this->classOn, $method)) {
                if (!empty($this->param) AND is_array($this->param)) {

                    $viewparam = '';
                    foreach ($this->param as $paramdebug) {
                        $viewparam .= $paramdebug.'/';
                    }

                    $this->urlTerminal = '<span class="dpm">Route: <kbd>'.$routePremier. '</kbd></span> <span class="dpm">Parameters: <kbd>'.$viewparam.'</kbd></span> <span class="dpm">Controller: <kbd>'.$this->controller.'</kbd></span> <span class="dpm">Method: <kbd>'.$this->method.'</kbd></span>';
                    return $this->classOn->$method($this->param);
                } else {
                    $this->urlTerminal = '<span class="dpm">Route: <kbd>'.$routePremier. '</kbd></span> <span class="dpm">Parameters: <kbd>N/A</kbd></span> <span class="dpm">Controller: <kbd>'.$this->controller.'</kbd></span> <span class="dpm">Method: <kbd>'.$this->method.'</kbd></span>';
                    return $this->classOn->$method();
                }
            } else {
                $this->urlTerminal .= 'Method ' . $method . ' inexistante !';
            }
        }
    }

    public function getRoute() {
        if ($this->urlTerminal):
            return $this->urlTerminal;
        else:
            return 'Aucune route trouv&eacute;e';
        endif;
    }
}