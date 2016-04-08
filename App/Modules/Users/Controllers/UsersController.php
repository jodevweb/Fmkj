<?php
/**
 * Fmkj Framework
 *
 * UserController
 *
 * Module User
 *
 */
namespace Module\Controllers\UsersController;

use \Sys\Controllers\Base;
use \Sys\Controllers\Form; // Obligatoire pour créer un formulaire
use \Sys\Controllers\Datadon; // Facultatif pour utiliser le "query builder"
use \Sys\Controllers\Request; // Facultatif pour utiliser post & get

class Users extends Base
{
    public function loginRoute()
    {
        $form = new Form();
        $Form = $form->startForm('', 'post', 'login',
                array('class'=>'login') ) .

            $form->addInput('text', 'login', '', array('required'=>true) ) .
            $form->addInput('password', 'password', '', array('required'=>true) ) .
            $form->endForm();

        echo Base::view()->render('Users/login.twig', array('form' => $Form));
    }
}