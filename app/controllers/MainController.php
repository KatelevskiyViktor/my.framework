<?php


namespace app\controllers;


use mf\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->setMeta('Main page', 'Description...', 'keywords...');
        $this->set(['test' => 'TEST VAR']);
    }
}