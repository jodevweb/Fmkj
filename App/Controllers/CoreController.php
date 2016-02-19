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

        if ($Request->isGet()) {
            if ($Request->validate(['test', 'test2'])) {
                echo 'tout est ok';
            } else {
                echo 'tout n\'est pas ok';
            }
        }

        echo Base::view()->render('index.twig', array('articles' => $Articles, 'request' => $Data));
    }
}