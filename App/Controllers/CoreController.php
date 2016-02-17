<?php
/**
 * Fmkj Framework
 *
 * CoreController
 *
 * Exemple Controller
 * index Route, hello Route
 *
 */
namespace Controllers\CoreController;

use Sys\Controllers\Base;
use Sys\Controllers\Form; // Obligatoire pour créer un formulaire
use Sys\Controllers\Datadon; // Facultatif pour utiliser le "query builder"
use Sys\Controllers\Request; // Facultatif pour utiliser post & get

class Core extends Base
{
    public function indexRoute()
    {
        $Datadon = new Datadon();
        $Request = new Request();

        $Articles = $Datadon->findAll('articles', array(
            'select' => array('*'),
            'join' => array(
                'user',
                'left',
                'user.id = articles.user_id'
            )
        ));

        $Data = $Request->request();

        if ($Request->isPost()) {
            if (!empty($Data['id'])) {
                return true;
            }
        }

        echo Base::view()->render('bootstrap/index.bootstrap.twig', array('articles' => $Articles, 'request' => $Data));
    }
}