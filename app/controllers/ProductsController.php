<?php

class ProductsController extends \Phalcon\Mvc\Controller
{

    public function initialize()
    {
        $this->tag->setTitle('Gerenciar Proodutos');
        parent::initialize();
    }

    public function indexAction()
    {
        echo "Logado!!!";
    }

    public function newAction()
    {
        $this->view->form = new ProductsForm(null, array('edit' => true));
    }

    public function createAction()
    {
//        Gerar o relacionamento com categorias primeiro!
    }

}

