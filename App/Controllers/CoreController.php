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

use Fmkj\Controllers\Base;
use Fmkj\Controllers\Form; // Obligatoire pour créer un formulaire

class Core extends Base
{
    public function indexRoute()
    {
        //$db = Base::db(); use MySQL
        $twig = Base::view();


        //$reponse = $db->prepare('SELECT * FROM articles');
        //$reponse->execute();

        //$articles = $reponse->fetchAll();

        echo $twig->render('index.twig');
    }


    public function helloRoute($pseudo)
    {
        $twig = Base::view();

        $form = new Form();

        $MyForm = $form->startForm('result.php', 'post', 'demoForm',
                array('class'=>'demoForm', 'onsubmit'=>'return checkBeforeSubmit(this)') ) . PHP_EOL .

            $form->startTag('fieldset') . PHP_EOL .
            $form->startTag('legend') . 'Example Form' . $form->endTag() . PHP_EOL .

            $form->startTag('p') .

            $form->addLabelFor('firstName', 'First Name: ') .

            $form->addInput('text', 'firstName', '', array('id'=>'firstName', 'size'=>16, 'required'=>true) ) .
            $form->endTag('p') . PHP_EOL .
            $form->endForm();

        echo $twig->render('hello.twig', array(
            'pseudo' => $pseudo,
            'form' => $MyForm
         ));
    }
}