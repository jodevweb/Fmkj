<?php
/**
 * Fmkj Framework
 *
 * ErrorPageController
 *
 * 404, Controller
 *
 */
namespace Sys\Controllers;

use Sys\Controllers\Base;

class ErrorPage extends Base
{
    public function PageNotFoundRoute()
    {
        echo Base::view()->render('errors/404.twig');
    }

    public function PageNoParametersRoute()
    {
        echo Base::view()->render('errors/params.twig');
    }

    public function PageNoFichier()
    {
        echo Base::view()->render('errors/nofichier.twig');
    }
}
