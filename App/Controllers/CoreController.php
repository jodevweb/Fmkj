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
                'user' => array(
                    'left',
                    'user.id = articles.user_id'
                ),
                'profile' => array(
                    'left',
                    'profile.user_id = articles.user_id'
                ),
            ),
            'where' => 'user.id = 1 AND articles.id != 3',
            'limit' => array('1', '3'),
        ));

        /*
        $Data = $Request->request();

        if ($Request->isGet()) {
            if ($Request->validate(['test', 'test2'])) {
                echo 'tout est ok';
            } else {
                $Request->redirect('routes');
            }
        }
        */

        echo Base::view()->render('index.twig', array('articles' => $Articles));
    }
}
