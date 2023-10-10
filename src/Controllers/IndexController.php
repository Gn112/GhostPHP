<?php

namespace src\Controllers;
use src\Models\ProdutoModel;
use src\Models\InfoModel;
use GHOST\Controller\Action;
use GHOST\Model\Container;
class IndexController extends Action
{
    public function index()
    {
        // $this->view->dados = array('Sofá', 'Cadeira', 'Cama');

        $produto = Container::getModel('ProdutoModel');

        $this->view->dados = $produto->getProdutos();

        $this->render('index', 'layout1');
    }

    public function sobreNos()
    {
        $info = Container::getModel('InfoModel');

        $this->view->dados = $info->getInfo();

        $this->render('sobreNos', 'layout2');
    }
}


?>