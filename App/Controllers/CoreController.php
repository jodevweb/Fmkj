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
        $Data = new Datadon();
        $Request = new Request();

        $Articles = $Data->findAll('articles', array(
            'join' => array(
                'user',
                'left',
                'user.id = articles.user_id'
            )
        ));

        $Articles2 = $Data->findAll('articles', array(
            'join' => array(
                'user',
                'left',
                'user.id = articles.user_id'
            )
        ));

        $Value = $Request->request();

        echo Base::view()->render('bootstrap/index.bootstrap.twig', array('articles' => $Articles, 'post' => $Value));
    }
}