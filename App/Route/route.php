<?php
/**
 * Fmkj Framework
 *
 * Route
 *
 * create your route here
 * Ex: $load->Route('/my-route/:param1/:param2', array('controller' => 'YourController', 'action' => 'YourMethod'));
 *
 */

$load = new \Sys\Controllers\Route();

$load->Route('/routes', array('controller' => 'FullRoute', 'action' => 'allroute'));
$load->Route('/bonjour/:prenom/:nom', array('controller' => 'Core', 'action' => 'hello'));
$load->Route('/index', array('controller' => 'Core', 'action' => 'index'));